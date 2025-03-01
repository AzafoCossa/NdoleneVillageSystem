<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ndolene Village | Início</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <main class="w-screen bg-blue-900">
      <div class="mx-auto grid max-w-[1440px] grid-cols-1 lg:grid-cols-2">
        <div class="px-5 py-5 lg:px-20">
          <nav>
            <a href="/"><img src="./assets/img/logo_white.png" alt="Logo" /></a>
          </nav>

          <div class="mt-16">
            <h1 class="text-3xl font-bold">
              Ola, <span class="block text-primary">Seja bem-vindo!</span>
            </h1>

            <div class="">
              <form action="#">
                <input
                  type="text"
                  placeholder="Email"
                  class="mt-8 w-full rounded-lg bg-white-100 px-4 py-3 placeholder-gray-500"
                />
                <input
                  type="password"
                  placeholder="Senha"
                  class="mt-8 w-full rounded-lg bg-white-100 px-4 py-3 placeholder-gray-500"
                />

                <div class="mt-5 flex items-center justify-between text-lg">
                  <div class="flex items-center">
                    <input
                      id="default-checkbox"
                      type="checkbox"
                      value=""
                      class="h-6 w-6 rounded-lg border-primary bg-white-200 text-blue-600 focus:ring-2 focus:ring-blue-500"
                    />
                    <label
                      for="default-checkbox"
                      class="ms-2 font-medium text-white-200 dark:text-gray-300"
                      >Lembrar de mim</label
                    >
                  </div>
                  <a href="#" class="text-white-200">Esqueceu a senha?</a>
                </div>
                <div class="mt-8 flex justify-between gap-5">
                  <button class="text-white w-full rounded-lg bg-primary py-3">
                    Iniciar sessão
                  </button>

                  <button
                    class="w-full rounded-lg bg-white-100 py-3 text-grey-900"
                  >
                    Registar
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="hidden lg:inline-block">
          <img
            class="h-auto w-full"
            src="./assets/img/login_register.jpg"
            alt="Classic Bed"
          />
        </div>
      </div>
    </main>
    <footer class="bg-grey-100 pt-4 md:pt-16 lg:pt-32">
      <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
          <div class="hidden lg:inline-block">
            <img src="./assets/img/logo_vertical.png" alt="Ndolene Logo" />
          </div>
          <div
            class="col-span-2 grid w-full grid-cols-1 gap-5 text-black md:grid-cols-2 lg:border-l lg:border-secondary"
          >
            <div class="w-full py-3 pl-14 md:py-6 lg:py-14">
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
            <div class="w-full py-3 pl-14 md:py-6 lg:py-14">
              <h5 class="text-xl font-semibold">Contactos</h5>
              <ul class="mt-2 flex flex-col gap-2 md:mt-5">
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
                  ><a href="#">+258 879 670 611 / +258 825 169 373</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div
        class="mt-8 bg-secondary py-5 text-center text-grey-900 md:mt-16 lg:mt-32"
      >
        <p>Ndolene Village &copy; 2025 - Todos direitos reservados</p>
      </div>
    </footer>
  </body>
</html>
