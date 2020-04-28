<?php

namespace App\MiamiOH\Model;

use Illuminate\Database\Eloquent\Model;

class Winners extends Model
{
    protected $table = 'winners';
    protected $primaryKey = 'w_id';

    public $incrementing = true;
    public $timestamps = false;

}
