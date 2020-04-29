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

    public function completedCourses(): HasMany
    {
        return $this->hasMany(CompletedCourses::class, 'uniqueid', 'uniqueid');
    }

    public function getscholarship(): HasOne
    {
        return $this->hasOne(Scholarship::class, 'scholarship_id', 'scholarship_id');

    }
    public function winner(): HasOne
    {
        return $this->hasOne(Winners::class, 'uniqueid', 'uniqueid');
    }
}
