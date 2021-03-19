{{$post->body}}

<br>
<br>
<br>
@foreach ($comments as $item)
    {{$item}} <br>
@endforeach
<div class="underline">
    {{$post->author->name}}
</div>
