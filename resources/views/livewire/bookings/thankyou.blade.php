<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
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

    <div class="container mx-auto mt-14">
        <div
            class="bg-white-100 text-grey-500 text-lg p-16 flex items-center flex-col rounded-lg"
        >
            <h2 class="text-grey-900 text-4xl font-bold">
                Obrigado por escolher o Ndolene Village!
            </h2>
            <div class="max-w-[600px] mt-5">
                <p>
                    A sua reserva foi confirmada com sucesso. Consulte os
                    detalhes e faça a gestão da sua reserva através desse link:
                    <a
                        class="text-secondary"
                        href="{{ route('dashboard.index') }}"
                        >Minhas Reservas</a
                    >.
                </p>
            </div>
        </div>
    </div>
</div>
