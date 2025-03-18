<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-white-50 uppercase bg-secondary">
                <tr>
                    <th scope="col" class="px-6 py-3">Room name</th>
                    <th scope="col" class="px-6 py-3">Guest username</th>
                    <th scope="col" class="px-6 py-3">Guest email</th>
                    <th scope="col" class="px-6 py-3">Price</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Room capacity</th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                <tr
                    wire:key="{{$reservation->id}}"
                    class="bg-white border-b border-gray-200 hover:bg-gray-50 hover:cursor-pointer"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                    >
                        {{$reservation->room->name}}
                    </th>
                    <td class="px-6 py-4">{{$reservation->guest->username}}</td>
                    <td class="px-6 py-4">{{$reservation->guest->email}}</td>
                    <td class="px-6 py-4">
                        {{$reservation->total_price/100}} MZN
                    </td>
                    <td class="px-6 py-4">{{$reservation->status}}</td>
                    <td class="px-6 py-4">{{$reservation->room->capacity}}</td>
                    <td class="px-6 py-4 text-right">
                        <a
                            href="#"
                            class="font-medium text-blue-600 hover:underline"
                            >Edit</a
                        >
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
