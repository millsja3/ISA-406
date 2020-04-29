@extends('MiamiTheme::layouts.leftNavAndNoTopNav')
@section('content')
    <?php
        $student;
        <h3>{{$student->fullname}}</h3>
    ?>
@endsection