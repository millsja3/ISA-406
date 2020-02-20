@include("MiamiTheme::partials.top")
@include("MiamiTheme::partials.topNav")
<main role="main">
    <div class="col-12">
        <div class="content-div content-min-height">
            @yield('logOut')
            @yield('content')
        </div>
    </div>
</main>
@include("MiamiTheme::partials.bottom")
