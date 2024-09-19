<div>
    <x-nav-mobile2 title="Daftar" />
    <div class="flex items-center justify-center px-6  lg:px-8">
        <div class="w-full max-w-md px-8 bg-white shadow-md" style="width: 414px">
            <div class="text-center">
                <h2 class="mt-3 text-2xl font-bold leading-9 tracking-tight text-center text-gray-900">Daftar</h2>
                <p class="text-xl font-bold leading-9 tracking-tight text-center text-gray-900">Silahkan lengkapi data di
                    bawah</p>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm py-1">
                <form wire:submit.prevent='simpan'>
                    <div class="space-y-6">
                        <div>
                            <label for="username"
                                class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                            <div class="mt-2">
                                <input wire:model="username" id="username" name="username" type="text"
                                    autocomplete="username" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('username')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Depan</label>
                            <div class="mt-2">
                                <input wire:model="first_name" id="first_name" name="first_name" type="text"
                                    autocomplete="first_name" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('first_name')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Belakang</label>
                            <div class="mt-2">
                                <input wire:model="last_name" id="last_name" name="last_name" type="text"
                                    autocomplete="last_name" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('last_name')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="no_telp" class="block text-sm font-medium leading-6 text-gray-900">No
                                Telp</label>
                            <div class="mt-2">
                                <input wire:model="no_telp" id="no_telp" name="no_telp" type="text"
                                    autocomplete="no_telp" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('no_telp')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="mt-2">
                                <input wire:model="password" id="password" name="password" type="password"
                                    autocomplete="password" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                @error('password')
                                    <small class="text-red-500">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-green-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div style="height: 67px "></div>

        </div>
    </div>
</div>
