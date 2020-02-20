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

}
