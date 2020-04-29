<?php

namespace App\Http\Controllers\ISAScholarship;

use App\Http\Controllers\Controller;
use App\MiamiOH\Model\Test;
use Illuminate\Http\Request;

class ISAScholarshipController extends Controller
{
    public function index()
    {
        $messages = [];
        $appName = 'global.appName';
        return view('studentViews.index', compact('messages', 'appName'));
    }

    public function Facultyindex()
    {
        $messages = [];
        $appName = 'global.appName';
        return view('facultyViews.index', compact('messages', 'appName'));
    }

    public function confirm(Request $request)
    {
        $test = new Test();
        dd($test->getFirstRecord(1234567890));
        $courses = $request['CompleteCourse'];
        $completedCourses = $this->completedCourses($courses);
        $DARGPA = $request['DARgpa'];
        $firstName = $request['fname'];
        $scholarship = $request['scholarship'];
        $lastName = $request['lname'];
        $uniqueID = $request['uniqueID'];
        $address = $request['address'];
        $number = $request['number'];
        $year = $request['year'];
        $infosystems = $request['infosystems'];
        $busanalytics = $request['busanalytics'];
        $accounting = $request['accounting'];
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
            'firstName', 'lastName', 'uniqueID', 'address', 'number', 'year', 'infosystems',
            'busanalytics', 'accounting', 'careerType', 'grad', 'citizen', 'gpa', 'fileToUpload',
            'statement', 'scholarship', 'completedCourses'));
    }

    public function completedCourses($courses): array
    {
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

    public function addStudent(Request $request)
    {

        $messages = [];
        $appName = 'global.appName';

        return view('studentViews.applications', compact('messages', 'appName'));
    }


}



































