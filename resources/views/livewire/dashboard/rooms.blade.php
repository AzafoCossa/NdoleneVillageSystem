<div x-data="{ showRoomForm: $wire.entangle('showRoomForm') }" wire:cloak>
    <button
        x-show="!showRoomForm"
        @click="showRoomForm = !showRoomForm"
        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        type="button"
    >
        Adicionar quarto
    </button>

    <div x-show="showRoomForm" class="mt-4 mx-auto max-w-3xl">
        <form class="space-y-4" wire:submit.prevent="saveRoom">
            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label
                        for="name"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Nome do quarto</label
                    >
                    <input
                        type="text"
                        wire:model="roomForm.name"
                        id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nome do quarto"
                    />
                    @error('roomForm.name')
                    <span class="text-red-500 block">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label
                        for="room_type"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Tipo de quarto</label
                    >
                    <select
                        wire:model="roomForm.roomType"
                        id="room_type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    >
                        <option value="">Selecione o tipo de quarto</option>
                        @foreach($room_types as $room_type)
                        <option
                            value="{{ $room_type->id }}"
                            wire:ket="{{$room_type->id}}"
                        >
                            {{ $room_type->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('roomForm.roomType')
                    <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <div>
                <label
                    for="description"
                    class="block mb-2 text-sm font-medium text-gray-900"
                    >Descrição</label
                >
                <textarea
                    wire:model="roomForm.description"
                    id="description"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Descrição"
                ></textarea>
                @error('roomForm.description')
                <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label
                        for="status"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Status</label
                    >
                    <select
                        wire:model="roomForm.status"
                        id="room_type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    >
                        <option value="">Selecione a disponibilidade</option>
                        <option value="available">Disponível</option>
                        <option value="booked">Reservado</option>
                        <option value="maintenance">Em manutenção</option>
                    </select>
                    @error('roomForm.status')
                    <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label
                        for="price"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Preço do quarto</label
                    >
                    <input
                        type="text"
                        wire:model="roomForm.price"
                        id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Preço do quarto"
                    />
                    @error('roomForm.price')
                    <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div>
                    <label
                        for="capacity"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Capacidade do quarto</label
                    >
                    <input
                        type="text"
                        wire:model="roomForm.capacity"
                        id="capacity"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Quantas pessoas o quarto alberga?"
                    />
                    @error('roomForm.capacity')
                    <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label
                        for="image"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Imagem do quarto</label
                    >
                    <input
                        wire:ignore
                        type="file"
                        wire:model="roomForm.image"
                        id="image"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Quantas pessoas o quarto alberga?"
                        accept="image/png, image/jpeg"
                    />
                    @error('roomForm.image')
                    <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex flex-row gap-6">
                <button
                    type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                >
                    Criar o quarto</button
                ><button
                    @click="showRoomForm = false"
                    type="button"
                    class="w-full text-white bg-grey-400 hover:bg-grey-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                >
                    Cancelar
                </button>
            </div>
        </form>
    </div>
    <div
        x-show="!showRoomForm"
        class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4"
    >
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-white-50 uppercase bg-secondary">
                <tr>
                    <th scope="col" class="px-6 py-3">Room name</th>
                    <th scope="col" class="px-6 py-3">Room type</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">price</th>
                    <th scope="col" class="px-6 py-3">Capacity</th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                <tr
                    wire:key="{{$room->id}}"
                    class="bg-white border-b border-gray-200 hover:bg-gray-50 hover:cursor-pointer"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                    >
                        {{$room->name}}
                    </th>
                    <td class="px-6 py-4">{{$room->type->name}}</td>
                    <td class="px-6 py-4">{{$room->status}}</td>
                    <td class="px-6 py-4">{{$room->price}}</td>
                    <td class="px-6 py-4">{{$room->capacity}}</td>
                    <td class="px-6 py-4 text-right">
                        <a
                            href="#"
                            class="font-medium text-blue-600 hover:underline"
                            >Edit</a
                        >
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
