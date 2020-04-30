@extends('MiamiTheme::layouts.noNav')
@section('title', 'ISA Scholarship')
@section('header', 'ISA Scholarship Form')
@section('logOut')
    <div class="col-3 text-right logout-button">
        <a href="{{ url('/logout') }}" style="margin-bottom:10px" class="btn btn-primary">{{ trans('global.logout') }}</a>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ url('/css/student_css.css') }}"/>
@endsection
@section('content')
    <div>
        <h1>ISA Scholarship Application Reviews</h1>
        @include('partials.messages')
        <div id='notAuthorized'>
        </div>
        <div id='authorized'>
            <p>Search for a student by typing their name, the scholarship name, GPA, and application status. 
            Note application status will say applied for recent applications, approved if the student recieved 
            the scholarship, or denied.</p>
            @include('partials.table')
        </div>
    </div>
@endsection

@section('javascript')
    <script>

    </script>
@endsection
