<section id="rooms">
    @foreach($rooms as $room) @if($loop->odd)
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="image">
            @if($room->images->count() > 0)
            <img
                class="h-full w-full object-cover"
                src="{{ asset('storage/'. $room->images[0]->path) }}"
                alt="Cama clássica"
            />
            @endif
        </div>
        <div class="bg-grey-900 px-6 py-4 md:py-8 lg:px-20 lg:py-16">
            <div class="w-full text-center">
                <h2
                    class="text-3xl font-bold uppercase text-grey-200 opacity-10 lg:text-6xl"
                >
                    QUARTOS
                </h2>
            </div>
            <h3 class="text-white -mt-5 text-base font-bold lg:text-3xl">
                {{$room->name}}: {{$room->type->name}}
            </h3>
            <p class="mt-5 text-sm text-grey-400 lg:text-lg">
                {{$room->description}}
            </p>
            <ul
                class="mt-5 list-inside space-y-1 text-sm text-white-100 lg:text-lg"
            >
                <li class="flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    Pequeno almoço
                </li>
                <li class="mt-5 flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    WI-FI gratuito
                </li>
                <li class="mt-5 flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    Ar condicionado
                </li>
                <li class="mt-5 flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    Chuveiro com água quente
                </li>
                <li class="mt-5 flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    Piscina
                </li>
            </ul>
            <p class="mt-3 text-base lg:text-xl">
                <span class="text-xl font-bold text-primary lg:text-4xl"
                    >{{$room->price}} MT/</span
                >Noite
            </p>
            <a
                href="{{ route('rooms.availability', 'room='.$room->slug) }}"
                class="mt-2 inline-block rounded-lg bg-primary px-4 py-3 text-sm font-medium uppercase text-white-100 md:px-10 md:text-base lg:mt-5 lg:px-20 lg:text-lg"
            >
                Reservar
            </a>
        </div>
    </div>
    @else
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="image block md:hidden">
            @if($room->images->count() > 0)
            <img
                class="h-full w-full object-cover"
                src="{{ asset('storage/'. $room->images[0]->path) }}"
                alt="Cama clássica"
            />
            @endif
        </div>
        <div class="bg-grey-100 px-6 py-4 md:py-8 lg:px-20 lg:py-16">
            <div class="w-full text-center">
                <h2
                    class="text-3xl font-bold uppercase text-grey-900 opacity-10 lg:text-6xl"
                >
                    QUARTOS
                </h2>
            </div>
            <h3 class="-mt-5 text-base font-bold text-grey-900 lg:text-3xl">
                {{$room->name}}: {{$room->type->name}}
            </h3>
            <p class="mt-5 text-sm text-grey-400 lg:text-lg">
                {{$room->description}}
            </p>
            <ul
                class="mt-5 list-inside space-y-1 text-sm text-grey-900 lg:text-lg"
            >
                <li class="flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    Pequeno almoço
                </li>
                <li class="mt-5 flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    WI-FI gratuito
                </li>
                <li class="mt-5 flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    Ar condicionado
                </li>
                <li class="mt-5 flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    Chuveiro com água quente
                </li>
                <li class="mt-5 flex items-center gap-1 lg:gap-3">
                    <svg
                        class="hidden lg:inline-block"
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    <svg
                        class="inline-block lg:hidden"
                        width="15"
                        height="15"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="1"
                            y="1"
                            width="23"
                            height="23"
                            rx="11.5"
                            stroke="#F27329"
                            stroke-width="2"
                        />
                        <path
                            d="M18.7489 8.29292C19.0837 8.68349 19.0837 9.31776 18.7489 9.70833L11.8925 17.7071C11.5578 18.0976 11.0141 18.0976 10.6793 17.7071L7.25109 13.7077C6.9163 13.3171 6.9163 12.6829 7.25109 12.2923C7.58587 11.9017 8.12956 11.9017 8.46435 12.2923L11.2872 15.5824L17.5383 8.29292C17.8731 7.90236 18.4168 7.90236 18.7516 8.29292H18.7489Z"
                            fill="#F27329"
                        />
                    </svg>
                    Piscina
                </li>
            </ul>
            <p class="mt-3 text-base text-grey-900 lg:text-xl">
                <span class="text-xl font-bold text-primary lg:text-4xl"
                    >{{$room->price}} MT/</span
                >Noite
            </p>
            <a
                href="{{ route('rooms.availability', 'room='.$room->slug) }}"
                class="mt-2 inline-block rounded-lg bg-primary px-4 py-3 text-sm font-medium uppercase text-white-100 md:px-10 lg:mt-5 lg:px-20 lg:text-lg"
            >
                Reservar
            </a>
        </div>
        <div class="image hidden md:inline-block">
            @if($room->images->count() > 0)
            <img
                class="h-full w-full object-cover"
                src="{{ asset('storage/'. $room->images[0]->path) }}"
                alt="Cama clássica"
            />
            @endif
        </div>
    </div>
    @endif @endforeach
</section>
