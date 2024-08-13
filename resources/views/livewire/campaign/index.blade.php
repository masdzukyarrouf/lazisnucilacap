<div class="mt-12 mx-4 flex flex-col justify-between">

    <div class="mt-4">
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

        <livewire:campaign.create />

        <table class="min-w-full bg-white border border-gray-200 mt-4">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">Title</th>
                    {{-- <th class="px-4 py-2 text-left">Description</th> --}}
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
                    <tr class="border-t" wire:key="campaign-{{ $campaign->id_campaign }}">
                        <td class="px-4 py-2">{{ \Illuminate\Support\Str::limit($campaign->title, 10, '...') }}</td>
                        {{-- <td class="px-4 py-2">{{ \Illuminate\Support\Str::limit($campaign->description, 30, '...') }} --}}
                        </td>
                        <td class="px-4 py-2">{{ $campaign->goal }}</td>
                        <td class="px-4 py-2">{{ $campaign->raised }}</td>
                        <td class="px-4 py-2">{{ $campaign->start_date }}</td>
                        <td class="px-4 py-2">{{ $campaign->end_date }}</td>
                        <td class="px-4 py-2">{{ $campaign->min_donation }}</td>
                        <td class="px-4 py-2">{{ $campaign->lokasi }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset('storage/images/campaign/' . $campaign->main_picture) }}"
                                alt="Main Picture" class="w-16 h-16 object-cover">
                        </td>
                        <td >
                            

                                <livewire:campaign.edit :campaign="$campaign"
                                wire:key="edit-campaign-{{ $campaign->id_campaign }}" />
                                
                                <livewire:campaign.show :id_campaign="$campaign->id_campaign"
                                    wire:key="campaign-{{ $campaign->id_campaign }}" />
                                    
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
        <!-- Pagination Controls -->
        <div class="mt-4 text-center py-8">
            {{ $campaigns->links('pagination::tailwind') }}
        </div>
    </div>

</div>
