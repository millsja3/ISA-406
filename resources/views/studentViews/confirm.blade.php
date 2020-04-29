@extends('MiamiTheme::layouts.noNav')
@section('title', 'ISA Scholarship')
@section('header', 'Information Systems and Analytics Scholarship Form')
@section('logOut')
    <div class="col-3 text-right logout-button">
        <a href="{{ url('/logout') }}" style="margin-bottom:10px" class="btn btn-primary">{{ trans('global.logout') }}</a>
    </div>
@endsection

@section('content')

    <h2> Confirm the following: </h2>
    <div class="panel panel-content">
        <form class="form" method="POST" action="{{url('addStudent')}}">
            @csrf
            <p name ="scholarship" id ="scholarship"> <b> Scholarship Applied To: </b>  {{{isset($scholarship) ? $scholarship: 'None'}}}</p>
            <input type="text" name="scholarship" id=scholarship"" value="{{{isset($scholarship) ? $scholarship: 'None'}}}" hidden>

            <p name ="Firstname" id ="fname"> <b> FirstName:  </b> {{{isset($firstname) ? $firstname: 'None'}}}</p>
            <input type="text" name="fname" id=fname"" value="{{{isset($firstname) ? $firstname: 'None'}}}" hidden>

            <p name ="lastname" id ="lname"> <b> LastName: </b>  {{{isset($lastName) ? $lastName: 'None'}}}</p>
            <input type="text" name="lname" id=lname"" value="{{{isset($lastName) ? $lastName: 'None'}}}" hidden>

            <p name ="uniqueID" id ="uniqueID"> <b> UniqueID:  </b> {{{isset($uniqueID) ? $uniqueID: 'None'}}}</p>
            <input type="text" name="uniqueID" id=uniqueID"" value="{{{isset($uniqueID) ? $uniqueID: 'None'}}}" hidden>

            <p name ="adress" id ="adress">  <b> Address: </b>  {{{isset($address) ? $address: 'None'}}}</p>
            <input type="text" name="adress" id=adress"" value="{{{isset($address) ? $address: 'None'}}}" hidden>

            <p name ="number" id ="number">  <b> PhoneNumber: </b>  {{{isset($number) ? $number: 'None'}}}</p>
            <input type="text" name="number" id=number"" value="{{{isset($number) ? $number: 'None'}}}" hidden>

            <p name ="year" id ="year">  <b> Year: </b>  {{{isset($year) ? $year: 'None'}}}</p>
            <input type="text" name="year" id=year"" value="{{{isset($year) ? $year: 'None'}}}" hidden>

            <p name ="infosystems" id ="infosystems">  <b> Information Systems: </b>  {{{isset($infosystems) ? $infosystems: 'None'}}}</p>
            <input type="text" name="infosystems" id=infosystems"" value="{{{isset($infosystems) ? $infosystems: 'None'}}}" hidden>

            <p name ="busanalytics" id ="busanalytics">  <b> Business Analytics: </b>  {{{isset($busanalytics) ? $busanalytics: 'None'}}}</p>
            <input type="text" name="busanalytics" id=busanalytics"" value="{{{isset($busanalytics) ? $busanalytics: 'None'}}}" hidden>

            <p name ="accounting" id ="accounting">  <b> Accounting:</b>   {{{isset($accounting) ? $accounting: 'None'}}}</p>
            <input type="text" name="busanalytics" id=busanalytics"" value="{{{isset($busanalytics) ? $busanalytics: 'None'}}}" hidden>

            <p name ="careertype" id ="careertype">  <b> Career Type: </b>  {{{isset($careerType) ? $careerType: 'None'}}}</p>
            <input type="text" name="careertype" id=careertype"" value="{{{isset($careerType) ? $careerType: 'None'}}}" hidden>

            <p name ="graddate" id ="gradedate">  <b> Expected Graduation Date: </b>  {{{isset($grad) ? $grad: 'None'}}}</p>
            <input type="text" name="graddate" id=graddate"" value="{{{isset($grad) ? $grad: 'None'}}}" hidden>

            <p name ="citizen" id ="citizen">  <b> U.S. Citizenship: </b>  {{{isset($citizen) ? $citizen: 'None'}}}</p>
            <input type="text" name="citizen" id=citizen"" value="{{{isset($citizen) ? $citizen: 'None'}}}" hidden>

            <p name ="gpa" id ="gpa">  <b> GPA:</b> {{{isset($gpa) ? $gpa: 'None'}}}</p>
            <input type="text" name="gpa" id=gpa"" value="{{{isset($gpa) ? $gpa: 'None'}}}" hidden>

            <p name ="statement" id ="statement">  <b> Personal Statement:  </b> {{{isset($statement) ? $statement: 'None'}}}</p>
            <input type="text" name="statement" id=statement"" value="{{{isset($statement) ? $statement: 'None'}}}" hidden>

            <p name ="CompleteCourses" id ="CompleteCourses">  <b> Completed Courses :  </b> {{{isset($completeCourses) ? $completeCourses: 'None'}}}</p>
            <input type="text" name="CompleteCourses" id=CompleteCourses"" value="{{{isset($completeCourses) ? $completeCourses: 'None'}}}" hidden>

            <br>
            <input type="submit" value="Confirm" class="btn btn-success" style="margin-bottom:10px">
        </form>
    </div>


@endsection
