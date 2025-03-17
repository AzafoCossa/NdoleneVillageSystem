<div wire:cloak>
    <div>
        <form class="flex gap-3" wire:submit.prevent="createRoomType">
            <input
                wire:model="name"
                type="text"
                class="border-2 rounded-lg placeholder:text-grey-400 px-4 py-2 text-grey-900 @error('name') border-red-500 @else border-grey-400 @enderror"
                placeholder="Room type"
            />

            <div>
                <input
                    wire:model="description"
                    type="text"
                    class="border-2 rounded-lg placeholder:text-grey-400 px-4 py-2 text-grey-900 @error('description') border-red-500 @else border-grey-400 @enderror"
                    placeholder="Description"
                />
            </div>

            <button
                type="submit"
                class="bg-secondary py-2 px-6 rounded-lg text-white-200 hover:cursor-pointer"
            >
                Salvar
            </button>
        </form>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-white-50 uppercase bg-secondary">
                <tr>
                    <th scope="col" class="px-6 py-3">Room Type</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Number of rooms
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($room_types as $room_type)
                <tr
                    wire:key="{{$room_type->id}}"
                    class="bg-white border-b border-gray-200 hover:bg-gray-50 hover:cursor-pointer"
                >
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                        {{$room_type->name}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-grey-500">
                        {{$room_type->description}}
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{$room_type->rooms_count}}
                    </td>
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
@script
<script>
    $wire.on("room-message", (event) => {
        Toast.fire({
            icon: event.type,
            text: event.message,
        });
    });
</script>
@endscript
