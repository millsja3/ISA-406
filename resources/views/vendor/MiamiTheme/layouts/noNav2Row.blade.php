@include("MiamiTheme::partials.top")
<div class="row">
    <div class="col-12">
       @yield('topContent')
    </div>
</div>
<div class="row">
    <div class="col-12">
        @yield('content')
    </div>
</div>
@include("MiamiTheme::partials.bottom")
