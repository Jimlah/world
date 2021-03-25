<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="bg-gray-100">
    <div class="w-full px-5 text-white md:px-20 " style="background-image: url('{{ asset('img/main-bg.jpg ') }}')">
        <header class="divide-y divide-gray-700 divide-opacity-75">
            <div class="flex items-center justify-between">
                <div class="hidden md:block">
                    <a href="">F</a>
                    <a href="">T</a>
                    <a href="">I</a>
                    <a href="">P</a>
                </div>
                <button class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="flex flex-wrap items-center justify-center py-10">
                    <p class="self-center font-serif text-xl font-bold tracking-tighter md:h-10 md:text-5xl">The Urbann
                        Project</p>
                </div>
                <button class="flex space-x-2">
                    <span class="hidden font-bold md:block">SEARCH</span>
                    <span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                </button>
            </div>
            <nav
                class="fixed top-0 left-0 flex flex-col items-start hidden w-full h-screen px-10 py-8 text-lg font-semibold bg-gray-900 border-collapse md:justify-center md:h-0 md:px-0 md:items-center md:flex-row md:bg-transparent md:static md:flex gap-x-10">
                <a href=""
                    class="w-full py-2 border-t border-b border-gray-700 border-opacity-50 md:w-auto md:border-0 md:py-0">Home</a>
                <a href=""
                    class="w-full py-2 border-t border-b border-gray-700 border-opacity-50 md:w-auto md:border-0 md:py-0">Blog</a>
                <a href=""
                    class="w-full py-2 border-t border-b border-gray-700 border-opacity-50 md:w-auto md:border-0 md:py-0">About</a>
                <a href=""
                    class="w-full py-2 border-t border-b border-gray-700 border-opacity-50 md:w-auto md:border-0 md:py-0">Contact</a>
            </nav>
            <div class="grid grid-cols-1 md:grid-rows-2 md:grid-cols-3">
                <div class="col-span-1 bg-center bg-no-repeat bg-cover md:col-span-2 md:row-span-2"
                    style="background-image: url('{{ asset('img/main1.jfif ') }}')">
                    <div
                        class="flex flex-col justify-end w-full h-full px-5 pt-40 pb-5 bg-gray-500 bg-opacity-50 hover:bg-opacity-80 hover:bg-gray-900 md:px-14 gap-y-4">
                        <span class="text-xl font-bold md:text-3xl">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                        <span>
                            John Doe . December 29 1960
                        </span>
                    </div>
                </div>
                <div class="col-span-1 bg-center bg-no-repeat bg-cover md:row-span-1"
                    style="background-image: url('{{ asset('img/main2.jpg ') }}')">
                    <div
                        class="flex flex-col justify-end w-full h-full px-5 pt-40 pb-5 bg-gray-500 bg-opacity-50 hover:bg-opacity-80 hover:bg-gray-900 gap-y-4">
                        <span class="text-xl font-bold">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                        <span>
                            John Doe . December 29 1960
                        </span>
                    </div>
                </div>
                <div class="hidden bg-center bg-no-repeat bg-cover md:block md:col-span-1 md:row-span-1"
                    style="background-image: url('{{ asset('img/main3.jpg ') }}')">
                    <div
                        class="flex flex-col justify-end w-full h-full px-5 pt-40 pb-5 bg-gray-500 bg-opacity-50 hover:bg-opacity-80 hover:bg-gray-900 gap-y-4">
                        <span class="text-xl font-bold">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                        <span>
                            John Doe . December 29 1960
                        </span>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <main class="px-5 mt-10 sm:px-40 md:px-36">
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-3 gap-y-5 gap-x-5 md:gap-x-14 ">
            @forelse ($posts as $post)
                <div class="bg-white shadow-sm">
                    <div class="bg-center bg-cover {{$post->image() == ''? '' : 'h-96'}}" style="background-image: url('{{$post->image()}}')">

                    </div>
                    <div class="flex flex-col p-5 space-y-1 overflow-hidden">
                        <p>{{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                        <a href="" class="text-lg font-bold">{{ Str::upper($post->title) }}</a>
                    </div>
                </div>
            @empty
                No Article Yet
            @endforelse
        </div>
        <div class="flex items-start justify-between mt-5">
            <a href="{{ $posts->previousPageUrl() }}" class="px-2 py-1 text-white bg-gray-500 rounded-md">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
                </svg>
            </a>

            <div> page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>
            <a href="{{ $posts->nextPageUrl() }}" class="px-2 py-1 text-white bg-gray-500 rounded-md">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </a>
        </div>
    </main>

</body>

</html>
