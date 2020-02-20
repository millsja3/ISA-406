
        <header>
            <div class="container">
                <div class="header clearfix">

                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-5 site-logo-container text-center">
                        <a href="https://miamioh.edu/"><img src="{{ secure_asset("vendor/MiamiTheme/img/logoLarge.png") }}"
                                                            alt="Miami University Logo"></a>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-md-9 col-sm-8 col-xs-7 site-title-container">
                        <h1 class="miami-h2">
                            <a href="{{ $pageTitleLink ?? '#'}}">
                            {{ $pageTitle ?? ''}}
                            </a>
                        </h1>
                    </div>
                </div>

                <div class="header-mobile">
                    <div class="site-logo-container">
                        <a href="https://miamioh.edu/"><img src="{{ secure_asset("vendor/MiamiTheme/img/logo.png") }}"
                                                            alt="Miami University Logo"></a>
                    </div>
                    <div class="site-title-container">
                        <h1 class="miami-h2">
                            <a href="{{ $pageTitleLink ?? '#'}}">
                                {{ $pageTitle ?? ''}}
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>