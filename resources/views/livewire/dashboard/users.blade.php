<div x-data="{ showUserForm: @entangle('showUserForm') }">
    <button
        x-show="!showUserForm"
        @click="showUserForm = !showUserForm"
        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
        type="button"
    >
        Adicionar Usuario
    </button>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4" x-show="!showUserForm">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-white-50 uppercase bg-secondary">
                <tr>
                    <th scope="col" class="px-6 py-3">Nome</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Função</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr
                    wire:click="viewUser({{$user->id}})"
                    class="bg-white border-b border-gray-200 hover:bg-gray-50 hover:cursor-pointer"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                    >
                        {{$user->username}}
                    </th>
                    <td class="px-6 py-4">{{$user->email}}</td>
                    <td class="px-6 py-4">{{$user->role}}</td>
                    <td class="px-6 py-4">
                        {{$user->email_verified_at ? 'Activo' : 'Inativo'}}
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
    <div x-show="showUserForm">
        @livewire('dashboard.user-form', [], key('new-user'))
    </div>
</div>
