<?php

namespace App\MiamiOH\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Scholarship extends Model
{
    protected $table = 'scholarship';
    protected $primaryKey = 'scholarship_id';

    public $incrementing = true;
    public $timestamps = false;


    public function winner(): HasOne
    {
        return $this->hasOne(Winners::class, 'scholarship_id', 'scholarship_id');
    }
}
