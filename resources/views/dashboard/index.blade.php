<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <div class="flex h-screen w-screen">
      <section class="sidebar w-[250px] overflow-y-auto bg-secondary">
        <div class="flex items-center justify-center py-6">
          <img class="h-6 w-auto" src="./assets/img/logo_white.png" alt="Logo" />
        </div>
        <div class="w-full">
          <ul class="text-lg">
            <li class="bg-white-50 w-full py-2 pl-5 text-grey-900">
              <a class="flex items-center gap-2" href="#"
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
          </ul>
        </div>
      </section>
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
              <div class="h-9 w-9 rounded-lg border-2 border-secondary">
                <img
                  class="h-full w-full rounded-lg"
                  src="./assets/img/cristina_profile.png"
                  alt="User"
                />
              </div>
              <div>
                <p class="-mb-1 text-sm font-medium text-grey-900">
                  Cristina Matusse
                </p>
                <span class="text-secondary">Admin</span>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-white-200 h-screen overflow-y-auto p-5">
            

            <!-- Modal toggle -->
            <button data-modal-target="reservation-modal" data-modal-toggle="reservation-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Adicionar Reserva
            </button>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                        <thead class="text-xs text-white-50 uppercase bg-secondary">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Silver
                                </td>
                                <td class="px-6 py-4">
                                    Laptop
                                </td>
                                <td class="px-6 py-4">
                                    $2999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">
                                    White
                                </td>
                                <td class="px-6 py-4">
                                    Laptop PC
                                </td>
                                <td class="px-6 py-4">
                                    $1999
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">
                                    Black
                                </td>
                                <td class="px-6 py-4">
                                    Accessories
                                </td>
                                <td class="px-6 py-4">
                                    $99
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>


            <!-- Main modal -->
            <div id="reservation-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Adicionar Reserva
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="reservation-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-base leading-relaxed text-gray-500">
                                With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500">
                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="reservation-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I accept</button>
                            <button data-modal-hide="reservation-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Decline</button>
                        </div>
                    </div>
                </div>
            </div>

      </main>
    </div>
  </body>
</html>
