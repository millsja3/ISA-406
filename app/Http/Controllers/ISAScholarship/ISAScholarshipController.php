<?php

namespace App\Http\Controllers\ISAScholarship;

use App\Http\Controllers\Controller;
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
        $gpa = $request['gpa'];
        $fileToUpload = $request['fileToUpload'];
        $statement = $request['statement'];
        $messages = [];
        $appName = 'global.appName';
        return view('studentViews.confirm', compact('messages', 'appName',
            'firstName', 'lastName', 'uniqueID', 'address', 'number', 'year', 'infosystems',
            'busanalytics', 'accounting', 'careerType', 'grad', 'citizen', 'gpa', 'fileToUpload',
            'statement', 'scholarship'));
    }

    public function parseDARHTML(Request $request)
    {

    }

    public function addStudent(Request $request)
    {

        $messages = [];
        $appName = 'global.appName';
        return view('studentViews.applications', compact('messages', 'appName'));
    }

}
