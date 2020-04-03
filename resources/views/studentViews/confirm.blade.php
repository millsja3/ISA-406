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
        <form class="form" method="get" action="{{url('addStudent')}}">

            <p name ="scholarship" id ="scholarship"> <b> Scholarship Applied To: </b>  {{{isset($scholarship) ? $scholarship: 'None'}}}</p>
            <p name ="Firstname" id ="fname"> <b> FirstName:  </b> {{{isset($firstname) ? $firstname: 'None'}}}</p>
            <p name ="lastname" id ="lname"> <b> LastName: </b>  {{{isset($lastName) ? $lastName: 'None'}}}</p>
            <p name ="uniqueID" id ="uniqueID"> <b> UniqueID:  </b> {{{isset($uniqueID) ? $uniqueID: 'None'}}}</p>
            <p name ="adress" id ="adress">  <b> Address: </b>  {{{isset($address) ? $address: 'None'}}}</p>
            <p name ="number" id ="number">  <b> PhoneNumber: </b>  {{{isset($number) ? $number: 'None'}}}</p>
            <p name ="year" id ="year">  <b> Year: </b>  {{{isset($year) ? $year: 'None'}}}</p>
            <p name ="infosystems" id ="infosystems">  <b> Information Systems: </b>  {{{isset($infosystems) ? $infosystems: 'None'}}}</p>
            <p name ="busanalytics" id ="busanalytics">  <b> Business Analytics: </b>  {{{isset($busanalytics) ? $busanalytics: 'None'}}}</p>
            <p name ="accounting" id ="accounting">  <b> Accounting:</b>   {{{isset($accounting) ? $accounting: 'None'}}}</p>
            <p name ="careertype" id ="careertype">  <b> Career Type: </b>  {{{isset($careerType) ? $careerType: 'None'}}}</p>
            <p name ="graddate" id ="gradedate">  <b> Expected Graduation Date: </b>  {{{isset($grad) ? $grad: 'None'}}}</p>
            <p name ="citizen" id ="citizen">  <b> U.S. Citizenship: </b>  {{{isset($citizen) ? $citizen: 'None'}}}</p>
            <p name ="gpa" id ="gpa">  <b> GPA:</b> {{{isset($gpa) ? $gpa: 'None'}}}</p>
            <p name ="fileupload" id ="fileupload"> <b> FILE UPLOADED: </b>  {{{isset($fileToUpload) ? $fileToUpload: 'None'}}}</p>
            <p name ="statement" id ="statement">  <b> Personal Statement:  </b> {{{isset($statement) ? $statement: 'None'}}}</p>
            <br>

            <?php
                // if (isset($fileToUpload)) {
                //     echo "I reached here";
                //     $target_dir = "uploads/";
                //     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                //     if(isset($_POST["submit"])) {
                //         echo $target_file;
                //     }
                // }
                    //echo $_FILES[0]["name"];
                    //$_FILES[$fileToUpload]["name"]
                    // foreach($_FILES as $file) {
                    //     echo $file["name"];
                    // }
                     //$name = isset($fileToUpload);
                    //  $target_dir = "uploads/";
                    //  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    //  $uploadOk = 1;
                    //  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    //  $dom = new DOMDocument;
                    //  $dom->loadHTMLFile($target_file);
                
                    // $courses = $dom->getElementsByClassName('completedCourses');
                    // // $dar = file_get_html($name);
                    // foreach($courses as $element) {
                    //     echo $element->find('course') + ", " + $element->find('grade') + '\n';
                    // }
//                     $myfile = fopen($name, "r") or die("Unable to open file!");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);
                //}
            ?>

            <input type="submit" value="Confirm" class="btn btn-success" style="margin-bottom:10px">
        </form>

    </div>


@endsection
