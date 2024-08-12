<div class="mt-12 mx-4 flex flex-col justify-between">
    {{-- <div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
        <!-- Button to open the modal -->
        <button @click="isOpen=true"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</button>
    
        <!-- Modal Background -->
        <div x-show="isOpen" class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50">
            <!-- Modal Content -->
            <div class="bg-white rounded-lg shadow-lg w-1/2">
                <!-- Modal Header -->
                <div class="flex justify-between items-center bg-gray-200 p-4 rounded-t-lg">
                    <h3 class="text-xl font-semibold">Create User</h3>
                    <button @click="isOpen=false" class="text-gray-600 hover:text-gray-900">&times;</button>
                </div>
                <div class="p-4">
                    <form wire:submit="save">
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
                            <button type="button" @click="isOpen = false"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Close</button>
                            <button type="submit" @click="isOpen = false"
                                class="ml-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div> --}}

    <div class="mt-12 ">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">Title</th>
                    <th class="px-4 py-2 text-left">Description</th>
                    <th class="px-4 py-2 text-left">Goal</th>
                    <th class="px-4 py-2 text-left">Raised</th>
                    <th class="px-4 py-2 text-left">Start Date</th>
                    <th class="px-4 py-2 text-left">End Date</th>
                    <th class="px-4 py-2 text-left">Min Donation</th>
                    <th class="px-4 py-2 text-left">Lokasi</th>
                    <th class="px-4 py-2 text-left">Main Picture</th>
                    <th class="px-4 py-2 text-left">Action</th>
                    {{-- <th class="px-4 py-2 text-left">Last Picture</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($campaigns as $campaign)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $campaign->title }}</td>
                        <td class="px-4 py-2">{{ \Illuminate\Support\Str::limit($campaign->description, 30, '...') }}
                        </td>
                        <td class="px-4 py-2">{{ $campaign->goal }}</td>
                        <td class="px-4 py-2">{{ $campaign->raised }}</td>
                        <td class="px-4 py-2">{{ $campaign->start_date }}</td>
                        <td class="px-4 py-2">{{ $campaign->end_date }}</td>
                        <td class="px-4 py-2">{{ $campaign->min_donation }}</td>
                        <td class="px-4 py-2">{{ $campaign->lokasi }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset('images/campaign/' . $campaign->main_picture) }}" alt="Main Picture"
                                class="w-16 h-16 object-cover">
                        </td>
                        <td>
                            <div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
                                <!-- Button to open the modal -->
                                <button @click="isOpen=true"
                                    class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">View</button>
                            
                                <!-- Modal Background -->
                                <div x-show="isOpen"
                                    class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50">
                                    <!-- Modal Content -->
                                    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-3/4 max-h-[100vh] overflow-y-auto">
                            
                                        <div class="flex justify-between items-center bg-gray-200 p-4 rounded-t-lg sticky top-0">
                                            <h3 class="text-xl font-semibold">View Detail</h3>
                                            <button @click="isOpen=false"
                                                class="text-gray-600 hover:text-gray-900">&times;</button>
                                        </div>
                                        <div class="p-4">
                                            <h2>{{ $campaign->title }}</h2>
                                            <img src="{{ asset('images/campaign/' . $campaign->main_picture) }}" alt="main picture" class="w-full h-auto mb-2">
                                            <p>{{ $campaign->description }}</p>
                                            <p>Goal : {{ $campaign->goal }}</p>
                                            <p>Raised : {{ $campaign->raised }}</p>
                                            <p>Start : {{ $campaign->start_date }}</p>
                                            <p>End : {{ $campaign->end_date }}</p>
                                            <p>Minimum: {{ $campaign->min_donation }}</p>
                                            <p>Lokasi : {{ $campaign->lokasi }}</p>
                                            <img src="{{ asset('images/campaign/' . $campaign->second_picture) }}" alt="second picture" class="w-full h-auto mb-2">
                                            <img src="{{ asset('images/campaign/' . $campaign->last_picture) }}" alt="last picture" class="w-full h-auto mb-2">
                                        </div>
                            
                                    </div>
                                </div>
                            </div>
                            
                        </td>
                        {{-- <td class="px-4 py-2">
                        <img src="{{ asset('images/campaign/' . $campaign->second_picture) }}" alt="Second Picture" class="w-16 h-16 object-cover">
                    </td>
                    <td class="px-4 py-2">
                        <img src="{{ asset('images/campaign/' . $campaign->last_picture) }}" alt="Last Picture" class="w-16 h-16 object-cover">
                    </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
