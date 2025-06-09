<x-layouts.app>
    <header class="relative bg-headerbackground bg-cover bg-center bg-no-repeat ">
      <nav class="bg-primary border-gray-200 sticky top-0 left-0 right-0">
        <div class="container flex flex-wrap items-center justify-end gap-5 mx-auto px-4">
        <div class="flex items-center md:order-2 space-x-1 ">
            <button type="button" data-dropdown-toggle="language-dropdown-menu" class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 rounded-lg cursor-pointer hover:text-white-50">
              <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900"><path fill="#b22234" d="M0 0h7410v3900H0z"/><path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300"/><path fill="#3c3b6e" d="M0 0h2964v2100H0z"/><g fill="#fff"><g id="d"><g id="c"><g id="e"><g id="b"><path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"/><use xlink:href="#a" y="420"/><use xlink:href="#a" y="840"/><use xlink:href="#a" y="1260"/></g><use xlink:href="#a" y="1680"/></g><use xlink:href="#b" x="247" y="210"/></g><use xlink:href="#c" x="494"/></g><use xlink:href="#d" x="988"/><use xlink:href="#c" x="1976"/><use xlink:href="#e" x="2470"/></g></svg>
              English (US)
            </button>
            <!-- Dropdown -->
            <div class="z-50 hidden my-4 bg-white-50 text-base list-none divide-y divide-gray-100 rounded-lg shadow-sm" id="language-dropdown-menu">
              <ul class="py-2 font-medium" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    <div class="inline-flex items-center">
                      <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512"><g fill-rule="evenodd"><g stroke-width="1pt"><path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/><path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/></g><path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/><path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/></g></svg>              
                      English (US)
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    <div class="inline-flex items-center">
                      <svg class="h-3.5 w-3.5 rounded-full me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512"><path fill="#ffce00" d="M0 341.3h512V512H0z"/><path d="M0 0h512v170.7H0z"/><path fill="#d00" d="M0 170.7h512v170.6H0z"/></svg>
                      Deutsch
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    <div class="inline-flex items-center">
                      <svg class="h-3.5 w-3.5 rounded-full me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512"><g fill-rule="evenodd" stroke-width="1pt"><path fill="#fff" d="M0 0h512v512H0z"/><path fill="#009246" d="M0 0h170.7v512H0z"/><path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/></g></svg>              
                      Italiano
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                    <div class="inline-flex items-center">
                      <svg class="h-3.5 w-3.5 rounded-full me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512"><defs><path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/></defs><path fill="#de2910" d="M0 0h512v512H0z"/><use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/><use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/><use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/></svg>
                      中文 (繁體)
                    </div>
                  </a>
                </li>
              </ul>
            </div>
        </div>
        <div class="items-center justify-between flex w-auto" id="navbar-language">
          @guest
          <ul class="flex font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-8 flex-row md:mt-0">
            <li>
              <a href="{{ route('login') }}" class="block py-2 px-3 md:p-0 text-white-50 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700">Login</a>
            </li>
            <li>
              <a href="{{ route('register') }}" class="block py-2 px-3 md:p-0 text-white-50 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700">Registar</a>
            </li>
          </ul>
          @endguest
        </div>
        </div>
      </nav>
      <div
        class="flex w-full flex-col items-center justify-center  py-6 bg-overlay"
      >
        <div class="w-full">
          <nav class="hidden w-full sm:block">
            <div
              class="container m-auto flex flex-row items-center justify-between"
            >
              <div class="logo flex flex-row items-center">
                <img
                  src="./assets/img/logo_horizontal.png"
                  alt="Logo mark - Ndolene Village"
                />
              </div>
  
              <ul
                class="menu flex flex-row items-center gap-2 text-sm font-medium uppercase md:gap-4 lg:gap-12 lg:text-lg"
              >
                <li>
                  <a
                    class="rounded-lg border-2 border-primary px-2 py-3 md:px-4 lg:px-8"
                    href="#"
                    >Início</a
                  >
                </li>
                <li>
                  <a href="#">Sobre</a>
                </li>
                <li>
                  <a href="#">Serviços</a>
                </li>
                <li>
                  <a href="#">Contato</a>
                </li>
              </ul>
              <ul class="cta">
                <li>
                  <a
                    class="rounded-lg bg-primary px-2 py-3 text-lg font-medium capitalize md:px-6 lg:px-12"
                    href="{{ route('rooms.availability')}}"
                    >Reservar Agora</a
                  >
                </li>
              </ul>
            </div>
          </nav>
          <nav
            class="absolute left-0 right-0 top-0 z-10 w-full bg-secondary p-2 sm:hidden"
          >
            <div
              class="container m-auto flex flex-col items-center justify-between"
            >
              <div class="logo flex w-full flex-row justify-between">
                <img
                  src="./assets/img/logo_horizontal.png"
                  alt="Logo mark - Ndolene Village"
                />
  
                <button id="menu-toggler" class="menu-icon cursor-pointer">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-menu"
                  >
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                  </svg>
                </button>
  
                <button id="menu-remover" class="hidden menu-icon cursor-pointer">
                  
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x"
              >
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
                </button>
              </div>
            </div>
  
              <ul
                id="nav-links"
                class="menu mt-10 hidden w-full flex-col items-center gap-4 text-sm font-medium uppercase"
              >
                <li class="w-full rounded-lg bg-grey-500 py-4 text-center">
                  <a class="rounded-lg px-2 py-3 md:px-4 lg:px-8" href="#"
                    >Início</a
                  >
                </li>
                <li>
                  <a href="#">Sobre</a>
                </li>
                <li>
                  <a href="#">Serviços</a>
                </li>
                <li>
                  <a href="#">Contato</a>
                </li>
              </ul>
              <ul id="menu-cta" class="cta my-10 hidden w-full">
                <li class="w-full rounded-lg bg-primary py-4 text-center">
                  <a
                    class="px-2 py-3 text-lg font-medium capitalize md:px-6 lg:px-12"
                    href="#"
                    >Reservar Agora</a
                  >
                </li>
              </ul>
            </div>
          </nav>
        </div>

        <main
          class="flex flex-col items-center justify-center py-12 md:py-24 lg:py-44"
        >
          <div
            class="rounded-lg bg-black px-4 py-1 text-sm opacity-35 md:px-8 lg:px-11 lg:text-base"
          >
            <p class="capitalize">Aventura para todos gostos</p>
          </div>

          <div class="w-2/3 px-9 text-center">
            <h1 class="my-5 text-xl font-bold md:text-3xl lg:text-5xl">
              Venha descobrir momentos de
              <span class="highlight inline-block text-primary"
                >lazer & diversão</span
              >.
            </h1>
          </div>
          <div class="w-2/3 text-center">
            <p
              class="lead text-sm font-medium text-grey-100 md:text-base lg:text-xl"
            >
              Ndolene village, onde a emoção e o relaxamento se encontram.
              <span class="block"
                >Cada instante aqui é uma oportunidade de criar memórias que
                duram toda vida.</span
              >
            </p>
          </div>
          <div
            class="mt-10 flex w-2/3 flex-row items-center justify-center gap-3 md:gap-5 lg:gap-10"
          >
            <a href="{{ route('rooms.availability')}}"
              class="rounded-lg bg-primary px-12 py-2 text-sm font-medium capitalize md:text-base lg:py-3 lg:text-lg"
            >
              Reservar quarto</a
            >
            <!-- <a
              href="checkavailability.html"
              class="rounded-lg border-2 border-slate-50 px-12 py-2 text-sm font-medium capitalize md:text-base lg:py-3 lg:text-lg"
            >
              Pedir refeição
            </a> -->
          </div>
        </main>
        <div class="hidden lg:flex justify-center">
          <div
          class="-bottom-20 rounded-lg bg-white-100 px-12 py-8 text-black absolute"
        >
          <form action="#">
            <div class="flex items-center gap-4">
              <div class="w-40">
                <label
                  for="input-group-1"
                  class="dark:text-white mb-2 block text-lg text-gray-900"
                  >Data de entrada:</label
                >
                <div class="relative mb-6">
                  <div
                    class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5"
                  >
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.71429 1.375V2.75H2.35714C1.0558 2.75 0 3.67383 0 4.8125V6.875H22V4.8125C22 3.67383 20.9442 2.75 19.6429 2.75H17.2857V1.375C17.2857 0.614453 16.5835 0 15.7143 0C14.8451 0 14.1429 0.614453 14.1429 1.375V2.75H7.85714V1.375C7.85714 0.614453 7.15491 0 6.28571 0C5.41652 0 4.71429 0.614453 4.71429 1.375ZM22 8.25H0V19.9375C0 21.0762 1.0558 22 2.35714 22H19.6429C20.9442 22 22 21.0762 22 19.9375V8.25Z"
                        fill="#788593"
                      />
                    </svg>
                  </div>
                  <input
                    type="text"
                    id="input-group-1"
                    class="focus:ring-secoborder-secondary block w-full rounded-lg border-2 border-primary bg-gray-50 p-2.5 ps-10 text-lg text-gray-900 placeholder-grey-500 focus:border-secondary"
                    placeholder="18/01/2025"
                  />
                </div>
              </div>
              <div class="w-40">
                <label
                  for="input-group-1"
                  class="dark:text-white mb-2 block text-lg text-gray-900"
                  >Data de saída:</label
                >
                <div class="relative mb-6">
                  <div
                    class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5"
                  >
                    <svg
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.71429 1.375V2.75H2.35714C1.0558 2.75 0 3.67383 0 4.8125V6.875H22V4.8125C22 3.67383 20.9442 2.75 19.6429 2.75H17.2857V1.375C17.2857 0.614453 16.5835 0 15.7143 0C14.8451 0 14.1429 0.614453 14.1429 1.375V2.75H7.85714V1.375C7.85714 0.614453 7.15491 0 6.28571 0C5.41652 0 4.71429 0.614453 4.71429 1.375ZM22 8.25H0V19.9375C0 21.0762 1.0558 22 2.35714 22H19.6429C20.9442 22 22 21.0762 22 19.9375V8.25Z"
                        fill="#788593"
                      />
                    </svg>
                  </div>
                  <input
                    type="text"
                    id="input-group-1"
                    class="focus:ring-secoborder-secondary block w-full rounded-lg border-2 border-primary bg-gray-50 p-2.5 ps-10 text-lg text-gray-900 placeholder-grey-500 focus:border-secondary"
                    placeholder="25/01/2025"
                  />
                </div>
              </div>
              <div class="w-24">
                <label
                  for="input-group-1"
                  class="dark:text-white mb-2 block text-lg text-gray-900"
                  >Adultos:</label
                >
                <div class="relative mb-6">
                  <input
                    type="text"
                    id="input-group-1"
                    class="focus:ring-secoborder-secondary block w-full rounded-lg border-2 border-primary bg-gray-50 p-2.5 text-lg text-gray-900 placeholder-grey-500 focus:border-secondary"
                    placeholder="2"
                  />
                  <div
                    class="pointer-events-none absolute inset-y-0 end-3 flex items-center ps-3.5"
                  >
                    <svg
                      width="24"
                      height="14"
                      viewBox="0 0 24 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.5922 13.4172C11.3734 14.1984 12.6422 14.1984 13.4234 13.4172L23.4234 3.41719C24.2047 2.63594 24.2047 1.36719 23.4234 0.585938C22.6422 -0.195312 21.3734 -0.195312 20.5922 0.585938L12.0047 9.17344L3.41719 0.592187C2.63594 -0.189063 1.36719 -0.189063 0.585938 0.592187C-0.195312 1.37344 -0.195312 2.64219 0.585938 3.42344L10.5859 13.4234L10.5922 13.4172Z"
                        fill="#788593"
                      />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="w-24">
                <label
                  for="input-group-1"
                  class="dark:text-white mb-2 block text-lg text-gray-900"
                  >Crianças:</label
                >
                <div class="relative mb-6">
                  <input
                    type="text"
                    id="input-group-1"
                    class="focus:ring-secoborder-secondary block w-full rounded-lg border-2 border-primary bg-gray-50 p-2.5 text-lg text-gray-900 placeholder-grey-500 focus:border-secondary"
                    placeholder="2"
                  />
                  <div
                    class="pointer-events-none absolute inset-y-0 end-3 flex items-center ps-3.5"
                  >
                    <svg
                      width="24"
                      height="14"
                      viewBox="0 0 24 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.5922 13.4172C11.3734 14.1984 12.6422 14.1984 13.4234 13.4172L23.4234 3.41719C24.2047 2.63594 24.2047 1.36719 23.4234 0.585938C22.6422 -0.195312 21.3734 -0.195312 20.5922 0.585938L12.0047 9.17344L3.41719 0.592187C2.63594 -0.189063 1.36719 -0.189063 0.585938 0.592187C-0.195312 1.37344 -0.195312 2.64219 0.585938 3.42344L10.5859 13.4234L10.5922 13.4172Z"
                        fill="#788593"
                      />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="w-24">
                <label
                  for="input-group-1"
                  class="dark:text-white mb-2 block text-lg text-gray-900"
                  >Quartos:</label
                >
                <div class="relative mb-6">
                  <input
                    type="text"
                    id="input-group-1"
                    class="focus:ring-secoborder-secondary block w-full rounded-lg border-2 border-primary bg-gray-50 p-2.5 text-lg text-gray-900 placeholder-grey-500 focus:border-secondary"
                    placeholder="2"
                  />
                  <div
                    class="pointer-events-none absolute inset-y-0 end-3 flex items-center ps-3.5"
                  >
                    <svg
                      width="24"
                      height="14"
                      viewBox="0 0 24 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.5922 13.4172C11.3734 14.1984 12.6422 14.1984 13.4234 13.4172L23.4234 3.41719C24.2047 2.63594 24.2047 1.36719 23.4234 0.585938C22.6422 -0.195312 21.3734 -0.195312 20.5922 0.585938L12.0047 9.17344L3.41719 0.592187C2.63594 -0.189063 1.36719 -0.189063 0.585938 0.592187C-0.195312 1.37344 -0.195312 2.64219 0.585938 3.42344L10.5859 13.4234L10.5922 13.4172Z"
                        fill="#788593"
                      />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="mt-3">
                <button
                  class="rounded-lg bg-primary px-10 py-3 text-lg font-medium capitalize text-white-100"
                >
                  Reservar agora
                </button>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>
    </header>
    <section id="about" class="p-3">
      <div
        class="container mx-auto pb-10 pt-10 md:pb-20 md:pt-20 lg:pb-36 lg:pt-56"
      >
        <div class="grid grid-cols-1 gap-1 lg:grid-cols-2 lg:gap-3">
          <div class="w-full rounded-lg">
            <img
              class="w-full rounded-lg"
              src="assets/img/about_image.jpg"
              alt="Ndolene Village"
            />
          </div>
          <div class="w-full text-sm text-black md:text-base lg:text-lg">
            <h2 class="text-xl font-bold md:text-2xl lg:text-5xl">
              Descubra quem somos!
            </h2>
            <p class="mt-4 pr-12 text-grey-500 lg:mt-8">
              <strong>Ndolene Village</strong> nasceu para ser mais do que um
              destino turístico, somos um espaço onde os momentos ganham vida e
              memórias se tornam eternas. Inspirados pela beleza ao nosso redor
              e pela alegria de receber pessoas, criámos um lugar que combina
              hospitalidade, aventura e tranquilidade num só.
            </p>
            <p class="mt-2 pr-10 text-grey-500 lg:mt-5">
              Desde o início, a nossa missão tem sido proporcionar experiências
              autênticas, que conectem os nossos visitantes à natureza e ao
              espírito de descoberta. Aqui, acreditamos que cada detalhe importa
              – desde o conforto das nossas acomodações até à emoção das
              atividades que oferecemos.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="services" class="bg-grey-100 px-3 py-8 md:py-14 lg:py-28">
      <div class="container mx-auto text-center text-black">
        <h2 class="text-xl font-bold md:text-2xl lg:text-5xl">
          Nossos Serviços
        </h2>
        <div
          class="mt-4 grid grid-cols-1 gap-5 md:mt-10 md:grid-cols-2 lg:mt-20 lg:grid-cols-4"
        >
          <div class="rounded-t-lg">
            <img
              class="w-full rounded-t-lg"
              src="assets/img/bad.jpg"
              alt="Acomodação"
            />
            <div
              class="bottom-3 rounded-b-lg bg-primary py-2 text-sm font-semibold text-white-100 lg:py-5 lg:text-xl"
            >
              <p>Acomodação</p>
            </div>
          </div>
          <div class="rounded-t-lg">
            <img
              class="w-full rounded-t-lg"
              src="assets/img/motocycle.jpg"
              alt="Safari quadricíclo"
            />
            <div
              class="bottom-3 rounded-b-lg bg-primary py-2 text-sm font-semibold text-white-100 lg:py-5 lg:text-xl"
            >
              <p>Safari Quadricíclo (ATV)</p>
            </div>
          </div>
          <div class="rounded-t-lg">
            <img
              class="w-full rounded-t-lg"
              src="assets/img/hoseman.png"
              alt="Cavalgada"
            />
            <div
              class="bottom-3 rounded-b-lg bg-primary py-2 text-sm font-semibold text-white-100 lg:py-5 lg:text-xl"
            >
              <p>Cavalgada na praia</p>
            </div>
          </div>
          <div class="rounded-t-lg">
            <img
              class="w-full rounded-t-lg"
              src="assets/img/food.png"
              alt="Restauração"
            />
            <div
              class="bottom-3 rounded-b-lg bg-primary py-2 text-sm font-semibold text-white-100 lg:py-5 lg:text-xl"
            >
              <p>Restauração</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <livewire:home.rooms/>
    <section id="bar">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="image hidden md:inline-block">
          <img src="./assets/img/bar.jpg" alt="Restaurante & Bar" />
        </div>
        <div class="static md:relative flex w-full items-center">
          <div
            class="bar_text static md:absolute -left-40 right-0 md:rounded-l-lg bg-black px-6 py-10 opacity-85 lg:px-14 lg:py-10"
          >
            <h3 class="font-bold text-secondary md:text-2xl lg:text-5xl">
              Restaurante & Bar
            </h3>
            <div
              class="mt-3 text-sm text-white-100 lg:mt-5 lg:w-[600px] lg:text-xl"
            >
              <p>
                Perfeito para uma experiência gastronómica inesquecível,
                combinando sabores autênticos e um ambiente acolhedor.
                Oferecemos uma seleção variada de pratos tradicionais e
                internacionais, preparados com ingredientes frescos e de alta
                qualidade, que refletem a riqueza cultural da região.
              </p>
              <p class="mt-2 lg:mt-5">
                No bar, os hóspedes podem desfrutar de uma ampla variedade de
                bebidas, desde cocktails artesanais e vinhos selecionados até
                refrescantes sumos naturais, tudo servido com um toque de
                hospitalidade local.
              </p>
            </div>
            <button
              class="mt-3 rounded-lg bg-secondary px-8 py-3 text-sm font-semibold uppercase text-black lg:mt-5 lg:px-16 lg:text-lg"
            >
              Pedir refeição
            </button>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonials" class="bg-secondary px-3 py-5 md:py-10 lg:py-24">
      <div class="container mx-auto text-center">
        <h3 class="text-xl font-bold text-grey-900 md:text-2xl lg:text-5xl">
          O que nossos clientes dizem.
        </h3>
        <div
          class="mt-4 flex flex-row flex-wrap lg:flex-nowrap gap-5 text-left md:mt-10 lg:mt-24"
        >
          <div class="rounded-lg bg-grey-900 p-10 opacity-80">
            <div>
              <svg
                class="hidden lg:block"
                width="50"
                height="36"
                viewBox="0 0 50 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 13.3929C0 5.9933 5.9933 0 13.3929 0H14.2857C16.2612 0 17.8571 1.59598 17.8571 3.57143C17.8571 5.54688 16.2612 7.14286 14.2857 7.14286H13.3929C9.9442 7.14286 7.14286 9.9442 7.14286 13.3929V14.2857H14.2857C18.2254 14.2857 21.4286 17.4888 21.4286 21.4286V28.5714C21.4286 32.5112 18.2254 35.7143 14.2857 35.7143H7.14286C3.20312 35.7143 0 32.5112 0 28.5714V25V21.4286V13.3929ZM28.5714 13.3929C28.5714 5.9933 34.5647 0 41.9643 0H42.8571C44.8326 0 46.4286 1.59598 46.4286 3.57143C46.4286 5.54688 44.8326 7.14286 42.8571 7.14286H41.9643C38.5156 7.14286 35.7143 9.9442 35.7143 13.3929V14.2857H42.8571C46.7969 14.2857 50 17.4888 50 21.4286V28.5714C50 32.5112 46.7969 35.7143 42.8571 35.7143H35.7143C31.7746 35.7143 28.5714 32.5112 28.5714 28.5714V25V21.4286V13.3929Z"
                  fill="#00A2EA"
                />
              </svg>
              <svg
                class="block lg:hidden"
                width="25"
                height="18"
                viewBox="0 0 50 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 13.3929C0 5.9933 5.9933 0 13.3929 0H14.2857C16.2612 0 17.8571 1.59598 17.8571 3.57143C17.8571 5.54688 16.2612 7.14286 14.2857 7.14286H13.3929C9.9442 7.14286 7.14286 9.9442 7.14286 13.3929V14.2857H14.2857C18.2254 14.2857 21.4286 17.4888 21.4286 21.4286V28.5714C21.4286 32.5112 18.2254 35.7143 14.2857 35.7143H7.14286C3.20312 35.7143 0 32.5112 0 28.5714V25V21.4286V13.3929ZM28.5714 13.3929C28.5714 5.9933 34.5647 0 41.9643 0H42.8571C44.8326 0 46.4286 1.59598 46.4286 3.57143C46.4286 5.54688 44.8326 7.14286 42.8571 7.14286H41.9643C38.5156 7.14286 35.7143 9.9442 35.7143 13.3929V14.2857H42.8571C46.7969 14.2857 50 17.4888 50 21.4286V28.5714C50 32.5112 46.7969 35.7143 42.8571 35.7143H35.7143C31.7746 35.7143 28.5714 32.5112 28.5714 28.5714V25V21.4286V13.3929Z"
                  fill="#00A2EA"
                />
              </svg>
            </div>
            <p class="mt-5 text-lg">
              O Ndolene Village é o refúgio ideal para famílias e casais. Cada
              detalhe foi pensado para oferecer uma experiência inesquecível.
            </p>
            <div class="mt-5 flex flex-row gap-5">
              <img
                class="h-12 w-12 rounded-full"
                src="assets/img/azafo.jpg"
                alt="Testemunho 1"
              />
              <div class="text-left">
                <h4 class="text-lg font-semibold text-white-100">
                  Azafo Cossa
                </h4>
                <p class="text-sm font-semibold text-secondary">Cliente</p>
              </div>
            </div>
          </div>
          <div class="rounded-lg bg-grey-900 p-10 opacity-80">
            <div>
              <svg
                class="hidden lg:block"
                width="50"
                height="36"
                viewBox="0 0 50 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 13.3929C0 5.9933 5.9933 0 13.3929 0H14.2857C16.2612 0 17.8571 1.59598 17.8571 3.57143C17.8571 5.54688 16.2612 7.14286 14.2857 7.14286H13.3929C9.9442 7.14286 7.14286 9.9442 7.14286 13.3929V14.2857H14.2857C18.2254 14.2857 21.4286 17.4888 21.4286 21.4286V28.5714C21.4286 32.5112 18.2254 35.7143 14.2857 35.7143H7.14286C3.20312 35.7143 0 32.5112 0 28.5714V25V21.4286V13.3929ZM28.5714 13.3929C28.5714 5.9933 34.5647 0 41.9643 0H42.8571C44.8326 0 46.4286 1.59598 46.4286 3.57143C46.4286 5.54688 44.8326 7.14286 42.8571 7.14286H41.9643C38.5156 7.14286 35.7143 9.9442 35.7143 13.3929V14.2857H42.8571C46.7969 14.2857 50 17.4888 50 21.4286V28.5714C50 32.5112 46.7969 35.7143 42.8571 35.7143H35.7143C31.7746 35.7143 28.5714 32.5112 28.5714 28.5714V25V21.4286V13.3929Z"
                  fill="#00A2EA"
                />
              </svg>
              <svg
                class="block lg:hidden"
                width="25"
                height="18"
                viewBox="0 0 50 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 13.3929C0 5.9933 5.9933 0 13.3929 0H14.2857C16.2612 0 17.8571 1.59598 17.8571 3.57143C17.8571 5.54688 16.2612 7.14286 14.2857 7.14286H13.3929C9.9442 7.14286 7.14286 9.9442 7.14286 13.3929V14.2857H14.2857C18.2254 14.2857 21.4286 17.4888 21.4286 21.4286V28.5714C21.4286 32.5112 18.2254 35.7143 14.2857 35.7143H7.14286C3.20312 35.7143 0 32.5112 0 28.5714V25V21.4286V13.3929ZM28.5714 13.3929C28.5714 5.9933 34.5647 0 41.9643 0H42.8571C44.8326 0 46.4286 1.59598 46.4286 3.57143C46.4286 5.54688 44.8326 7.14286 42.8571 7.14286H41.9643C38.5156 7.14286 35.7143 9.9442 35.7143 13.3929V14.2857H42.8571C46.7969 14.2857 50 17.4888 50 21.4286V28.5714C50 32.5112 46.7969 35.7143 42.8571 35.7143H35.7143C31.7746 35.7143 28.5714 32.5112 28.5714 28.5714V25V21.4286V13.3929Z"
                  fill="#00A2EA"
                />
              </svg>
            </div>
            <p class="mt-5 text-lg">
              A hospitalidade foi fantástica! Sentimo-nos em casa desde o
              primeiro momento. Um destino que recomendo sem hesitar.
            </p>
            <div class="mt-5 flex flex-row gap-5">
              <img
                class="h-12 w-12 rounded-full"
                src="assets/img/alice_e_basilio.jpg"
                alt="Testemunho 2"
              />
              <div class="text-left">
                <h4 class="text-lg font-semibold text-white-100">
                  Alice & Basílio Zamba
                </h4>
                <p class="text-sm font-semibold text-secondary">Cliente</p>
              </div>
            </div>
          </div>
          <div class="rounded-lg bg-grey-900 p-10 opacity-80">
            <div>
              <svg
                class="hidden lg:block"
                width="50"
                height="36"
                viewBox="0 0 50 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 13.3929C0 5.9933 5.9933 0 13.3929 0H14.2857C16.2612 0 17.8571 1.59598 17.8571 3.57143C17.8571 5.54688 16.2612 7.14286 14.2857 7.14286H13.3929C9.9442 7.14286 7.14286 9.9442 7.14286 13.3929V14.2857H14.2857C18.2254 14.2857 21.4286 17.4888 21.4286 21.4286V28.5714C21.4286 32.5112 18.2254 35.7143 14.2857 35.7143H7.14286C3.20312 35.7143 0 32.5112 0 28.5714V25V21.4286V13.3929ZM28.5714 13.3929C28.5714 5.9933 34.5647 0 41.9643 0H42.8571C44.8326 0 46.4286 1.59598 46.4286 3.57143C46.4286 5.54688 44.8326 7.14286 42.8571 7.14286H41.9643C38.5156 7.14286 35.7143 9.9442 35.7143 13.3929V14.2857H42.8571C46.7969 14.2857 50 17.4888 50 21.4286V28.5714C50 32.5112 46.7969 35.7143 42.8571 35.7143H35.7143C31.7746 35.7143 28.5714 32.5112 28.5714 28.5714V25V21.4286V13.3929Z"
                  fill="#00A2EA"
                />
              </svg>
              <svg
                class="block lg:hidden"
                width="25"
                height="18"
                viewBox="0 0 50 36"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 13.3929C0 5.9933 5.9933 0 13.3929 0H14.2857C16.2612 0 17.8571 1.59598 17.8571 3.57143C17.8571 5.54688 16.2612 7.14286 14.2857 7.14286H13.3929C9.9442 7.14286 7.14286 9.9442 7.14286 13.3929V14.2857H14.2857C18.2254 14.2857 21.4286 17.4888 21.4286 21.4286V28.5714C21.4286 32.5112 18.2254 35.7143 14.2857 35.7143H7.14286C3.20312 35.7143 0 32.5112 0 28.5714V25V21.4286V13.3929ZM28.5714 13.3929C28.5714 5.9933 34.5647 0 41.9643 0H42.8571C44.8326 0 46.4286 1.59598 46.4286 3.57143C46.4286 5.54688 44.8326 7.14286 42.8571 7.14286H41.9643C38.5156 7.14286 35.7143 9.9442 35.7143 13.3929V14.2857H42.8571C46.7969 14.2857 50 17.4888 50 21.4286V28.5714C50 32.5112 46.7969 35.7143 42.8571 35.7143H35.7143C31.7746 35.7143 28.5714 32.5112 28.5714 28.5714V25V21.4286V13.3929Z"
                  fill="#00A2EA"
                />
              </svg>
            </div>
            <p class="mt-5 text-lg">
              As comodidades são incríveis! A piscina e o espaço exterior são
              perfeitos para relaxar e aproveitar a estadia ao máximo.
            </p>
            <div class="mt-5 flex flex-row gap-5">
              <img
                class="h-12 w-12 rounded-full"
                src="assets/img/cristina.jpg"
                alt="Testemunho 3"
              />
              <div class="text-left">
                <h4 class="text-lg font-semibold text-white-100">
                  Cristina Mateus
                </h4>
                <p class="text-sm font-semibold text-secondary">Cliente</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-grey-100 pt-4 md:pt-16 lg:pt-32">
      <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
          <div class="hidden lg:inline-block">
            <img src="./assets/img/logo_vertical.png" alt="Ndolene Logo" />
          </div>
          <div
            class="col-span-2 grid w-full grid-cols-1 md:grid-cols-2 gap-5 text-black lg:border-l lg:border-secondary"
          >
            <div class="w-full py-3 md:py-6 lg:py-14 pl-14">
              <h5 class="text-xl font-semibold">Recursos</h5>
              <ul class="mt-5 flex flex-col gap-2">
                <li><a href="#">Quartos</a></li>
                <li><a href="#">Restaurante & Bar</a></li>
                <li><a href="#">Cavalos</a></li>
                <li><a href="#">Motorizadas</a></li>
                <li><a href="#">Safari</a></li>
                <li><a href="#">Termos & Condições</a></li>
              </ul>
            </div>
            <div class="w-full py-3 md:py-6 lg:py-14 pl-14">
              <h5 class="text-xl font-semibold">Contactos</h5>
              <ul class="mt-2 md:mt-5 flex flex-col gap-2">
                <li class="flex items-center gap-2">
                  <svg
                    width="20"
                    height="15"
                    viewBox="0 0 20 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M1.875 0C0.839844 0 0 0.839844 0 1.875C0 2.46484 0.277344 3.01953 0.75 3.375L9.25 9.75C9.69531 10.082 10.3047 10.082 10.75 9.75L19.25 3.375C19.7227 3.01953 20 2.46484 20 1.875C20 0.839844 19.1602 0 18.125 0H1.875ZM0 4.375V12.5C0 13.8789 1.12109 15 2.5 15H17.5C18.8789 15 20 13.8789 20 12.5V4.375L11.5 10.75C10.6094 11.418 9.39062 11.418 8.5 10.75L0 4.375Z"
                      fill="#00A2EA"
                    />
                  </svg>
                  <a href="#">booking@ndolenevillage.co.mz</a>
                </li>
                <li class="flex items-center gap-2">
                  <svg
                    width="20"
                    height="15"
                    viewBox="0 0 20 15"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M1.875 0C0.839844 0 0 0.839844 0 1.875C0 2.46484 0.277344 3.01953 0.75 3.375L9.25 9.75C9.69531 10.082 10.3047 10.082 10.75 9.75L19.25 3.375C19.7227 3.01953 20 2.46484 20 1.875C20 0.839844 19.1602 0 18.125 0H1.875ZM0 4.375V12.5C0 13.8789 1.12109 15 2.5 15H17.5C18.8789 15 20 13.8789 20 12.5V4.375L11.5 10.75C10.6094 11.418 9.39062 11.418 8.5 10.75L0 4.375Z"
                      fill="#00A2EA"
                    /></svg
                  ><a href="#">gestao@ndolenevillage.co.mz</a>
                </li>
                <li class="flex items-center gap-2">
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M6.44112 0.961776C6.14035 0.235245 5.34742 -0.151456 4.58964 0.0555658L1.15229 0.993025C0.472635 1.18052 0 1.79768 0 2.50077C0 12.1644 7.83559 20 17.4992 20C18.2023 20 18.8195 19.5274 19.007 18.8477L19.9444 15.4104C20.1515 14.6526 19.7648 13.8596 19.0382 13.5589L15.2884 11.9964C14.6517 11.7308 13.9135 11.9144 13.4799 12.4496L11.9018 14.3752C9.15194 13.0745 6.92548 10.8481 5.62475 8.09818L7.55045 6.52403C8.08558 6.08655 8.26917 5.35221 8.00355 4.71552L6.44112 0.965682V0.961776Z"
                      fill="#00A2EA"
                    /></svg
                  ><a href="tel:+258878209090">+258 878 209 090</a>/<a href="tel:+258852332515">+258 852 332 515</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-8 md:mt-16 lg:mt-32 bg-secondary py-5 text-center text-grey-900">
        <p>Ndolene Village &copy; 2025 - Todos direitos reservados</p>
      </div>
    </footer>
</x-layouts.app>
