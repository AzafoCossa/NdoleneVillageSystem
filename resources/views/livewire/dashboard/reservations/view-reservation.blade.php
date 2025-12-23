<div>
    <div>
        <div class="px-4 sm:px-6 lg:px-8 py-4">
            <a href="{{ route('dashboard.index') }}" class="text-black bg-grey-100 py-4 px-10 rounded-lg text-lg border-2 border-grey-400 hover:cursor-pointer">Voltar</a>

            <h1 class="text-2xl font-semibold text-gray-900 mt-12">
                Detalhes da reserva
            </h1>

            <div>
                <h2 class="text-lg font-medium text-gray-900 mt-4 mb-2">
                    Informações da reserva
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-black text-lg">
                    <div>
                        <p class="mt-2"><strong>Nome do quarto:</strong> {{ $reservation->room->name }}</p>
                        <p class="mt-2"><strong>Hóspede:</strong> {{ $reservation->guest->username }}</p>
                        <p class="mt-2"><strong>Email do hóspede:</strong> {{ $reservation->guest->email }}</p>
                        <p class="mt-2"><strong>Capacidade do quarto:</strong> {{ $reservation->room->capacity }}</p>
                    </div>
                    <div>
                        <p class="mt-2"><strong>Preço total:</strong> {{ $reservation->total_price / 100 }} MZN  ({{ $reservation->number_of_days }} dias)</p>
                        <p><strong>Valor pago:</strong> {{ $reservation->paid_amount / 100 }} MZN</p>
                        <p class="mt-2"><strong>Status:</strong> {{ $reservation->status }}</p>
                        <p><strong>Estado do pagamento:</strong> {{ $reservation->payment_status }}</p>
                        
                    </div>
                </div>

                // FIles can be .pdf or images
                <h2 class="text-lg font-medium text-gray-900 mt-4 mb-2">
                    Arquivos associados
                </h2>
                <div class="grid grid-cols-3 gap-4">
                    @foreach($reservation->files as $file)
                    <div class="border rounded-lg p-2">
                        @if(in_array($file->extension, ['jpg', 'jpeg', 'png']))
                        <img
                            src="reservations/{{ $file->path }}"
                            alt="File {{ $file->name }}"
                            class="w-full h-32 object-cover rounded"
                        />
                        @else
                        <a
                            href="{{ Storage::url($file->path) }}"
                            target="_blank"
                            class="text-blue-600 hover:underline"
                            >{{ $file->name }} Comprovativo (PDF)</a
                        >
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
