@extends('layouts.dashboard')
@section('body')
    <div class="p-5 space-y-2 bg-white rounded-lg">
        <div class="flex flex-col flex-wrap items-center justify-between space-y-2 sm:flex-row">
            <form action="" method="GET">
                <select name="t" id="" onchange="this.form.submit()" class="px-2 py-1 border">
                    <option value=""> Select </option>
                    <option value="0">Mine</option>
                    <option value="1">All</option>
                </select>
            </form>

            <form action="" method="GET" class="flex items-center justify-center px-2 py-1 border">
                <input type="search" name="q" id="search" class="outline-none">
                <button>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>
        </div>
        <table class="w-full table-auto">
            <thead>
                <tr class="grid table-row grid-cols-12 gap-x-2 justify-content">
                    <th class="col-span-full md:col-span-7">Title</th>
                    <th class="text-left md:text-center col-span-full md:col-span-1">Status</th>
                    <th class="text-left md:text-center col-span-full md:col-span-2">Author</th>
                    <th class="text-left md:text-center col-span-full md:col-span-1">Published</th>
                    <th class="text-left md:text-center col-span-full md:col-span-1">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="grid items-center table-row grid-cols-12 border-t border-b gapx-x-4 justify-content">
                        <td class="p-2 col-span-full md:col-span-7">
                            <a href={{ route('post.show', ['id' => $post->id]) }} class="">{{ $post->title }}</a>
                            {{-- <button x-on:click="drop = true">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button> --}}
                        </td>
                        <td class="p-2 tab-resp col-span-full md:col-span-1">
                            <span class="px-2 py-1 rounded-lg bg-opacity-50 {{ $post->active ? 'bg-green-500' : 'bg-blue-500' }}">{{ $post->active ? 'Published' : 'Draft' }}</span>
                        </td>
                        <td class="p-2 text-left md:text-center tab-resp col-span-full md:col-span-2">{{ $post->author->name }}</td>
                        <td class="p-2 text-left md:text-center col-span-full md:col-span-1 tab-resp">
                            {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                        <td class="p-2 text-left md:text-center tab-resp col-span-full md:col-span-1">
                            <x-action edit="{{ route('post.edit', ['id' => $post->id]) }}"
                                delete="{{ route('post.destroy', ['id' => $post->id]) }}">

                            </x-action>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>

@endsection
