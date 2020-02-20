@include("MiamiTheme::partials.top")
@include("MiamiTheme::partials.topNav")
<div class="row">
    <div class="col-lg-2 col-md-3 col-sm-4">
        @yield('topLeftContent')
        @include("MiamiTheme::partials.sideNav")
        @yield('bottomLeftContent')
    </div>
    <div class="col-lg-10 col-md-9 col-sm-8">
        @yield('logOut')
        @yield('content')
    </div>
</div>
@include("MiamiTheme::partials.bottom")
