<?php

namespace App\MiamiOH\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Winners extends Model
{
    protected $table = 'winners';
    protected $primaryKey = 'w_id';

    public $incrementing = true;
    public $timestamps = false;


    public function winner(): HasOne
    {
        return $this->hasOne(Winners::class, 'uniqueid', 'uniqueid');
    }
}
