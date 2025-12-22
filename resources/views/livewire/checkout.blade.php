<div class="w-screen">
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
    <div class="xl:container mx-auto md:p-8 lg:p-12">
        <div class="header">
            <span class="text-lg text-slate-400">Estás no último passo!</span>
            <h1 class="text-4xl font-bold text-cyan-900">
                Falta apenas a transferência.
            </h1>

            <h2 class="text-2xl font-bold text-primary mt-6">Detalhes bancários</h2>
        </div>
        <div
            class="flex flex-col-reverse md:grid md:grid-flow-col grid-cols-2 gap-5 mt-10"
        >
            <form class="form" wire:submit.prevent="bookRoom">
                <div class="flex">
                    <div class="mr-10">
                        <p class="text-md text-slate-400 font-semibold">Número da conta:</p>
                        <p class="text-lg font-bold text-grey-500">1234567878</p>
                    </div>
                    <div class="mr-10">
                        <p class="text-md text-slate-400 font-semibold">Titular:</p>
                        <p class="text-lg font-bold text-grey-500">Ndolene Village</p>
                    </div>
                </div>
            <div class="mt-4">
                <div class="mr-10">
                    <p class="text-md text-slate-400 font-semibold">IBAN:</p>
                    <p class="text-lg font-bold text-grey-500">1236256356356355</p>
                </div>
                <div class="mr-10 mt-4">
                    <p class="text-md text-slate-400 font-semibold">NIB:</p>
                    <p class="text-lg font-bold text-grey-500">00005342635635</p>
                </div>
                <div class="mr-10 mt-4">
                    <p class="text-md text-slate-400 font-semibold">SWIFT Code:</p>
                    <p class="text-lg font-bold text-grey-500">BCIMMZMA</p>
                </div>
            </div>
            <div>
                <p class="text-md text-slate-400 font-semibold mt-6">Upload do comprovativo de transferência: pelo menos 50% do valor total</p>
                <button type="button" id="fileSelector" class="bg-grey-200 mt-4 rounded-lg text-black py-4 px-10 hover:bg-blue-400 hover:cursor-pointer text-xl">Selecionar o comprovativo</button>
                <input
                    id="transferFile"
                    type="file"
                    placeholder="Confirmação de Transferência"
                    wire:model="transferFile"
                    value="{{ old('transferFile') }}"
                    class="hidden"
                    accept=".png,.jpeg,.jpg,.pdf"
                />
                 @error('transferFile') <span class="error">{{ $message }}</span> @enderror
            </div>
                <button
                    class="bg-primary mt-4 rounded-lg text-white py-4 px-10 hover:bg-orange-400 hover:cursor-pointer text-xl"
                    type="submit"
                >
                    Reservar
                </button>
            </form>
            <div
                class="card_image bg-gradient-to-br bg-white-200 justify-center align-center rounded-lg"
            >
                <div class="w-full h-full">
                    @if ($room->images->count() > 0)
                    <img
                        class="object-cover w-full max-h-[300px] rounded-t-lg"
                        src="{{asset('storage/'.$room->images[0]->path)}}"
                        alt="Credit card"
                    />
                    @endif
                    <div class="p-4 text-grey-900">
                        <h1 class="text-2xl font-bold text-grey-900">
                            {{ $room->name }}
                        </h1>
                        <div class="flex justify-between mt-4">
                            <div>
                                <span class="text-lg text-grey-500"
                                    >Preço por noite</span
                                >
                                <h1 class="text-2xl font-bold text-orange-900">
                                    {{ $room->price }} MZN
                                </h1>
                            </div>

                            <div>
                                <span class="text-lg font-bold text-grey-500"
                                    >Valor total</span
                                >
                                <h1 class="text-2xl font-bold text-orange-900">
                                    {{ $totalPrice }} MZN
                                </h1>
                                <span class="text-grey-400 text-base"
                                    >USD${{ $priceUSD }}</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@script
<script>

    const fileSelector = document.getElementById('fileSelector');
    const transferFile = document.getElementById('transferFile');

    fileSelector.addEventListener('click', function(event) {
        event.preventDefault();
        transferFile.click();
    });
</script>
@endscript
