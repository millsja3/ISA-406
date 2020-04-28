<?php

namespace App\MiamiOH\Model;

use Illuminate\Database\Eloquent\Model;

class Student_Info extends Model
{
    protected $table = 'student_info';
    protected $primaryKey = 'uniqueid';

    public $incrementing = false;
    public $timestamps = false;
}
