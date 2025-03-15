<div class="w-screen">
    <nav class="w-full bg-orange-900 px-2 py-4 md:px-0">
        <div
            class="container m-auto flex flex-row items-center justify-between"
        >
            <a href="/" class="logo flex flex-row items-center">
                <img
                    src="{{ asset('assets/img/logo_white.png') }}"
                    alt="Logo mark - Ndolene Village"
                />
            </a>
            <ul class="cta">
                <li>
                    <a
                        class="flex items-center gap-3 text-lg font-medium capitalize"
                        href="{{ url()->previous() }}"
                        ><svg
                            width="10"
                            height="18"
                            viewBox="0 0 10 18"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M0.418433 7.56416C-0.139478 8.12207 -0.139478 9.02812 0.418433 9.58603L7.5597 16.7273C8.11761 17.2852 9.02365 17.2852 9.58157 16.7273C10.1395 16.1694 10.1395 15.2633 9.58157 14.7054L3.44901 8.57286L9.5771 2.4403C10.135 1.88239 10.135 0.976345 9.5771 0.418433C9.01919 -0.139478 8.11314 -0.139478 7.55523 0.418433L0.41397 7.5597L0.418433 7.56416Z"
                                fill="#F4F4F4"
                            />
                        </svg>
                        Voltar</a
                    >
                </li>
            </ul>
        </div>
    </nav>
    <div class="xl:container mx-auto md:p-8 lg:p-12">
        <div class="header">
            <span class="text-lg text-slate-400">Estás no último passo!</span>
            <h1 class="text-4xl font-bold text-cyan-900">
                Digite os dados para finalizar.
            </h1>
        </div>
        <div
            class="flex flex-col-reverse md:grid md:grid-flow-col grid-cols-2 gap-5 mt-10"
        >
            <div class="form">
                <div class="pay-method grid grid-flow-col grid-cols-3 gap-5">
                    <div
                        class="flex justify-center align-center border border-green-600 rounded-lg px-2 py-1 bg-white"
                    >
                        <img
                            class="rounded-lg"
                            src="{{ asset('assets/img/visa.png') }}"
                            alt="Visa"
                        />
                    </div>
                </div>

                <div id="card-form" class="card_container mt-4">
                    <div id="card-name-field-container"></div>
                    <div id="card-number-field-container"></div>
                    <div class="grid grid-cols-2 gap-6">
                        <div id="card-expiry-field-container"></div>
                        <div id="card-cvv-field-container"></div>
                    </div>

                    <button
                        class="bg-primary mt-4 rounded-lg text-white py-4 px-10 hover:bg-orange-400 hover:cursor-pointer text-xl"
                        id="card-field-submit-button"
                        type="button"
                    >
                        Reservar
                    </button>
                </div>
            </div>
            <div
                class="card_image bg-gradient-to-br bg-white-200 justify-center align-center rounded-lg"
            >
                <div class="w-full h-full">
                    @if ($room->images->count() > 0)
                    <img
                        class="object-cover w-full max-h-[300px] rounded-t-lg"
                        src="{{asset('storage/'.$room->images[0]->path)}}"
                        alt="Credit card"
                    />
                    @endif
                    <div class="p-4 text-grey-900">
                        <h1 class="text-2xl font-bold text-grey-900">
                            {{ $room->name }}
                        </h1>
                        <div class="flex justify-between mt-4">
                            <div>
                                <span class="text-lg text-grey-500"
                                    >Preço por noite</span
                                >
                                <h1 class="text-2xl font-bold text-orange-900">
                                    {{ $room->price }} MZN
                                </h1>
                            </div>

                            <div>
                                <span class="text-lg font-bold text-grey-500"
                                    >Preço total</span
                                >
                                <h1 class="text-2xl font-bold text-orange-900">
                                    {{ $totalPrice }} MZN
                                </h1>
                                <span class="text-grey-400 text-base"
                                    >USD${{ $priceUSD }}</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@script
<script>
    const cardField = window.paypal.CardFields({
        createOrder: createOrderCallback,
        onApprove: onApproveCallback,
    });

    if (cardField.isEligible()) {
        const nameField = cardField.NameField();
        nameField.render("#card-name-field-container");

        const numberField = cardField.NumberField();
        numberField.render("#card-number-field-container");

        const cvvField = cardField.CVVField();
        cvvField.render("#card-cvv-field-container");

        const expiryField = cardField.ExpiryField();
        expiryField.render("#card-expiry-field-container");

        document
            .getElementById("card-field-submit-button")
            .addEventListener("click", () => {
                cardField.submit();
            });
    } else {
        document.querySelector("#card-form").style = "display: none";
    }

    async function onApproveCallback(data, actions) {
        try {
            const url =
                `{{ route('checkout.show', ['order' => '__ORDER_ID__']) }}`.replace(
                    "__ORDER_ID__",
                    data.orderID
                );

            const response = await fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
            });

            const rawData = await response.json();
            const orderData = rawData.jsonResponse;

            const transaction =
                orderData?.purchase_units?.[0]?.payments?.captures?.[0] ||
                orderData?.purchase_units?.[0]?.payments?.authorizations?.[0];

            const errorDetail = orderData?.details?.[0];

            if (
                errorDetail ||
                !transaction ||
                transaction.status === "DECLINED"
            ) {
            } else {
                const updateReservation = await fetch(
                    "{{ route('checkout.edit') }}",
                    {
                        method: "get",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        },
                    }
                );

                window.location.href = "{{ route('bookings.thankyou')}}";
            }
        } catch (error) {
            console.error(error);
        }
    }
    async function createOrderCallback() {
        try {
            const response = await fetch("{{ route('checkout.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({
                    room_id: "{{ $room->id }}",
                    checkin: "{{$checkin}}",
                    checkout: "{{$checkout}}",
                    totalPrice: "{{$totalPrice}}",
                }),
            });

            const data = await response.json();
            const orderData = data.jsonResponse;

            if (orderData.id) {
                return orderData.id;
            } else {
                const errorDetail = orderData?.details?.[0];

                const errorMessage = errorDetail
                    ? `${errorDetail.issue} ${errorDetail.description} (${errorDetail.debug_id})}`
                    : JSON.stringify(orderData);

                throw new Error(`Server error: ${errorMessage}`);
            }
        } catch (error) {
            console.error(error);
        }
    }
</script>
@endscript
