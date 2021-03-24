<div class="relative" x-data="{ open: false }">
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <button class="absolute" @click="open = true">
        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
    </button>

    <div class="absolute flex flex-col mt-6 -m-10 divide-y bg-blue-50" x-show="open"
    @click.away="open = false">
        <a href="{{$edit}}"class="px-1 py-1 hover:bg-gray-50 hover:text-gray-700">Edit</a>
        <a href="{{$delete}}" class="px-1 py-1 hover:bg-gray-50 hover:text-gray-700">Delete</a>
    </div>

</div>
