@if(!MoBileView())
    @include('auth.register_desktop')
@else
    @include('auth.register_mobile')

@endif
