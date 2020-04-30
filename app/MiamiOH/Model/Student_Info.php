<?php

namespace App\MiamiOH\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student_Info extends Model
{
    protected $table = 'student_info';
    protected $primaryKey = 'uniqueid';

    public $incrementing = false;
    public $timestamps = false;

    public function completedCourses()
    {
        return $this->hasMany(CompletedCourses::class, 'uniqueID', 'uniqueid');
    }

    public function getscholarship()
    {
        return $this->hasOne(Scholarship::class, 'scholarship_id', 'scholarship_id');

    }
    public function winner()
    {
        return $this->hasOne(Winners::class, 'uniqueid', 'uniqueid');
    }
}
