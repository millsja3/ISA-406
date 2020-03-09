@extends('MiamiTheme::layouts.leftNavAndNoTopNav')
@section('title', 'ISA Scholarship')
@section('header', 'ISA Scholarship Form')
@section('logOut')
    <div class="col-3 text-right logout-button">
        <a href="{{ url('/logout') }}" style="margin-bottom:10px" class="btn btn-primary">{{ trans('global.logout') }}</a>
    </div>
@endsection
@section('content')
    <div>
        <form>
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
            <label>Please enter your current major(s) and minor(s) if they apply</label> <br>
            <label>Information Systems</label>
            <input type="radio" id="major" name="infosystems" value="major">
            <label for="major">Major</label>
            <input type="radio" id="minor" name="infosystems" value="minor">
            <label for="minor">Minor</label><br>
            <label>Business Analytics</label>
            <input type="radio" id="major" name="busanalytics" value="major">
            <label for="major">Major</label>
            <input type="radio" id="minor" name="busanalytics" value="minor">
            <label for="minor">Minor</label><br>
            <label>Accounting</label>
            <input type="radio" id="major" name="accounting" value="major">
            <label for="major">Major</label>
            <input type="radio" id="minor" name="accounting" value="minor">
            <label for="minor">Minor</label><br><br><br>


            <label>Please identify the type of career you are interested in consulting vs. non-consulting</label>
            <br>
            <input type="radio" id="consulting" name="careerType" value="consulting" required>
            <label for="consulting">Consulting</label>
            <input type="radio" id="nonconsulting" name="careerType" value="nonconsulting" required>
            <label for="nonconsulting">Non-consulting</label><br><br><br>

            <label for="grad">Anticipate Graduation Date:</label>
            <input type="date" id="grad" name="grad"> <br><br><br>
            <label>US Citizen?:</label>
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
            <textarea name="statement" id="personalStatment" cols="50" rows="4">Enter statement here...</textarea>
            <span id="wordcount"></span>

            <br>
            <input type="submit" value="Submit" class="btn btn-primary" style="margin-bottom:10px">
        </form>
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
    </script>
@endsection
