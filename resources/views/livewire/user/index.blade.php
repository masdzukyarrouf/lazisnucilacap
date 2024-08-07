<div class="mx-5 shadow-2xl">
    <div class="mt-12 mx-4 flex justify-between">
        <h1 class="text-2xl font-bold ">User Table</h1>
        <div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
            <!-- Button to open the modal -->
            <button @click="isOpen=true"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</button>

            <!-- Modal Background -->
            <div x-show="isOpen" class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50">
                <!-- Modal Content -->
                <div class="bg-white rounded-lg shadow-lg w-1/2">
                    <!-- Modal Header -->
                    <div class="flex justify-between items-center bg-gray-200 p-4 rounded-t-lg">
                        <h3 class="text-xl font-semibold">Create User</h3>
                        <button @click="isOpen=false" class="text-gray-600 hover:text-gray-900">&times;</button>
                    </div>

                    <!-- Modal Body with Form -->
                    <div class="p-4">
                        <form wire:submit.prevent="submitForm">
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" id="name" wire:model="name" name="name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                <input type="text" id="role" wire:model="role" name="role"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('role')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="no_telp" class="block text-sm font-medium text-gray-700">No Telp</label>
                                <input type="text" id="no_telp" wire:model="no_telp" name="no_telp"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('no_telp')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </form>
                    </div>

                    <!-- Modal Footer -->
                    <div class="flex justify-end p-4 bg-gray-200 rounded-b-lg">
                        <button @click="isOpen = false"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Close</button>
                        <button wire:click="submitForm"
                            class="ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="min-w-full bg-white border border-gray-300 mt-8 mx-2">
        <thead>
            <tr class="w-full bg-gray-800 text-white">
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Id</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Name</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Role</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">No Telp</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Created At</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr wire:key="{{ $user->id_user }}" class="bg-gray-100 even:bg-gray-200">
                    <td class="px-6 py-4 border-b border-gray-300">{{ $loop->index + $users->firstItem() }}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{ $user->username }}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{ $user->role }}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{ $user->no_telp }}</td>
                    <td class="px-6 py-4 border-b border-gray-300">{{ $user->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4 border-b border-gray-300">
                        <a href="#"
                            class="inline-block bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</a>
                        <button
                            class="inline-block bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Controls -->
    <div class="mt-4 text-center py-8">
        {{ $users->links('pagination::tailwind') }}
    </div>


</div>
