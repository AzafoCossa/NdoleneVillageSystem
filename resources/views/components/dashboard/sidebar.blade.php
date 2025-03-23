<section class="sidebar w-[250px] overflow-y-auto bg-secondary">
    <div class="flex items-center justify-center py-6">
        <a href="{{ route('home') }}">
            <img
                class="h-6 w-auto"
                src="{{ asset('assets/img/logo_white.png') }}"
                alt="Logo"
            />
        </a>
    </div>
    <div class="w-full">
        <ul class="text-lg">
            <li class="bg-white-50 w-full py-2 pl-5 text-grey-900">
                <a
                    class="flex items-center gap-2"
                    href="{{ route('dashboard.index') }}"
                    ><svg
                        width="31"
                        height="29"
                        viewBox="0 0 31 29"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M15.1111 13.3333V0.922222C15.1111 0.422222 15.5 0 16 0C22.8722 0 28.4444 5.57222 28.4444 12.4444C28.4444 12.9444 28.0222 13.3333 27.5222 13.3333H15.1111ZM0 15.1111C0 8.37222 5.00556 2.79444 11.5 1.90556C12.0111 1.83333 12.4444 2.24444 12.4444 2.76111V16L21.1389 24.6944C21.5111 25.0667 21.4833 25.6778 21.0556 25.9778C18.8778 27.5333 16.2111 28.4444 13.3333 28.4444C5.97222 28.4444 0 22.4778 0 15.1111ZM29.2444 16C29.7611 16 30.1667 16.4333 30.1 16.9444C29.6722 20.05 28.1778 22.8111 25.9944 24.85C25.6611 25.1611 25.1389 25.1389 24.8167 24.8111L16 16H29.2444Z"
                            fill="#151D26"
                        />
                    </svg>
                    Dashboard</a
                >
            </li>

            <li class="w-full py-2 pl-5 text-grey-900">
                <a
                    class="flex items-center gap-2"
                    href="{{ route('dashboard.guests') }}"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-users"
                    >
                        <path
                            d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    Guests</a
                >
            </li>

            <li class="w-full py-2 pl-5 text-grey-900">
                <a
                    class="flex items-center gap-2"
                    href="{{ route('dashboard.users') }}"
                    ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="3"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-users"
                    >
                        <path
                            d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    Usuários</a
                >
            </li>

            <li class="w-full py-2 pl-5 text-grey-900">
                <a
                    class="flex items-center gap-2"
                    href="{{ route('dashboard.roomtypes') }}"
                >
                    <svg
                        width="30"
                        height="21"
                        viewBox="0 0 30 21"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M1.5 0C2.32969 0 3 0.670312 3 1.5V13.5H13.5V6C13.5 5.17031 14.1703 4.5 15 4.5H25.5C27.9844 4.5 30 6.51562 30 9V19.5C30 20.3297 29.3297 21 28.5 21C27.6703 21 27 20.3297 27 19.5V18H16.5H15H3V19.5C3 20.3297 2.32969 21 1.5 21C0.670312 21 0 20.3297 0 19.5V1.5C0 0.670312 0.670312 0 1.5 0ZM8.25 4.5C9.24456 4.5 10.1984 4.89509 10.9017 5.59835C11.6049 6.30161 12 7.25544 12 8.25C12 9.24456 11.6049 10.1984 10.9017 10.9017C10.1984 11.6049 9.24456 12 8.25 12C7.25544 12 6.30161 11.6049 5.59835 10.9017C4.89509 10.1984 4.5 9.24456 4.5 8.25C4.5 7.25544 4.89509 6.30161 5.59835 5.59835C6.30161 4.89509 7.25544 4.5 8.25 4.5Z"
                            fill="black"
                        />
                    </svg>
                    Room Types</a
                >
            </li>

            <li class="w-full py-2 pl-5 text-grey-900">
                <a
                    class="flex items-center gap-2"
                    href="{{ route('dashboard.rooms') }}"
                >
                    <svg
                        width="30"
                        height="21"
                        viewBox="0 0 30 21"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M1.5 0C2.32969 0 3 0.670312 3 1.5V13.5H13.5V6C13.5 5.17031 14.1703 4.5 15 4.5H25.5C27.9844 4.5 30 6.51562 30 9V19.5C30 20.3297 29.3297 21 28.5 21C27.6703 21 27 20.3297 27 19.5V18H16.5H15H3V19.5C3 20.3297 2.32969 21 1.5 21C0.670312 21 0 20.3297 0 19.5V1.5C0 0.670312 0.670312 0 1.5 0ZM8.25 4.5C9.24456 4.5 10.1984 4.89509 10.9017 5.59835C11.6049 6.30161 12 7.25544 12 8.25C12 9.24456 11.6049 10.1984 10.9017 10.9017C10.1984 11.6049 9.24456 12 8.25 12C7.25544 12 6.30161 11.6049 5.59835 10.9017C4.89509 10.1984 4.5 9.24456 4.5 8.25C4.5 7.25544 4.89509 6.30161 5.59835 5.59835C6.30161 4.89509 7.25544 4.5 8.25 4.5Z"
                            fill="black"
                        />
                    </svg>
                    Bedrooms</a
                >
            </li>

            <li class="bg-red-400 w-full py-2 pl-5 text-white-50">
                <form action="/logout" method="post">
                    @csrf
                    <button
                        type="submit"
                        class="flex items-center gap-2 hover:cursor-pointer"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="#f4f4f4"
                            stroke-width="4"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-power"
                        >
                            <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                            <line x1="12" y1="2" x2="12" y2="12"></line>
                        </svg>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>
</section>
