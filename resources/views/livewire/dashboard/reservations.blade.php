<div wire:cloak>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        @if(Auth::user()->hasRole('client'))
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
        @endif
        
        @if(Auth::user()->hasRole('administrator') || Auth::user()->hasRole('manager') || Auth::user()->hasRole('receptionist'))
        <div x-data="{showReservationForm: @entangle('showReservationForm')}" class="p-8" wire:ignore>
            <div x-show="showReservationForm" class="text-black">
                <h2 class="text-2xl font-semibold text-gray-900">Adicionar nova reserva</h2>
                <form wire:submit.prevent="addReservation" class="mt-8">
                    <div class="mt-2">
                        <div>
                            <label for="totalPrice">Nome do hospede</label>
                            <input type="text" wire:model="userForm.guest" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 disabled:bg-grey-200">
                        </div>
                        <div class="mt-2">
                            <label for="totalPrice">Email</label>
                            <input type="text" wire:model="userForm.email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 disabled:bg-grey-200">
                        </div>
                    </div>

                    <div class="mt-2">
                        <label for="room">Casa</label>
                        <select wire:model.change="reservationForm.room" id="room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="" selected>Selecione a casa</option>
                            @foreach($rooms as $room)
                                <option value="{{$room->id}}">{{$room->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid gap-4 grid-cols-2 mt-2">
                        <div>
                            <label for="checkin">Data de checkin</label>
                            <input wire:model.change="reservationForm.checkin" type="text" id="checkinDate" placeholder="DD/MM/AAAA" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                        <div class="mt-2">
                            <label for="checkin">Data de checkout</label>
                            <input wire:model="reservationForm.checkout" type="text" id="checkoutDate" placeholder="DD/MM/AAAA" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>
                            <label for="totalPrice">Valor pago (Reserva)</label>
                            <input type="text" wire:model="reservationForm.paidAmount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 disabled:bg-grey-200">
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:cursor-pointer">Salvar reserva</button>
                    </div>
                </form>
            </div>
            <div wire:ignore x-show="!showReservationForm">
                <div id="calendar"></div>
            </div>
        </div>
        @endif
    </div>
</div>

@script
<script>
        document.addEventListener('livewire:initialized', () => {
            let calendarReservations =  @this.calendarReservations ? JSON.parse(@this.calendarReservations) : [];
        
            let calendarEl = document.getElementById('calendar');
            let calendar = new Calendar(calendarEl, {
            plugins: [ dayGridPlugin ],
            initialView: 'dayGridMonth',
            customButtons: {
                addReservationButton: {
                    text: 'Adicionar Reserva',
                    click: function() {
                        $wire.dispatch('showReservationForm');
                    }
                }
            },
            headerToolbar: {
                left: 'prev,next today addReservationButton',
                center: 'title',
                right: ''
            },
            locale: 'pt-PT',
            events: calendarReservations,
            showNonCurrentDates: true,
            buttonText: {
                today: 'Hoje',
                day: 'Dia',
            },
            eventClick: function(info) {
                $wire.dispatch('showReservationDetails', info.event.id);
            }
        });
        
        calendar.render();

        const dateConfig = {
            minDate: new Date(),
            dateFormat: 'd/m/Y'
        }

        let checkinDateEl = document.getElementById('checkinDate');
        let checkoutDateEl = document.getElementById('checkoutDate');

        flatpickr(checkinDateEl, dateConfig);
        flatpickr(checkoutDateEl, dateConfig);
    })
</script>
@endscript
