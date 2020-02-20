
        <footer>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="arrow-bullet-list" style="padding: 0">
                        <li>
                            <a target="_blank"
                               href="https://miamioh.edu/accessibility-issue">
                                Report an Accessibility Issue
                            </a>
                        </li>
                        <li>
                            <a href="mailto:ithelp@miamioh.edu?subject=Report a problem about {{ $appName }}">
                                Report a Problem With This Website
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    &copy; {{ date("Y") }} Miami University. All rights reserved.
                </div>
            </div>
        </footer>
    </div>
</main>

<script src="{{ secure_asset("vendor/MiamiTheme/js/jquery-3.2.1.min.js") }}"></script>
<script src="{{ secure_asset("vendor/MiamiTheme/js/bootstrap3.min.js") }}"></script>

@yield('javascript')

</body>
</html>
