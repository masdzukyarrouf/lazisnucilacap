<div class="mx-5 shadow-2xl">
    <div class="flex justify-between mx-4 mt-12">
        <h1 class="text-2xl font-bold ">berita Table</h1>
        <div>
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
        </div>
        <!-- Modal Form -->
        <livewire:berita.create />
    </div>

    <table class="min-w-full mx-2 mt-8 bg-white border border-gray-300">
        <thead>
            <tr class="w-full text-white bg-gray-800">
                <th scope="col" class="px-6 py-3 border-b border-gray-300">#</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">judul</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">isi</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">tanggal</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">gambar</th>
                <th scope="col" class="px-6 py-3 border-b border-gray-300">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            
                @foreach ($beritas as $berita)
                    <tr wire:key="berita-{{ $berita->id_berita }}" class="bg-gray-100 even:bg-gray-200">
                        <td class="px-6 py-4 border-b border-gray-300">{{ $loop->index + $berita->firstItem() }}</td>
                        <td class="px-6 py-4 border-b border-gray-300">{{ $berita->title_berita }}</td>
                        <td class="px-6 py-4 border-b border-gray-300">{{ $berita->description }}</td>
                        <td class="px-6 py-4 border-b border-gray-300">{{ $berita->tanggal->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 border-b border-gray-300">{{ $berita->picture }}</td>
                        <td class="flex px-6 py-4 space-x-2 border-b border-gray-300">
                            <livewire:berita.edit :id_berita="$berita->id_berita" wire:key="berita-{{ $berita->id_berita }}"/>
                            <button class="inline-block px-3 py-1 text-white bg-red-500 rounded hover:bg-red-700"
                                wire:click="destroy({{ $berita->id_berita }})">Delete</button>

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
