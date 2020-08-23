<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   protected $fillable = ['role_name'];
   public function Users(){
   	return $this->hasMany(User::classs);
   }
}
