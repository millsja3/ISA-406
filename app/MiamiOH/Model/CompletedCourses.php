<?php

namespace App\MiamiOH\Model;

use Illuminate\Database\Eloquent\Model;

class CompletedCourses extends Model
{
    protected $table = 'completedcourses';
    protected $primaryKey = 'courselistid';

    public $incrementing = true;
    public $timestamps = false;
}
