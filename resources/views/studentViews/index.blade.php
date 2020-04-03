@extends('MiamiTheme::layouts.noNav')
@section('title', 'ISA Scholarship')
@section('header', 'ISA Scholarship Form')
@section('logOut')
    <div class="col-3 text-right logout-button">
        <a href="{{ url('/logout') }}" style="margin-bottom:10px" class="btn btn-primary">{{ trans('global.logout') }}</a>
    </div>
@endsection
@section('content')
    <h1> Information Systems and Analytics Scholarships </h1>
    <p>The ISA department awards multiple departmental and corporate scholarships to ISA (IS or BA) majors and minors every
        year. To be considered, you must be a non-graduating Major or Minor in an ISA program, have at least a 2.9 GPA, and
        submit a completed application. These scholarships are available to first and second year students or rising seniors. Some
        of the corporate scholarships have additional requirements as detailed below. In your application (you must specify
        which type of these you are interested in):
    </p>
    <br>
    <ul>
        <li>
            Worldpay (formerly Vantiv) provides two $5000 scholarships to ISA majors in either Information Systems or Analytics. You
            must be a returning sophomore, junior, or senior a minimum 3.2 GPA is preferred.
        </li>
        <li>
            EY provides two $5000 scholarship pools.  One pool will fund one to five ISA specific scholarships with preference given to
            students with a career interest in working for a public accounting firm, while the other is open to students from any
            Analytics program with preference given to students associated with the Center for Analytics and Data Science. 
            Applicants for both pools must be rising sophomores, juniors, or seniors, have a GPA of 3.2 or higher.
        </li>
        <li>
            KPMG provides $3000 to fund one to three scholarships for rising sophomores, juniors, or seniors. Students with an ISA
            and ACC combination are preferred, but this is not required. A 3.2 GPA is preferred along with interest in exploring a
            career in technology focused work at a Big 4 firm.
        </li>
    </ul>
    <br>
    <p>
        AWARD CRITERIA: Combinations of Academic Merit, Activities Beyond the Classroom, Areas of Interests, and Financial
        Need. You may only be considered for one.
    </p>

    <h2>Fill in the following information to APPLY:</h2>
    <div class="panel panel-content">
        <form class="form" method="post" action="{{url('confirm')}}" enctype="multipart/form-data">
            <div>
                <br>
                <label>Select a Scholarship: </label>
                <select required name="scholarship" id="scholarship">
                    <option value="" disabled selected hidden>Choose A Scholarship: </option>
                    <option value="EY" >EY</option>
                    <option value="KPMG" >KPMG</option>
                    <option value="Worldplay" >Worldplay</option>
                </select>
                <br> <br>
            </div>
            <div>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required>
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required>
                <label for="uniqueID">UniqueID:</label>
                <input type="text" id="uniqueID" name="uniqueID" required>
                <br>
            </div><br>

            <label for="address">Current Miami University Address:</label>
            <input type="text" id="address" name="address" required>
            <br><br>
            <label for="number">What is Your Phone Number?:</label>
            <input type="text" id="number" name="number" required>
            <br><br>
            <label>Current Year:</label>
            <input type="radio" id="freshman" name="year" value="freshman" required>
            <label for="freshman">Freshman</label>
            <input type="radio" id="sophomore" name="year" value="sophomore" required>
            <label for="sophomore">Sophomore</label>
            <input type="radio" id="junior" name="year" value="junior" required>
            <label for="junior">Junior</label>
            <input type="radio" id="senior" name="year" value="senior" required>
            <label for="senior">Senior</label>
            <br><br>
            <label>Please enter your current major(s) and minor(s) if they apply:</label> <br>
            <label>Information Systems: </label>
            <input type="radio" id="major" name="infosystems" value="major">
            <label for="major">Major</label>
            <input type="radio" id="minor" name="infosystems" value="minor">
            <label for="minor">Minor</label><br>
            <label>Business Analytics: </label>
            <input type="radio" id="major" name="busanalytics" value="major">
            <label for="major">Major</label>
            <input type="radio" id="minor" name="busanalytics" value="minor">
            <label for="minor">Minor</label><br>
            <label>Accounting: </label>
            <input type="radio" id="major" name="accounting" value="major">
            <label for="major">Major</label>
            <input type="radio" id="minor" name="accounting" value="minor">
            <label for="minor">Minor</label><br><br><br>


            <label>Please identify the type of career you are interested in consulting vs. non-consulting: </label>
            <br>
            <input type="radio" id="consulting" name="careerType" value="consulting" required>
            <label for="consulting">Consulting</label>
            <input type="radio" id="nonconsulting" name="careerType" value="nonconsulting" required>
            <label for="nonconsulting">Non-consulting</label><br><br><br>

            <label for="grad">Anticipate Graduation Date:</label>
            <input type="date" id="grad" name="grad"> <br><br><br>
            <label>US Citizen? :</label>
            <input type="radio" id="yes" name="citizen" value="yes" required>
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="citizen" value="no" required>
            <label for="no">No</label><br><br><br>
            <label for="gpa">GPA (on a 4.0 scale):</label>
            <input type="text" id="gpa" name="gpa"  required> <br><br><br>

            <label>To download your ran DARS as an HTML file, navigate to the DAR window and expand all dropdowns. Then press control s to save the file, ensuring that it is a .html file type</label>
            <br> <br>
            <label for="fileToUpload" > Please upload an HTML export of your DARS:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required> <br>
            <label>Please write a statement of purpose that includes all of the following if applicable (less than 500 words)</label>
            <ul>
                <li>Your career goals</li>
                <li>Activities beyond the classroom</li>
                <li>The industries in which you are most interested, especially public accounting roles if you are applying to the EY scholarship</li>
                <li>A short description of how you would use any funds received</li>
            </ul>
            <br> <br>
            <textarea name="statement" id="personalStatment" cols="50" rows="4" placeholder="Enter statement here..."></textarea>
            <span id="wordcount"></span>

            <br>
            <input type="submit" value="Submit" class="btn btn-primary" style="margin-bottom:10px">
        </form>
        <div id="test"></div>
    </div>
