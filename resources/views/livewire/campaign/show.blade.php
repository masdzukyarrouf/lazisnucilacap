<div x-data="{ isOpen: false }" @modal-closed.window="isOpen = false">
    <!-- Button to open the modal -->
    <button @click="isOpen=true"
        class="inline-block px-3 py-1 text-white text-center bg-green-500 rounded hover:bg-green-700">View</button>

    <!-- Modal Background -->
    <div x-show="isOpen" class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center z-50">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-3/4 max-h-[100vh] overflow-y-auto">

            <div class="flex justify-between items-center bg-gray-200 p-4 rounded-t-lg sticky top-0">
                <h3 class="text-xl font-semibold">View Detail</h3>
                <button @click="isOpen=false" class="text-gray-600 hover:text-gray-900">&times;</button>
            </div>
            <div class="p-4">
                <h1 class="text-2xl font-bold ">{{ $campaign->title }}</h1>
                <img src="{{ asset('storage/images/campaign/' . $campaign->main_picture) }}" alt="main picture"
                    class="h-96 mb-2 mt-2 mx-auto block">
                <p>{{ $campaign->description }}</p>
                <p class="mt-2">Goal : {{ $campaign->goal }}</p>
                <p class="mt-2">Raised : {{ $campaign->raised }}</p>
                <p class="mt-2">Start : {{ $campaign->start_date }}</p>
                <p class="mt-2">End : {{ $campaign->end_date }}</p>
                <p class="mt-2">Minimum: {{ $campaign->min_donation }}</p>
                <p class="mt-2">Lokasi : {{ $campaign->lokasi }}</p>
                <img src="{{ asset('storage/images/campaign/' . $campaign->second_picture) }}" alt="second picture"
                    class="h-96 mb-2 mt-2 border border-1 block">
                <img src="{{ asset('storage/images/campaign/' . $campaign->last_picture) }}" alt="last picture"
                    class="h-96 mb-2 mt-2 border border-1 block">
            </div>

        </div>
    </div>
</div>
