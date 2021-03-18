@if ($message = Session::get('success'))
    <div class="p-2 text-green-500">{{ $message }}</div>
@endif

@if ($message = Session::get('error'))
    <div class="p-2 text-red-500">{{ $message }}</div>
@endif

@if ($message = Session::get('info'))
    <div class="p-2 text-blue-500">{{ $message }}</div>
@endif

@if ($message = Session::get('warning'))
    <div class="p-2 text-yellow-500">{{ $message }}</div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="p-2 text-red-500">{{ $error }}</div>
    @endforeach
@endif
