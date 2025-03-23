<div>
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

    <main class="pb-20">
        <div id="availability-form">
            <div class="flex justify-center px-12 py-8 text-black">
                <form wire:submit.prevent="checkAvailability">
                    <div class="labels hidden gap-12 pl-6 lg:flex">
                        <label for="checkin">Data de entrada:</label>
                        <label for="checkout">Data de saida:</label>
                    </div>
                    <div
                        class="flex flex-col items-center gap-4 rounded-lg bg-grey-100 px-3 py-4 lg:flex-row"
                    >
                        <div class="w-40">
                            <label class="inline-block lg:hidden" for="checkin"
                                >Data de entrada:</label
                            >
                            <div class="relative mt-2 lg:mt-0">
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
                                    wire:model="checkin"
                                    type="text"
                                    id="checkin"
                                    class="focus:ring-secoborder-secondary block w-full rounded-lg border-2 bg-gray-50 p-2.5 ps-10 text-lg text-gray-900 placeholder-grey-500 focus:border-secondary @error('checkin') border-red-500 @else border-secondary @enderror"
                                    placeholder="18/01/2025"
                                />
                            </div>
                        </div>
                        <div class="w-40">
                            <label class="inline-block lg:hidden" for="checkout"
                                >Data de saida:</label
                            >
                            <div class="relative mt-2 lg:mt-0">
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
                                    wire:model="checkout"
                                    type="text"
                                    id="checkout"
                                    class="focus:ring-secoborder-secondary block w-full rounded-lg border-2 @error('checkout') border-red-500 @else border-secondary @enderror bg-gray-50 p-2.5 ps-10 text-lg text-gray-900 placeholder-grey-500 focus:border-secondary"
                                    placeholder="25/01/2025"
                                />
                            </div>
                        </div>
                        <div>
                            <button
                                type="submit"
                                class="rounded-lg bg-secondary px-10 py-3 text-lg font-medium capitalize text-white-100 hover:cursor-pointer"
                            >
                                Ver disponibilidade
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="flex w-full flex-col-reverse gap-5 lg:flex-row">
                <div class="w-full rounded-lg bg-grey-100 p-5 lg:w-72">
                    <h3 class="font-semibold text-secondary">Comodidades</h3>
                    <div class="divider my-2 h-[2px] w-full bg-[#ffffff]"></div>
                    <ul class="flex flex-col gap-2 text-gray-500">
                        <li class="border-b-2 border-grey-200 py-1 text-base">
                            Piscina
                        </li>
                        <li class="border-b-2 border-grey-200 py-1 text-base">
                            Serviço de limpeza diário
                        </li>
                        <li class="border-b-2 border-grey-200 py-1 text-base">
                            Ar condicionado
                        </li>
                        <li class="border-b-2 border-grey-200 py-1 text-base">
                            Televisão com DSTV
                        </li>
                        <li class="border-b-2 border-grey-200 py-1 text-base">
                            Wi-Fi gratuito
                        </li>
                        <li class="border-b-2 border-grey-200 py-1 text-base">
                            Casa de banho moderna com chuveiro
                        </li>
                        <li class="border-b-2 border-grey-200 py-1 text-base">
                            Artigos de higiene pessoal incluídos
                        </li>
                        <li class="border-b-2 border-grey-200 py-1 text-base">
                            Cozinha equipada com forno, micro-ondas e
                            frigorífico
                        </li>
                        <li>Mesa de jantar para refeições convenientes</li>
                    </ul>
                </div>

                <div class="w-full rounded-lg bg-grey-100 p-5">
                    @if ($errors->has('checkin') || $errors->has('checkout'))
                    <div
                        class="mb-4 rounded-lg px-4 py-3 text-white bg-red-400"
                    >
                        Os campos acima devem ser preenchidos
                    </div>
                    @endif @if($canBook)
                    <div
                        class="mb-4 rounded-lg px-4 py-3 text-grey-900 bg-green-400"
                    >
                        {{
                            $bookMessage ??
                                "O quarto está disponível. Pode prosseguir com a reserva."
                        }}
                    </div>
                    @endif @foreach($rooms as $room)
                    <div
                        :key="{{$room->id}}"
                        class="flex w-full flex-col gap-5 rounded-lg bg-white-100 md:flex-row @if(!$loop->first) mt-4 @endif"
                    >
                        <div class="image w-full shrink-0 rounded-lg md:w-96">
                            @if($room->images->count() > 0)
                            <img
                                class="h-full rounded-t-lg md:rounded-l-lg"
                                src="{{asset('storage/'.$room->images[0]->path)}}"
                                alt="Suite Lua de Mel"
                            />
                            @endif
                        </div>
                        <div class="description px-2 py-5 pr-5 text-justify">
                            <h2 class="text-xl font-semibold text-secondary">
                                {{$room->name}} : {{$room->type->name}}
                            </h2>
                            <p class="mt-2 text-lg text-gray-400">
                                {{$room->description}}
                            </p>
                            <p class="my-4 text-lg font-medium text-grey-400">
                                <span class="text-2xl font-bold text-primary"
                                    >{{$room->price}} MZN</span
                                >/Noite
                            </p>
                            <div>
                                <button
                                    wire:click="bookRoom({{ $room->id }})"
                                    type="button"
                                    class="rounded-lg bg-secondary px-10 py-3 text-lg font-medium capitalize text-white-100 hover:cursor-pointer"
                                >
                                    Reservar agora
                                </button>
                                <p class="mt-2 text-base text-primary">
                                    Até {{$room->capacity}} ocupantes
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</div>

@script

<script>
    $wire.on("availability-message", (event) => {
        Swal.fire({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            icon: event.type,
            text: event.message,
        });
    });
</script>
@endscript
