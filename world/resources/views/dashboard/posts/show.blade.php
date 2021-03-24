@extends('layouts.dashboard')
@section('body')
    <div class="relative flex flex-col w-full p-5 space-y-2 bg-white">
        <div class="absolute top-2 right-5">
            @if (auth()->user()->is_post($post->author_id) || auth()->user()->is_admin())
            <x-page-edit author_id="{!!$post->author_id!!}" edit="{{ route('post.edit', ['id' => $post->id]) }}"
                delete="{{ route('post.destroy', ['id' => $post->id]) }}" >

            </x-page-edit>
            @endif
        </div>
        <p class="w-full text-lg font-bold text-center uppercase">{{$post->title}}</p>
        <p class="w-full text-justify">{!! $post->body !!}</p>
        <p class="self-start text-sm font-semibold">{{ $post->author->name . " " . Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
        <p class="text-lg font-semibold">Comments</p>
        <div class="flex flex-col space-y-4">
            @forelse ($post->comments as $comment)
                <div class="">
                    <p class="flex items-center justify-between" >
                        <span class="text-base font-semibold">
                            {{$comment->author->name . " - ". Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}
                        </span>
                        <div class="" x-data="{ open: false }">
                            <button class="text-xs font-extralight" x-on:click="open = true">
                                <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                            <form
                            action="{{ route('comment.destroy', ['id'=>$comment->id]) }}"
                            method="post"
                            class="fixed left-0 z-50 flex flex-col px-5 py-5 mx-auto space-y-2 bg-white rounded-lg shadow-lg sm:left-28 top-10"
                            x-show="open"
                            @click.away="open = false"
                            >
                                <p class="text-base font-bold" >Are you sure you want to delete this comment {{$comment->id}}</p>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="w-full py-2 text-lg font-bold text-center text-white bg-red-500">Yes</button>
                                <button class="w-full py-2 text-lg font-bold text-center text-white bg-blue-500">No</button>
                            </form>
                        </div>
                    </p>
                    <p class="leading-tight">{{$comment->body}}</p>
                </div>
            @empty
                No Comments Available
            @endforelse
        </div>
    </div>
@endsection
