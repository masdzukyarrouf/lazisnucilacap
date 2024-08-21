<div class="flex flex-col items-center justify-center">
    <x-nav-mobile2 title="Profil" />
    <div class="flex flex-col bg-white shadow-md h-full" style="width: 414px; height: 736px">
        <div class="flex items-center justify-center mt-5">
            <img src="{{ asset('images/Mask Group.png') }}" alt="pinpoint" class="w-36">
        </div>
        <div class="flex justify-center">
            <h2 class="mr-2 font-semibold">{{ $users->first_name }}</h2>
            <h2 class="font-semibold">{{ $users->last_name }}</h2>
        </div>
        <div class="flex justify-center mt-2 mb-8 text-green-500">
            <h2>{{ $users->username }}</h2>
        </div>
        <div class="mb-4 mx-2 rounded-lg border border-gray-200 shadow-lg">
            <a href="/akun" class="flex items-center justify-between px-4 py-3 text-gray-900">
                <span>Akun Saya</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        <div class="mb-4 mx-2 rounded-lg border border-gray-200 shadow-lg">
            <a href="riwayat" class="flex items-center justify-between px-4 py-3 text-gray-900">
                <span>Riwayat Donasi</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
        <div class="border border-gray-200 shadow-lg mx-2 rounded-lg">
            <a href="#" 
            x-data 
            @click.prevent="if (confirm('Apakah Anda yakin ingin keluar?')) { $wire.logout() }" 
            class="flex items-center justify-between px-4 py-3 text-gray-900 cursor-pointer">
                <span>Keluar</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
