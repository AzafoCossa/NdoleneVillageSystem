<x-layouts.dashboard>
    <div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500"
            >
                <thead class="text-xs text-white-50 uppercase bg-secondary">
                    <tr>
                        <th scope="col" class="px-6 py-3">Full name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Phonenumber</th>
                        <th scope="col" class="px-6 py-3">Country</th>
                        <th scope="col" class="px-6 py-3">Gender</th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($guests as $guest)
                    <tr
                        class="bg-white border-b border-gray-200 hover:bg-gray-50 hover:cursor-pointer"
                    >
                        <th
                            scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                        >
                            {{$guest->full_name}}
                        </th>
                        <td class="px-6 py-4">{{$guest->email}}</td>
                        <td class="px-6 py-4">{{$guest->phone_number}}</td>
                        <td class="px-6 py-4">{{$guest->country->name}}</td>
                        <td class="px-6 py-4">{{$guest->gender}}</td>
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
</x-layouts.dashboard>
