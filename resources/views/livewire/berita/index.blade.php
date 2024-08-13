<div class="flex flex-col justify-between mx-4 mt-12">
        @if (session()->has('message'))
                <div id="flash-message"
                    class="flex items-center justify-between p-4 mx-12 mt-8 mb-4 text-white bg-green-500 rounded">
                    <span>{{ session('message') }}</span>
                    <button class="p-1"  onclick="document.getElementById('flash-message').style.display='none'"
                        class="font-bold text-white">
                        &times;
                    </button>
                </div>
            @endif
    <div class="mt-4">

        <livewire:berita.create />

        <table class="min-w-full mt-4 bg-white border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">judul</th>
                    <th class="px-4 py-2 text-left">isi</th>
                    <th class="px-4 py-2 text-left">tanggal</th>
                    <th class="px-4 py-2 text-left">gambar</th>
                    <th class="px-4 py-2 text-left">action</th>
                    {{-- <th class="px-4 py-2 text-left">Last Picture</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($beritas as $berita)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $berita->title_berita }}</td>
                        <td class="px-4 py-2">
                            {{ \Illuminate\Support\Str::limit($berita->description, 30, '...') }}
                        </td>
                        <td class="px-4 py-2">{{ $berita->tanggal }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset('storage/' . $berita->picture) }}" alt="Main Picture" class="block w-24 mx-auto mt-2 mb-2">
                        </td>
                        <td>
                            <livewire:berita.show :id_berita="$berita->id_berita" wire:key="berita-{{ $berita->id_berita }}" />
                            <livewire:berita.edit :id_berita="$berita->id_berita" wire:key="berita-{{ $berita->id_berita }}"/>
                            <button class="inline-block px-3 py-1 text-white bg-red-500 rounded hover:bg-red-700"
                            wire:click="destroy({{ $berita->id_berita }})">Delete</button>

                        </td>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <!-- Pagination Controls -->
        <div class="py-8 mt-4 text-center">
            {{ $beritas->links('pagination::tailwind') }}
        </div>
    </div>

</div>
