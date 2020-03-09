@extends('MiamiTheme::layouts.noNav')
@section('title', 'ISA Scholarship')
@section('header', 'ISA Scholarship Form')
@section('logOut')
    <div class="col-3 text-right logout-button">
        <a href="{{ url('/logout') }}" style="margin-bottom:10px" class="btn btn-primary">{{ trans('global.logout') }}</a>
    </div>
@endsection

@section('content')

    <h2> Confirm the following: </h2>
    <div class="panel panel-content">
        <form class="form" method="get" action="{{url('addStudent')}}">

            <p name ="scholarship" id ="scholarship"> Scholarhip Applied To:  {{{isset($scholarship) ? $scholarship: 'None'}}}</p>
            <p name ="Firstname" id ="fname"> FirstName:  {{{isset($firstname) ? $firstname: 'None'}}}</p>
            <p name ="lastname" id ="lname"> LastName:  {{{isset($lastName) ? $lastName: 'None'}}}</p>
            <p name ="uniqueID" id ="uniqueID"> UniqueID:  {{{isset($uniqueID) ? $uniqueID: 'None'}}}</p>
            <p name ="adress" id ="adress"> Address:  {{{isset($address) ? $address: 'None'}}}</p>
            <p name ="number" id ="number"> PhoneNumber:  {{{isset($number) ? $number: 'None'}}}</p>
            <p name ="year" id ="year"> Year:  {{{isset($year) ? $year: 'None'}}}</p>
            <p name ="infosystems" id ="infosystems"> Information Systems:  {{{isset($infosystems) ? $infosystems: 'None'}}}</p>
            <p name ="busanalytics" id ="busanalytics"> Business Analytics:  {{{isset($busanalytics) ? $busanalytics: 'None'}}}</p>
            <p name ="accounting" id ="accounting"> Accounting:  {{{isset($accounting) ? $accounting: 'None'}}}</p>
            <p name ="careertype" id ="careertype"> Career Type:  {{{isset($careerType) ? $careerType: 'None'}}}</p>
            <p name ="graddate" id ="gradedate"> Expected Graduation Date:  {{{isset($grad) ? $grad: 'None'}}}</p>
            <p name ="citizen" id ="citizen"> U.S. Citizenship:  {{{isset($citizen) ? $citizen: 'None'}}}</p>
            <p name ="gpa" id ="gpa"> GPA:  {{{isset($gpa) ? $gpa: 'None'}}}</p>
            <p name ="fileupload" id ="fileupload"> FILE UPLOADED:  {{{isset($fileToUpload) ? $fileToUpload: 'None'}}}</p>
            <p name ="statement" id ="statement"> Personal Statement:  {{{isset($statement) ? $statement: 'None'}}}</p>

            <br>
            <input type="submit" value="Submit" class="btn btn-primary" style="margin-bottom:10px">
        </form>

    </div>


@endsection