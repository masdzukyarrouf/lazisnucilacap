<div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
    <button @click="isOpen=true" 
        class="inline-block px-3 py-1 text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>

        <livewire:berita.formedit :id_berita="$id_berita" />
    
</div>
