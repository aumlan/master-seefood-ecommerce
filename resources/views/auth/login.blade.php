@if(!MoBileView())
    @include('auth.login_desktop')
@else
    @include('auth.login_mobile')

@endif
