@extends('MiamiTheme::layouts.leftNavAndNoTopNav')
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
        @include('partials.table')
        <p>Please select how you would like to view the submitted applications</p>
        <form method="POST">
            <select required name="viewType" id="viewType" onchange='viewChanged()'>
                <option value="" disabled selected hidden>Choose a view method: </option>
                <option value="scholarship" >View By Scholarship</option>
                <option value="pastRecipients" >View Past Scholarship Recipients</option>
                <option value="specificApplication" >View a Specific Application</option>
            </select> <br><br><br>
            <div id='scholarshipView' hidden>
               <p><b>Select which Scholarship Applications you would like to view</b></p>
                <select required name="scholarship" id="scholarship" onchange='scholarshipSelected()'>
                    <option value="" disabled selected hidden>Choose A Scholarship: </option>
                    <option value="EY" >EY</option>
                    <option value="KPMG" >KPMG</option>
                    <option value="Worldplay" >Worldplay</option>
               </select>
               <p id='scholarshipApplication'></p>
            </div>
            <div id='pastRecipientsView' hidden>
                <p><b>Here are the students who have previously recieved ISA scholarships:</b></p>
                <p id='pastWinners'></p>
            </div>
            <div id='specificApplicationView' hidden>
                <p><b>Please enter the name of the student to view their detailed application: </b></p>
                <input type='text' name='studentName' id='studentName' onchange='nameEntered()'>
                <p id='matchingPeople'></p>
            </div>
        </form>

    </div>
@endsection

@section('javascript')
    <script>
        function viewChanged() {
            var selectedView = document.getElementById('viewType').value;
            console.log(selectedView);
            if (selectedView == 'scholarship') {
                document.getElementById('scholarshipView').style.display='block';
                document.getElementById('pastRecipientsView').style.display='none';
                document.getElementById('specificApplicationView').style.display='none';
            }
            else if(selectedView == 'pastRecipients') {
                document.getElementById('scholarshipView').style.display='none';
                document.getElementById('pastRecipientsView').style.display='block';
                document.getElementById('specificApplicationView').style.display='none';

                // display all of the students who have won a scholarship in the past
                // group by the specific scholarship and sort by year?
                // put in the paragraph with id of 'pastWinners'
            }
            else if (selectedView == 'specificApplication') {
                document.getElementById('scholarshipView').style.display='none';
                document.getElementById('pastRecipientsView').style.display='none';
                document.getElementById('specificApplicationView').style.display='block';
            }
        };

        function scholarshipSelected() {
            console.log("GOT HERE");
            var selectedScholarship = document.getElementById('scholarship').value;
            console.log(selectedScholarship);
            document.getElementById('scholarshipApplication').innerHTML = "Viewing applications for the " + selectedScholarship + " scholarship:\n";
            // select all of the students that applied for the specific scholarship
        };

        function nameEntered() {

            // if the input is empty, display all submitted scholarships for the current year
            // otherwise look for students whose name is similar to the entered value
            var userInput = document.getElementById('studentName').value;
            document.getElementById('matchingPeople').innerHTML = userInput;
        }

    </script>
@endsection
