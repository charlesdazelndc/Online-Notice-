<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name','dept_full_name','faculty_id','description','dept_image'];

    public function Faculty(){
    	return $this->belongsTo(Faculty::class);
    }
}
