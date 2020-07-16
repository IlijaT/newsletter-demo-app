<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $casts = [
        'date' => 'datetime'
    ];

    public function getStatusAttribute()
    {
        return $this->date->greaterThan(Carbon::now()) ? 'Active' : 'Sent';
    }
}
