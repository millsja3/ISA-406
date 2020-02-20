<div class="row">
    <div class="col-xs-12">
        <a href="#" id="sideNavBtn" class="btn btn-brand btn-lg" data-toggle="collapse" data-target="#sideNav" aria-expanded="false">
            Menu&nbsp;&nbsp;<i class="fa fa-bars" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="row">
    <div class="collapse navbar-collapse" id="sideNav">
        <nav>
            @if (!empty($sideNavItems))
            <ul class="nav nav-miami-vertical-justified">
                @foreach($sideNavItems as $sideNavItem)
                    <li{!! empty($sideNavItem['current']) ? '' : ' class="active"' !!}>
                        <a href="{{ $sideNavItem['url'] ?? '#' }}" >{{ $sideNavItem['name'] ?? ''}}</a>
                    </li>
                @endforeach
            </ul>
            @endif
            @if (!empty($AppNavMenu))
                {!! $AppNavMenu->asUl( ['class' => 'nav nav-miami-vertical-justified']) !!}
            @endif
        </nav>
    </div>
</div>

