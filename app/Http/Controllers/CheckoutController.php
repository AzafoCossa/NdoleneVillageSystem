<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use App\Models\Room;
use Brick\Math\RoundingMode;
use Brick\Money\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use PaypalServerSdkLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalServerSdkLib\Environment;
use PaypalServerSdkLib\Models\Builders\AmountWithBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\OrderRequestBuilder;
use PaypalServerSdkLib\Models\Builders\PurchaseUnitRequestBuilder;
use PaypalServerSdkLib\Models\CheckoutPaymentIntent;
use PaypalServerSdkLib\PaypalServerSdkClientBuilder;

class CheckoutController extends Controller
{
    public $client;

    public function __construct()
    {
        $this->client = PaypalServerSdkClientBuilder::init()
        ->clientCredentialsAuthCredentials(
         ClientCredentialsAuthCredentialsBuilder::init(
             env('PAYPAL_CLIENT_ID'),
             env('PAYPAL_CLIENT_SECRET')
         )
        )->environment(Environment::SANDBOX)
        ->build();
    }

    public function store(Request $request){

        $room = Room::find($request->room_id);

        $price = Money::of($request->totalPrice, 'MZN')->dividedBy(64, RoundingMode::UP)->getAmount()->toFloat();

       $orderBody = [
        'body' => OrderRequestBuilder::init(
        CheckoutPaymentIntent::CAPTURE,
        [
            PurchaseUnitRequestBuilder::init(
                AmountWithBreakdownBuilder::init(
                    'USD',
                    $price
                )->build()
            )->build()
        ]
       )->build()];

       $apiResponse = $this->client->getOrdersController()->ordersCreate($orderBody);
    
       $reservation = new Reservation();
        $reservation->user_id = Auth::user()->id;
        $reservation->room_id = $room->id;
        $reservation->check_in = $request->checkin;
        $reservation->check_out = $request->checkout;
        $reservation->total_price = $request->totalPrice*100;
        $reservation->notes = $request->notes;
        $reservation->save();

        $payment = new Payment();
        $payment->reservation_id = $reservation->id;
        $payment->price = $request->totalPrice*100;
        $payment->save();

       return $this->handleResponse($apiResponse);
    }

    public function show($order){
        $captureBody = [
            'id' => $order,
        ];

        $apiResponse = $this->client->getOrdersController()->ordersCapture($captureBody);

        return $this->handleResponse($apiResponse);
    }

    public function edit(){
        $reservation = Reservation::where('user_id', Auth::user()->id)->latest()->first();
        $reservation->status = 'approved';
        $reservation->update();

        $payment = Payment::where('reservation_id', $reservation->id)->latest()->first();
        $payment->status = 'paid';
        $payment->update();

        return response()->json(["reservation" => $reservation, "payment" => $payment], 200);
    }

    private function handleResponse($response){
        return [
            'jsonResponse' => $response->getResult(),
            'httpStatusCode' => $response->getStatusCode(),
        ];
    }
}
