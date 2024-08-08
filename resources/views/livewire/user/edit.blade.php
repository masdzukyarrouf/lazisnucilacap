<div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
    <!-- Button to open the modal -->
    <button @click="isOpen=true" 
        class="inline-block bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</button>

        <livewire:user.editForm :id_user="$id_user" lazy/>
    
</div>
