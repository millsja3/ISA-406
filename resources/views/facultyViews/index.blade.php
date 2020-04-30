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
    <div id='reviewContent'>
        <h1>ISA Scholarship Application Reviews</h1>
<<<<<<< Updated upstream
        <p>Please select how you would like to view the submitted applications</p>
        <form id='formid'>
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
=======
        @include('partials.messages')
        <div id='notApproved'>
            <p>Please log in to the admin account to view the scholarship applications.</p>
            Username: <input type='text' id='username'>
            Password: <input type='password' id='password'>
            <button type='button' onclick='validateForm()'>Login</button>
        </div>
        <div id='approved' hidden>
            <p>Please select how you would like to view the submitted applications</p>
            <form>
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
                        <option value="Worldpay" >Worldplay</option>
                </select>
                <p id='scholarshipApplication'></p>
                @include('partials.table')
                </div>
                <div id='pastRecipientsView' hidden>
                    <p><b>Here are the students who have previously recieved ISA scholarships:</b></p>
                    @include('partials.table')
                </div>
                <div id='specificApplicationView' hidden>
                    <p><b>Please enter the name of the student to view their detailed application: </b></p>
                    <input type='text' name='studentName' id='studentName' onchange='nameEntered()'>
                    <p id='matchingPeople'></p>
                </div>
            </form>
        </div>
>>>>>>> Stashed changes
    </div>
@endsection

@section('javascript')
    <script>
        var masterUser ="admin013";
        var masterPass ="FSBscholarshipadmin";
        var valid = false;
        function validateForm() {
            var enteredUser = document.getElementById('username').value;
            var enteredPass= document.getElementById('password').value;
            console.log(enteredUser);
            console.log(enteredPass);
            console.log(enteredUser == masterUser);
            console.log(enteredPass==masterPass);
            if (enteredUser != masterUser && masterPass !=enteredPass) {
                alert("Incorrect username or password! You will not be able to view the applications");
            }
            else {
                console.log("got to hide area");
<<<<<<< Updated upstream
                document.getElementById('username').style.diplay='none';
                document.getElementById('password').style.diplay='none';
                document.getElementById('login_text').style.diplay='none';
                document.getElementById('login_button').style.diplay='none';
=======
                document.getElementById('notApproved').style.display ='none';
                document.getElementById('approved').style.display ='block';
                console.log(document.getElementById('approved').style.display);
                console.log(document.getElementById('notApproved').style.display);
>>>>>>> Stashed changes
                valid = true;
            }
        };

<<<<<<< Updated upstream
        // function formValidated() {
        //     return valid;
        //     location.load();
        // };

        // function refreshDivs() {
        //     var isValid =$_SESSION['valid'];
        //     if (isValid) {
        //         document.getElementById('username').style.diplay='none';
        //         document.getElementById('password').style.diplay='none';
        //         document.getElementById('login_text').style.diplay='none';
        //         document.getElementById('login_button').style.diplay='none';
        //     }
        // };
=======
>>>>>>> Stashed changes
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
