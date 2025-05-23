<x-layouts.app>
    <div class="flex h-screen w-screen">
        <x-slot name="title">{{ $title ?? "Dashboard" }}</x-slot>
        <x-dashboard.sidebar></x-dashboard.sidebar>
        <main class="flex w-full flex-col">
            <div class="bg-white-50 flex w-full justify-between px-5 py-2">
                <button id="sidebar_toggler">
                    <svg
                        width="20"
                        height="17"
                        viewBox="0 0 20 17"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M0 1.41667C0 0.633073 0.638393 0 1.42857 0H18.5714C19.3616 0 20 0.633073 20 1.41667C20 2.20026 19.3616 2.83333 18.5714 2.83333H1.42857C0.638393 2.83333 0 2.20026 0 1.41667ZM0 8.5C0 7.71641 0.638393 7.08333 1.42857 7.08333H18.5714C19.3616 7.08333 20 7.71641 20 8.5C20 9.28359 19.3616 9.91667 18.5714 9.91667H1.42857C0.638393 9.91667 0 9.28359 0 8.5ZM20 15.5833C20 16.3669 19.3616 17 18.5714 17H1.42857C0.638393 17 0 16.3669 0 15.5833C0 14.7997 0.638393 14.1667 1.42857 14.1667H18.5714C19.3616 14.1667 20 14.7997 20 15.5833Z"
                            fill="black"
                        />
                    </svg>
                </button>
                <div>
                    <div class="user flex items-center gap-2">
                        @if(Auth::user())
                        <div
                            class="h-9 w-9 rounded-lg border-2 border-secondary"
                        >
                            <img
                                class="h-full w-full rounded-lg"
                                src="{{
                                    asset('assets/img/cristina_profile.png')
                                }}"
                                alt="User"
                            />
                        </div>
                        <div>
                            <p class="-mb-1 text-sm font-medium text-grey-900">
                                {{Auth::user()->username}}
                            </p>
                            <span
                                class="text-secondary"
                                >{{Auth::user()->role}}</span
                            >
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="bg-white-200 h-screen overflow-y-auto p-5">
                {{ $slot }}
            </div>
        </main>
    </div>
</x-layouts.app>
