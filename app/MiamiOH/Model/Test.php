<?php

namespace App\MiamiOH\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'test_id';

    public $incrementing = false;
    public $timestamps = false;

    public function getFirstRecord(String $str)
    {
        return $this::where('test_id', $str);
    }

}
