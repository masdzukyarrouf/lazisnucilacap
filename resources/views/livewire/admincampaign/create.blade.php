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
                        <label for="id_kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select id="id_kategori" wire:model="id_kategori" name="id_kategori"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 bg-gray-200 py-2 sm:text-sm">
                            <option value="{{null}}" selected>Select</option>
                            @foreach($kategoriList as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endforeach
                        </select>
                    
                        @error('id_kategori')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    

                    <div class="mb-4">
                        <label for="goal" class="block text-sm font-medium text-gray-700">Goal</label>
                        <!-- Visible Input for formatting -->
                        <input type="text" id="goal_display" name="goal_display"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm"
                            oninput="formatMoney(this, 'goal_hidden')" value="{{ number_format($goal, 0, ',', '.') }}">
                        
                        <!-- Hidden Input for Livewire to store pure numeric value -->
                        <input type="hidden" id="goal_hidden" wire:model.lazy="goal">
                    
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
                        <label for="min_donation" class="block text-sm font-medium text-gray-700">Min Donation</label>
                        <!-- Visible Input for formatting -->
                        <input type="text" id="min_donation_display" name="min_donation_display"
                            class="mt-1 block w-full rounded-md border-gray-700 shadow-2xl focus:border-indigo-500 bg-gray-200 py-1 sm:text-sm"
                            oninput="formatMoney(this, 'min_donation_hidden')"   value="{{ number_format($min_donation, 0, ',', '.') }}">
                    
                        <!-- Hidden Input for Livewire to store pure numeric value -->
                        <input type="hidden" id="min_donation_hidden" wire:model.lazy="min_donation">
                    
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
                        <input type="file" id="second_picture"
                            class="border border-gray-300 p-2 w-full rounded-lg" wire:model="second_picture">
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
                    <input type="hidden" id="goal-hidden" wire:model="goal">
                    <input type="hidden" id="min-donation-hidden" wire:model="min_donation">





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
<script>
    function formatMoney(input, hiddenInputId) {
     // Get the raw value without formatting
     let value = input.value.replace(/[^\d]/g, ''); // Remove all non-numeric characters
 
     // Format the value with dots for thousands
     let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
 
     // Update the visible input with the formatted value
     input.value = formattedValue;
 
     // Update the hidden input with the numeric value for Livewire
     let hiddenInput = document.getElementById(hiddenInputId);
     hiddenInput.value = value;
 
     // Dispatch an input event to ensure Livewire sees the change
     hiddenInput.dispatchEvent(new Event('input'));
 }
 
//  function formatOnLoad() {
//      const goalInput = document.getElementById('goal_display');
//      if (goalInput.value) {
//          formatMoney(goalInput, 'goal_hidden');
//      }
//  }
 
 document.addEventListener('DOMContentLoaded', formatOnLoad);
 
 </script>

