@extends('MiamiTheme::layouts.leftNavAndNoTopNav')
@section('content')
    <h2> {{$student->full_name}} Detailed View: </h2>
    <div class="panel panel-content">
        <form class="form" method="POST" action="{{url('')}}">
            @csrf
            <p name ="scholarship" id ="scholarship"> <b> Scholarship Applied To: </b>  {{{isset($student->getscholarship()->get()->first()->name) ? $student->getscholarship()->get()->first()->name: 'None'}}}</p>
            <input type="text" name="scholarship" id=scholarship"" value="{{{isset($student->getscholarship()->get()->first()->name) ? $student->getscholarship()->get()->first()->name: 'None'}}}" hidden>

            <p name ="Firstname" id ="name"> <b> Students Name:  </b> {{{isset($student->full_name) ? $student->full_name: 'None'}}}</p>
            <input type="text" name="name" id=name"" value="{{{isset($student->full_name) ? $student->full_name: 'None'}}}" hidden>


            <p name ="uniqueID" id ="uniqueID"> <b> UniqueID:  </b> {{{isset($student->uniqueid) ? $student->uniqueid: 'None'}}}</p>
            <input type="text" name="uniqueID" id=uniqueID"" value="{{{isset($student->uniqueid) ? $student->uniqueid: 'None'}}}" hidden>

            <p name ="adress" id ="adress">  <b> Address: </b>  {{{isset($student->campus_addr) ? $student->campus_addr: 'None'}}}</p>
            <input type="text" name="adress" id=adress"" value="{{{isset($student->campus_addr) ? $student->campus_addr: 'None'}}}" hidden>

            <p name ="number" id ="number">  <b> PhoneNumber: </b>  {{{isset($student->phone_Num) ? $student->phone_Num: 'None'}}}</p>
            <input type="text" name="number" id=number"" value="{{{isset($student->phone_Num) ? $student->phone_Num: 'None'}}}" hidden>

            <p name ="year" id ="year">  <b> Year: </b>  {{{isset($student->academicyear) ? $student->academicyear: 'None'}}}</p>
            <input type="text" name="year" id=year"" value="{{{isset($student->academicyear) ? $student->academicyear: 'None'}}}" hidden>

            <p name ="major" id ="major">  <b> Majors: </b>  {{{isset($student->majors) ? $student->majors: 'None'}}}</p>
            <input type="text" name="major" id=major"" value="{{{isset($student->majors) ? $student->majors: 'None'}}}" hidden>

            <p name ="minors" id ="minors">  <b> Minors: </b>  {{{isset($student->$minors) ? $student->$minors: 'None'}}}</p>
            <input type="text" name="minors" id=minors"" value="{{{isset($student->$minors) ? $student->$minors: 'None'}}}" hidden>

            <p name ="careertype" id ="careertype">  <b> Career Type: </b>  {{{isset($student->career_type) ? $student->career_type: 'None'}}}</p>
            <input type="text" name="careertype" id=careertype"" value="{{{isset($student->career_type) ? $student->career_type: 'None'}}}" hidden>

            <p name ="graddate" id ="gradedate">  <b> Expected Graduation Date: </b>  {{{isset($student->grad_date) ? $student->grad_date: 'None'}}}</p>
            <input type="text" name="graddate" id=graddate"" value="{{{isset($student->grad_date) ? $student->grad_date: 'None'}}}" hidden>

            <p name ="citizen" id ="citizen">  <b> U.S. Citizenship: </b>  {{{isset($student->citizen) ? $student->citizen: 'None'}}}</p>
            <input type="text" name="citizen" id=citizen"" value="{{{isset($student->citizen) ? $student->citizen: 'None'}}}" hidden>

            <p name ="gpa" id ="gpa">  <b> GPA:</b> {{{isset($student->gpa) ? $student->gpa: 'None'}}}</p>
            <input type="text" name="gpa" id=gpa"" value="{{{isset($student->gpa) ? $student->gpa: 'None'}}}" hidden>

            <p name ="statement" id ="statement">  <b> Personal Statement:  </b> {{{isset($student->statement) ? $student->statement: 'None'}}}</p>
            <input type="text" name="statement" id=statement"" value="{{{isset($student->statement) ? $student->statement: 'None'}}}" hidden>

            <p name ="reciveScholarship" id ="reciveScholarship">  <b> Recieve Scholarship:  </b> {{{isset($student->statement) ? $student->statement: 'None'}}}</p>
            <input type="text" name="reciveScholarship" id=reciveScholarship"" value="{{{isset($student->statement) ? $student->statement: 'None'}}}" hidden>
            <label><b>Completed Courses:</b></label>
            <table cellspacing="0" class="table table-miami display compact" id="AliasTable" role="grid"
                   style="word-break: break-all" width="100%">
                <thead>
                <tr>
                    <th>Course</th>
                    <th>Course Grade</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($completedCourses))
            @foreach($completedcourses as $course)
                <tr>
                    <td>{{$course->course}}</td>
                    <td>{{$course->courseGrade}}</td>
                </tr>
                @endforeach
                    @else
                    <tr>
                        <td>No Courses Reported</td>
                        <td>No Grade Reported</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Accept" class="btn btn-success" style="margin-bottom:10px">
                    </div>
                    <div class="col">
                        <input type="submit" value="Deny" class="btn btn-danger" style="margin-bottom:10px">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
