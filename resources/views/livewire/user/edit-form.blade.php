<div>
    <!-- Modal Background -->
    <div x-show="isOpen" class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg w-1/2">
            <!-- Modal Header -->
            <div class="flex justify-between items-center bg-gray-200 p-4 rounded-t-lg">
                <h3 class="text-xl font-semibold">Edit User</h3>
                <button @click="isOpen=false" class="text-gray-600 hover:text-gray-900">&times;</button>
            </div>
            <div class="p-4">
                <form wire:submit="update">
                    <input type="text" hidden wire:model="id_user">
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" id="username" wire:model="username" name="username"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('username')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">Nama
                            Depan</label>
                        <input type="text" id="first_name" wire:model="first_name" name="first_name"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('first_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Nama
                            Belakang</label>
                        <input type="text" id="last_name" wire:model="last_name" name="last_name"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('last_name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="no_telp" class="block text-sm font-medium text-gray-700">No Telp</label>
                        <input type="text" id="no_telp" wire:model="no_telp" name="no_telp"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('no_telp')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" wire:model="password" name="password"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                        <select id="role" wire:model="role" name="role"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                            <option value="">Select a role</option>
                            <option value="admin">Admin</option>
                            <option value="donatur">Donatur</option>
                        </select>
                        @error('role')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button inside the form -->
                    <div class="flex justify-end p-4 bg-gray-200 rounded-b-lg">
                        <button type="button" wire:click="clear({{$id_user}})" @click="isOpen = false" 
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Close</button>
                        <button type="submit" @click="isOpen = false"
                            class="ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
