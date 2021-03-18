<div>
@if (auth()->user()->is_admin())
    {{auth()->user()->name}}
@endif

@if (auth()->user()->is_author())
    {{auth()->user()->name}}
@endif
hey
</div>
