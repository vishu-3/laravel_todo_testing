<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    public function student()
    {
    	return $this->belongsTo(Student::class);
    }
}
