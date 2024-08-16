<div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
    <!-- Button to open the modal -->
    <button @click="isOpen=true"
        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</button>

    <!-- Modal Background -->
    <div x-show="isOpen" class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg w-1/2 max-h-[100vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="flex justify-between items-center bg-gray-200 p-4 rounded-t-lg">
                <h3 class="text-xl font-semibold">Create User</h3>
                <button @click="isOpen=false" class="text-gray-600 hover:text-gray-900">&times;</button>
            </div>
            <div class="p-4">
                <form wire:submit.prevent="save">
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" wire:model="title" name="title"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <small><span class="text-black">[img1] akan diganti dengan Image 1 dan seterusnya</span></small>
                        <textarea wire:model="description" rows="10"
                            class="border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Type your text here..."></textarea>
                        @error('description')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="goal" class="block text-sm font-medium text-gray-700">Goal</label>
                        <input type="text" id="goal" wire:model="goal" name="goal"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('goal')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="start_date" class="block text-sm font-medium text-gray-700">Start date</label>
                        <input type="date" id="start_date" wire:model="start_date" name="start_date"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 bg-gray-200 py-2 sm:text-sm">
                        @error('start_date')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="end_date" class="block text-sm font-medium text-gray-700">End date</label>
                        <input type="date" id="end_date" wire:model="end_date" name="end_date"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 bg-gray-200 py-2 sm:text-sm">
                        @error('end_date')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="min_donation" class="block text-sm font-medium text-gray-700">Min donation</label>
                        <input type="number" id="min_donation" wire:model="min_donation" name="min_donation"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('min_donation')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                        <input type="text" id="lokasi" wire:model="lokasi" name="lokasi"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm">
                        @error('lokasi')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="main_picture" class="block text-sm font-medium text-gray-700">Image 1</label>
                        <input type="file" id="main_picture" class="border border-gray-300 p-2 w-full rounded-lg"
                            wire:model="main_picture">
                        @error('main_picture')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="second_picture" class="block text-sm font-medium text-gray-700">Image 2</label>
                        <input type="file" id="second_picture" class="border border-gray-300 p-2 w-full rounded-lg"
                            wire:model="second_picture">
                        @error('second_picture')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="last_picture" class="block text-sm font-medium text-gray-700">Image 3</label>
                        <input type="file" id="last_picture" class="border border-gray-300 p-2 w-full rounded-lg"
                            wire:model="last_picture">
                        @error('last_picture')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>




                    <!-- Submit Button inside the form -->
                    <div class="flex justify-between p-4 bg-gray-200 rounded-b-lg">
                        <div wire:loading>
                            <div class="spinner"></div>
                            {{-- <div class="spinner-text">Uploading...</div> --}}
                        </div>
                        <div wire:loading.remove>
                            <!-- This content will be hidden while a Livewire request is processing -->
                        </div>
                        <div>
                            <button type="button" @click="isOpen = false"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Close</button>
                            <button type="submit"
                                class="ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
{{-- img preview --}}
{{-- <script>
    function previewImage(event, previewId) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById(previewId);
            output.src = reader.result;
            output.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script> --}}
{{-- format uang --}}
<script>
    function formatMoney(input) {
        let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Add dots for thousands
        input.value = value;
    }
    </script>
