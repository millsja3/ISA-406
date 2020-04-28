<?php

namespace App\MiamiOH\Model;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $table = 'scholarship';
    protected $primaryKey = 'scholarship_id';

    public $incrementing = true;
    public $timestamps = false;
}
