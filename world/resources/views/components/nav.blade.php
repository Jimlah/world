<div class="flex flex-col items-center justify-between h-screen col-span-3 py-5 bg-white sm:col-span-2 md:col-span-1">
    <div class="flex flex-col w-10/12 space-y-10">
        <div class="flex items-center">
            <span><svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg></span>
            <span class="font-bold text-blue-600">The Urban Project</span>
        </div>

        <div class="flex flex-col space-y-2 divide-y divide-gray-100">
            <div class="flex flex-col space-y">
                <a href={{ route('dashboard') }}
                    class="flex items-center w-full p-2 space-x-2 font-semibold text-blue-400 rounded-lg hover:bg-blue-50 hover:text-blue-600">
                    <span><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                            </path>
                        </svg></span>
                    <span>Dashboard</span>
                </a>
                <a href={{ route('posts')}}
                    class="flex items-center w-full p-2 space-x-2 font-semibold text-blue-400 rounded-lg hover:bg-blue-50 hover:text-blue-600">
                    <span><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg></span>
                    <span>Posts</span>
                </a>
                <a href=""
                    class="flex items-center w-full p-2 space-x-2 font-semibold text-blue-400 rounded-lg hover:bg-blue-50 hover:text-blue-600">
                    <span><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                            </path>
                        </svg></span>
                    <span>Message</span>
                </a>
                @if (auth()->user()->is_admin())
                    <a href=""
                        class="flex items-center w-full p-2 space-x-2 font-semibold text-blue-400 rounded-lg hover:bg-blue-50 hover:text-blue-600">
                        <span><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg></span>
                        <span>Users</span>
                    </a>
                @endif
                <a href=""
                    class="flex items-center w-full p-2 space-x-2 font-semibold text-blue-400 rounded-lg hover:bg-blue-50 hover:text-blue-600">
                    <span><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg></span>
                    <span>Statistics</span>
                </a>
            </div>
            <div class="flex flex-col space-y">
                <a href=""
                    class="flex items-center w-full p-2 space-x-2 font-semibold text-blue-400 rounded-lg hover:bg-blue-50 hover:text-blue-600">
                    <span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </span>
                    <span>Settings</span>
                </a>
                <a href={{ route('logout') }}
                    class="flex items-center w-full p-2 space-x-2 font-semibold text-blue-400 rounded-lg hover:bg-blue-50 hover:text-blue-600">
                    <span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                    </span>
                    <span>Log Out</span>
                </a>
            </div>
        </div>
    </div>

    <div class="flex flex-col items-center w-10/12 px-2 py-2 space-y-2 rounded-lg bg-blue-50">
        <span><svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                </path>
            </svg></span>
        <span class="text-base font-bold">New Draft</span>
        <p class="text-sm font-light text-center text-opacity-25">Do you want to make a new draft to write something?
        </p>
        <a href="" class="w-full py-2 font-bold text-center text-blue-600 bg-white rounded-lg hover:bg-gray-200">Create
            File</a>
    </div>
    {{-- @if (auth()
        ->user()
        ->is_admin())
    {{auth()->user()->name}}
@endif

@if (auth()
        ->user()
        ->is_author())
    {{auth()->user()->name}}
@endif --}}
</div>
