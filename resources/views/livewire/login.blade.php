<div>
    <x-navbar></x-navbar>
    <div class="flex items-center justify-center  px-6 py-4 lg:px-8">
        <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-md ">
            <div class="text-center">
                <img class="w-auto h-24 mx-auto" src="{{ asset('images/logo_lazisnu.png') }}" alt="Your Company">
                {{-- <h2 class="mt-3 text-2xl font-bold leading-9 tracking-tight text-gray-900">MASUK</h2> --}}
                <p class="text-xl font-bold leading-9 tracking-tight text-gray-900 mt-12">Belum memiliki akun? 
                    <a href="/daftar" class="text-green-500">Daftar</a>
                </p>
            </div>
            
            <form wire:submit="login">
                <div class="space-y-6 ">
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" wire:model='username' type="text" name="username" id="username">
                        @error('username')
                        <small class="text-red-500">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-green-500 hover:text-green-600">Forgot password?</a>  
                        </div>
                    </div>
                    <div class="mt-2">
                        <input class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" wire:model='password' type="password" name="password" id="password">
                        @error('password')
                        <small class="text-red-500">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-green-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500">Masuk</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>