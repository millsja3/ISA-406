@include("MiamiTheme::partials.top")
<div class="row">
    <div class="col-sm-12">
        @yield('logOut')
    </div>
    <div class="col-sm-3">
        @yield('leftColumn')
    </div>
    <div class="col-sm-9">
        @yield('content')
    </div>
</div>
@include("MiamiTheme::partials.bottom")
