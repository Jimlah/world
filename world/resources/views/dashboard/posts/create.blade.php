@extends('layouts.dashboard')
@section('body')
    <div class="flex flex-col p-5 space-y-2 bg-white rounded-lg">
        <p>New Article</p>
        <form action="{{ route('post.store') }}" method="POST" class="flex flex-col space-y-2">
            @csrf
            <div class="flex flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="h-10 px-2 py-1 font-bold border">
            </div>
            <div class="flex flex-col">
                <label for="body">Body</label>
                <textarea name="body" id="body"></textarea>
                <script src="{{ URL::asset('node_modules/tinymce/tinymce.js') }}"></script>
                <script>
                    tinymce.init({
                        selector: '#body',
                        height: 500,
                        menubar: false,
                        plugins: [
                            'advlist autolink lists link image charmap print preview anchor textcolor',
                            'searchreplace visualblocks code fullscreen',
                            'insertdatetime media table contextmenu paste code help wordcount'
                        ],
                        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                        content_css: '//www.tiny.cloud/css/codepen.min.css'
                    });

                </script>
            </div>
            <div class="flex justify-start space-x-2">
                <button type="submit" name="save" class="p-2 text-white bg-blue-700">Save</button>
                <button type="submit" name="publish" class="p-2 text-white bg-green-700">Publish</button>
            </div>
        </form>
    </div>
@endsection
