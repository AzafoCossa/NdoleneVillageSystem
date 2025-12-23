<div class="text-black">

    <h2 class="text-2xl font-semibold text-gray-900 mt-12">Adicionar Novo Usuário</h2>

    <div class="w-1/2 mt-8">
        <form autocomplete="off" wire:submit.prevent="saveUser">
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Nome de Usuário</label>
                <input
                    type="text"
                    id="username"
                    wire:model="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Nome de usuário"
                    required
                />
                @error('username') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input
                    type="email"
                    id="email"
                    wire:model="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Email"
                    required
                />
                @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Função</label>
                <select
                    id="role"
                    wire:model="role"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required
                >
                    <option value="" disabled>Selecione uma função</option>
                    <option value="administrator">Administrador</option>
                    <option value="receptionist">Recepcionista</option>
                    <option value="manager">Gestor</option>
                </select>
                @error('role') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mt-6">
                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:cursor-pointer"
                >
                    Criar Usuário
                </button>
        </form>
    </div>
</div>