@endsection

@section('javascript')
    <script>
        var myTextareaElement = document.getElementById("personalStatment");
        myTextareaElement.onkeyup = function wordcount(wor) {

            var myText = this.value.trim();
            var wordsArray = myText.split(/\s+/g);
            var words = wordsArray.length;

            document.getElementById("wordcount").innerHTML = words;
        };
        const document_input = document.getElementById('fileToUpload');
        document_input.addEventListener("change", handleFiles, false);
        function handleFiles() {
            const reader = new FileReader();  
            const file = this.files[0];
            console.log(file.name);
            reader.onload = function(e) {

                // Get the completed courses
                var output = e.target.result;
                output = output.split("div class=\"reqTitle\"");
                var output1 = output[27].split("table class=\"completedCourses\"");
                document.getElementById('test').innerHTML += "<p>Completed Courses: </p>";
                document.getElementById('test').innerHTML += "<ul>";
                for (i = 1; i < output1.length; i++) {
                    var out= output1[i].split("tr class=\"takenCourse \"");
                    // This extracts all of the completed courses and their respective grades
                    for (idx=1; idx < out.length; idx++) {
                        var courseIndex=out[idx].indexOf("course");
                        // Hardcoded for now because of another course in the last one of each section that fails
                        var courseName = out[idx].substring(courseIndex+28, courseIndex+34); 
                        var gradeIndex = out[idx].lastIndexOf("grade");
                        var courseGrade = out[idx].substring(gradeIndex+7, gradeIndex+10);
                        console.log(out[idx]);
                        console.log(courseIndex + " " + courseName);
                        console.log(gradeIndex + " " + courseGrade);
                        var result = courseName + " " + courseGrade;
                        document.getElementById('test').innerHTML += "<li>" + result + "</li>";
                    }
                    document.getElementById('test').innerHTML +=  "</ul>";
                }

                // Verify the entered GPA
                var gpaoutput = e.target.result;
                gpaoutput = gpaoutput.split("\<div class=\"includeBottomText preformatted\"\>");
                var indexCumulativeGPA = gpaoutput[1].indexOf("OVERALL"); // Find the start of the overall GPA line
                var stringStartOverall = gpaoutput[1].substring(indexCumulativeGPA); // start the string here now
                stringStartOverall = stringStartOverall.split("\n"); // Split on new lines
                stringStartOverall = stringStartOverall[0]; // Get only the first line 
                var indexColon = stringStartOverall.indexOf(":"); // Find the colon (the start of the numbers)
                stringStartOverall = stringStartOverall.substring(indexColon+1).trim(); // reassign the string to start there
                var nums = stringStartOverall.split(" "); 
                console.log(nums.length);
                var GPA = nums[19]; // 20 divisions in the split
                document.getElementById('test').innerHTML +=  "Overall GPA From DARS: " + GPA; 
            }
            reader.readAsText(file);
        };

    </script>
@endsection
