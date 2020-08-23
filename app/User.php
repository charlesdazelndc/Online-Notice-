<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;
    protected $fillable = [
        'full_name', 'email', 'password','role_id','whereHas','course_name_id','faculty_id','department_id','profile_image','telephone','email_verified_at',  'status','email_verified','email_verified_token',
    ];



    public function CourseName(){
        return $this->belongsTo(CourseName::class);
    }
    public function AcademicSession(){
        return $this->belongsTo(AcademicSession::class);
    }

    public function Faculty(){
        return $this->belongsTo(Faculty::class);
    }
    public function Department(){
    return $this->belongsTo(Department::class);
    }

    public function Role(){
        return $this->belongsTo(Role::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  function  IsAdmin(){
        return User::where('role_id',1)->where('id',Auth::user()->id)->first();
    }
}
