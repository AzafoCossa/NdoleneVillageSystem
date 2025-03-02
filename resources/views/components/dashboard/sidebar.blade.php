<section class="sidebar w-[250px] overflow-y-auto bg-secondary">
    <div class="flex items-center justify-center py-6">
        <img class="h-6 w-auto" src="./assets/img/logo_white.png" alt="Logo" />
    </div>
    <div class="w-full">
        <ul class="text-lg">
            <li class="bg-white-50 w-full py-2 pl-5 text-grey-900">
                <a
                    class="flex items-center gap-2"
                    href="{{ route('dashboard') }}"
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

            <li class="bg-grey-200 w-full py-2 pl-5 text-grey-900">
                <a class="flex items-center gap-2" href="{{ route('guests') }}"
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

            <li class="bg-red-400 w-full py-2 pl-5 text-white-50">
                <form action="logout" method="post">
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
