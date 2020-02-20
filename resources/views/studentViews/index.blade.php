@extends('MiamiTheme::layouts.leftNavAndNoTopNav')
@section('title', 'ISA Scholarship')
@section('header', 'ISA Scholarship Form')

@section('logOut')
    <div class="col-3 text-right logout-button">
        <a href="{{ url('/logout') }}" style="margin-bottom:10px" class="btn btn-primary">{{ trans('global.logout') }}</a>
    </div>
@endsection
@section('content')
    <div class="col-lg-3 text-left create-button">
        <a href="{{url('/webAlias/infoForm')}}" class="btn btn-primary" style="margin-bottom:10px">Submit</a>
    </div>
@endsection