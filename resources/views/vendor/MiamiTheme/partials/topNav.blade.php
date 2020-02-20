<a type="button" id="topNavBtn" class="btn btn-brand btn-lg" data-toggle="collapse" data-target="#topNav" aria-expanded="false">
    Menu&nbsp;&nbsp;<i class="fa fa-bars" aria-hidden="true"></i>
</a>

<div class="collapse navbar-collapse" id="topNav">
    <nav>
        <ul class="nav nav-miami-horizontal-justified">
            @foreach ($topNavItems as $topNavItem)
                <li class="col-{{ $topNavItem['col'] ?? "2" }}">
                    <a href="{{ $topNavItem['url'] }}">{{ $topNavItem['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>

