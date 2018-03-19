<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
	protected $table = 'subjects';
    protected $fillable = ['subject','lec_unit','lab_unit','subject_unit'];
    
    //or
  //  protected $guarded = [];
}