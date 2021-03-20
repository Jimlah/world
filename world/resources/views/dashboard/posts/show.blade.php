@extends('layouts.dashboard')
@section('body')
    <div class="flex flex-col w-full p-5 space-y-2 bg-white ">
        <p class="w-full text-lg font-bold text-center uppercase">{{$post->title}}</p>
        <p class="w-full text-justify">{!! $post->body !!}</p>
        <p>{{$post->id}}</p>
        <div>
            @forelse ($post->comments as $comment)
                <p>
                    {{$comment->body}} <br>
                    {{$comment->author->name}}
                </p>
            @empty
                No Comments Available
            @endforelse
        </div>
    </div>
@endsection
