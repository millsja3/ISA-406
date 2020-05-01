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
<body>
    <script>
        var masterUser ="admin013";
        var masterPass ="FSBscholarshipadmin";
        var valid = false;
        function validateUser() {
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
                document.getElementById('notApproved').style.display ='none';
                document.getElementById('approved').style.display ='block';
                console.log(document.getElementById('approved').style.display);
                console.log(document.getElementById('notApproved').style.display);
                valid = true;
            }
        };
    </script>
    <div id='reviewContent'>
        <h1>ISA Scholarship Application Reviews</h1>
        @include('partials.messages')
        <div id='notApproved'>
            <p>Please log in to the admin account to view the scholarship applications.</p>
                Username: <input type='text' id='username'>
                Password: <input type='password' id='password'>
                <button type='button' onclick="validateUser()">Login</button>
        </div>
        <div id='approved' hidden>
            <p>Search for a student by typing their name, the scholarship name, GPA, and application status. 
            Note application status will say applied for recent applications, approved if the student recieved 
            the scholarship, or denied.</p>
            @include('partials.table')
        </div>
    </div>
</body>
@endsection
