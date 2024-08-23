<div class="w-full flex-col items-center py-2 px-4 shadow-[0_4px_4px_rgba(0,0,0,0.1)]">
    <div class="flex flex-col text-left w-full">
        <p class="font-bold text-[12px]">{{ $doa->username }}</p>
        <p class="text-xs mt-1 text-[10px]">{{ $doa->created_at }} </p>
    </div>
    <div class="w-full bg-white mt-4 text-black flex flex-col  ">
        <p class="text-left text-[11px]/[24px]  break-words">{{ $doa->doa }}</p>
        <p class="text-left text-[10px] mt-4">0 orang</p>
    </div>
    <div class="w-full bg-white mt-2 text-black border-t py-2 hover:bg-gray-300">
        <a class=" flex justify-center space-x-1 items-center ">
            <p>❤</p>
            <p class="text-left text-[12px] ">Aamin</p>
        </a>
    </div>
</div>
