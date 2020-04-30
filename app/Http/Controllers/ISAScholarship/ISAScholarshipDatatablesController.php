<?php

namespace App\Http\Controllers\ISAScholarship;

use App\Http\Controllers\Controller;
use App\MiamiOH\Model\Student_Info;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use DataTables;

class ISAScholarshipDatatablesController extends Controller
{
    public function getStudents()
    {
        Log::info("Creating Datatable");
        $students = Student_Info::with('scholarship')->select('student_info.*');

        return Datatables::of($students)->addColumn('action', function ($student) {
            return '<a href="'.\url('/awardWinner/'.$student->uniqueid.'').'" class="btn btn-md btn-primary"> AwardWinner</a>';
        })->make();
    }

}
