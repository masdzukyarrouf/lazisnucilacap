<div class="mx-5 shadow-2xl">
    <div class="mt-12 mx-4 flex justify-between">
        <h1 class="text-2xl font-bold ">User Table</h1>
        <div>
            @if (session()->has('message'))
                <div id="flash-message"
                    class="bg-green-500 text-white p-4 rounded mb-4 mt-8 mx-12 flex justify-between items-center">
                    <span>{{ session('message') }}</span>
                    <button class="p-1"  onclick="document.getElementById('flash-message').style.display='none'"
                        class="text-white font-bold">
                        &times;
                    </button>
                </div>
            @endif
        </div>
        <!-- Modal Form -->
        <livewire:user.create />
    </div>

    <table class="min-w-full bg-white border border-gray-300 mt-8 mx-2">
        <thead>
            <tr class="w-full bg-gray-800 text-white">
                <th scope="col" class="px-6 py-3 border-b border-gray-300">#</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Name</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Role</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">No Telp</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Created At</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            
                @foreach ($users as $user)
                    <tr wire:key="user-{{ $user->id_user }}" class="bg-gray-100 even:bg-gray-200">
                        <td class="px-6 py-4 border-b border-gray-300">{{ $loop->index + $users->firstItem() }}</td>
                        <td class="px-6 py-4 border-b border-gray-300">{{ $user->username }}</td>
                        <td class="px-6 py-4 border-b border-gray-300">{{ $user->role }}</td>
                        <td class="px-6 py-4 border-b border-gray-300">{{ $user->no_telp }}</td>
                        <td class="px-6 py-4 border-b border-gray-300">{{ $user->created_at->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 border-b border-gray-300 flex space-x-2">
                            <livewire:user.edit :id_user="$user->id_user" />
                            <button class="inline-block bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700"
                                wire:click="destroy({{ $user->id_user }})">Delete</button>

                        </td>
                    </tr>
                @endforeach
                            {{-- <livewire:user.edit :id_user="$user->id_user" /> --}}
            
        </tbody>
    </table>

    <!-- Pagination Controls -->
    <div class="mt-4 text-center py-8">
        {{-- {{ $users->links('pagination::tailwind') }} --}}
    </div>


</div>
