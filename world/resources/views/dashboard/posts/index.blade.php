@extends('layouts.dashboard')
@section('body')
    <div class="p-5 space-y-2 bg-white rounded-lg">
        <div class="flex items-center justify-between">
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
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </form>
        </div>
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="text-left">Title</th>
                    <th>Status</th>
                    <th>Author</th>
                    <th>Published</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-t border-b">
                        <td class="p-2"><a href={{route('post.show', ['id'=>$post->id])}} class="">{{ $post->title }}</a></td>
                        <td class="p-2"><span class="px-2 py-1 rounded-lg bg-opacity-50 {{ $post->active ? 'bg-green-500' : 'bg-blue-500' }}">{{ $post->active ? 'Published' : 'Draft' }}</span></td>
                        <td class="p-2">{{ $post->author->name }}</td>
                        <td class="p-2">{{ Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                        <td class="p-2">
                            <x-action edit="{{route('post.edit', ['id'=>$post->id])}}" delete="{{ route('post.destroy', ['id'=>$post->id]) }}">

                            </x-action>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>

@endsection
