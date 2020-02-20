<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="https://miamioh.edu/favicon.ico" >

    <!-- Generated from miami-bootstrap3 project -->
    <link href="{{ secure_asset("vendor/MiamiTheme/css/bootstrap3.min.css?v=1.0.4") }}" rel="stylesheet" />
    <link href="{{ secure_asset("vendor/MiamiTheme/css/font-awesome.min.css?v=3.0.0") }}" rel="stylesheet" />
    <link href="{{ secure_asset("vendor/MiamiTheme/css/bootstrap3_style.min.css?v=3.0.0") }}" rel="stylesheet" />

    <!-- Page-specific CSS -->
    @yield('css')
    <!-- /Page-specific CSS -->


</head>
<body>
@include("MiamiTheme::partials.mainHeader")
<main>
    <div class="container">
