<?php

namespace App\Http\Controllers\ISAScholarship;

use App\Http\Controllers\Controller;
use App\MiamiOH\Model\CompletedCourses;
use App\MiamiOH\Model\Scholarship;
use App\MiamiOH\Model\Student_Info;
use App\MiamiOH\Model\Winners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DataTables;

class ISAScholarshipController extends Controller
{
    public function index()
    {
        $messages = [];
        $appName = 'global.appName';
        return view('studentViews.index', compact('messages', 'appName'));
    }

    public function facultyIndex(Request $request)
    {
        $messages = [];
        $appName = 'global.appName';
        $students = new Student_Info();
        $studentCollection = $students->get();
        return view('facultyViews.index', compact('messages', 'appName', 'studentCollection'));
    }

    public function confirm(Request $request)
    {
        $courses = $request['CompleteCourse'];
        $DARGPA = $request['DARgpa'];
        $firstName = $request['fname'];
        $scholarship = $request['scholarship'];
        $lastName = $request['lname'];
        $uniqueID = $request['uniqueID'];
        $address = $request['address'];
        $number = $request['number'];
        $year = $request['year'];
        $majors = $this->getMajors($request['infosystems'], $request['busanalytics'],  $request['accounting']);
        $minors = $this->getMinors($request['infosystems'], $request['busanalytics'],  $request['accounting']);
        $careerType = $request['careerType'];
        $grad = $request['grad'];
        $citizen = $request['citizen'];
        $enteredgpa = $request['gpa'];
        $fileToUpload = $request['fileToUpload'];
        $statement = $request['statement'];
        $gpa = "";
        if ($enteredgpa != $DARGPA){
           $gpa = $DARGPA;
        } else{
            $gpa = $enteredgpa;
        }
        $messages = [];
        $appName = 'global.appName';
        return view('studentViews.confirm', compact('messages', 'appName',
            'firstName', 'lastName', 'uniqueID', 'address', 'number', 'year', 'minors',
            'majors', 'careerType', 'grad', 'citizen', 'gpa', 'fileToUpload',
            'statement', 'scholarship', 'courses'));
    }

    public function completedCourses($courses) {
        $courselist = explode(",", $courses);
        $courseAndGrade = [];
        foreach ($courselist as $course){
            $courseindex = strpos($course, " ");
            $coursename = substr($course, 0, $courseindex);
            $courseGrade = substr($course, $courseindex+1, strlen($course)-1);
            $courseAndGrade[$coursename] = $courseGrade;
        }
        return $courseAndGrade;
    }

    public function getMajors($info, $bus, $acc){
        $major = "";
        if(strpos($info, "major") !== false){
            $major .= "Information Systems";
        }
        if(strpos($bus, "major") !== false){
            $major .= "Business Analytics";
        }
        if(strpos($acc, "major") !== false){
            $major .= " Accounting";
        }

        return $major;

    }
    public function getMinors($info, $bus, $acc)
    {
        $minor = "";
        if(strpos($info, "minor") !== false){
            $minor .= "Information Systems";
        }
        if(strpos($bus, "minor") !== false){
            $minor .= " Business Analytics";
        }
        if(strpos($acc, "minor") !== false){
            $minor .= " Accounting";
        }
        return $minor;
    }

    public function addStudent(Request $request)
    {
        $messages = [];
        $appName = 'global.appName';
        $student = new Student_Info();
        Log::info("Adding Student");
        $student->uniqueid = $request['uniqueID'];
        $student->full_name = $request['fname'] . " ". $request['lname'];
        $student->campus_addr = $request['adress'];
        $student->phone_Num = $request['number'];
        $student->academicyear = $request['year'];
        $student->minors = $request['minors'];
        $student->majors = $request['major'];
        $student->career_type = $request['careertype'];
        $student->grad_date = $request['graddate'];
        $student->citzen = $request['citizen'];
        $student->gpa = $request['gpa'];
        $student->statement = $request['statement'];
        $student->recieved_scholarship = "Applied";
        $scholarship = Scholarship::where('name', $request['scholarship'])->get()->first();
        $student->scholarship_id = $scholarship->scholarship_id;
        $completedCourses = $this->completedCourses($request['CompleteCourses']);
        Log::info("Adding Courses");
        $this->addcompletedCourses($request['uniqueID'], $completedCourses);
        $student->save();
        $messages["Success"] = "Your application has been sent in!!";
        return view('studentViews.index', compact('messages', 'appName'));
    }

    public function addcompletedCourses($uniqueID, $completedCourses)
    {
        foreach ($completedCourses as $courses=>$grade) {
            $course = new CompletedCourses();
            $amount  = $course->get()->count();
            $course->courselistid = $amount + 1;
            $course->uniqueid = $uniqueID;
            if(strlen($courses) > 2){
                $course->course = $courses;
                $course->courseGrade = $grade;
            }
            $course->save();
        }
    }

    public function getStudentDetailed($uniqueid)
    {
        $messages = [];
        $appName = 'global.appName';
        $student =  Student_Info::where('uniqueid', $uniqueid)->get()->first();
        $completedcourses = CompletedCourses::where("uniqueID", $uniqueid)->get();
        return view('partials.detailed_student', compact('messages', 'appName', 'student', 'completedcourses'));
    }

    public function awardStudentScholarship($uniqueid){
        $messages = [];
        $appName = 'global.appName';
        $student =  Student_Info::where('uniqueid', $uniqueid)->get()->first();
        $student->recieved_scholarship = "Awarded";
        $student->save();
        $newWinner = new Winners();
        $amount  = $newWinner->get()->count();
        $newWinner->w_id = $amount + 1;
        $newWinner->uniqueid = $uniqueid;
        $newWinner->scholarship_id = $student->scholarship_id;
        $newWinner->year_won = date("Y");
        $messages['Success'] = $uniqueid . " Has Been Awarded The Scholarship";
        return view('facultyViews.index', compact('messages', 'appName', 'student'));
    }

    public function denyStudentScholarship($uniqueid){
        $messages = [];
        $appName = 'global.appName';
        $student =  Student_Info::where('uniqueid', $uniqueid)->get()->first();
        $student->recieved_scholarship = "Denied";
        $messages['Success'] = $uniqueid . " Has Been Denied The Scholarship";
        return view('facultyViews.index', compact('messages', 'appName', 'student'));
    }

    public function revertStudentScholarship($uniqueid){
        $messages = [];
        $appName = 'global.appName';
        $student =  Student_Info::where('uniqueid', $uniqueid)->get()->first();
        $student->recieved_scholarship = "Applied";
        $messages['Success'] = $uniqueid . " Has Been Reverted Back to Applied to The Scholarship";
        return view('facultyViews.index', compact('messages', 'appName', 'student'));
    }

}



































