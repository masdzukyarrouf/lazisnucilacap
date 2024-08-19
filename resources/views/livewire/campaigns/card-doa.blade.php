<div class="w-full flex-col items-center py-2 px-4 shadow-[0_4px_4px_rgba(0,0,0,0.1)]">
    <div class="flex flex-col text-sm text-left w-full">
        <p class="font-bold">{{$pendoa}}</p>
        <p class="text-xs mt-1">{{$doa->created_at}} </p>
    </div>
    <div class="w-full bg-white mt-4 text-black flex flex-col ">
        <p class="text-left text-xs leading-loose">{{$doa->doa}}</p>
        <p class="text-left text-xs mt-4">0 orang</p>
    </div>
    <div class="w-full bg-white mt-2 text-black border-t py-2 hover:bg-gray-300">
        <a class=" flex justify-center space-x-1 items-center ">
            <p>❤</p>
            <p class="text-left text-xs ">Aamin</p>
        </a>
    </div>
</div>
