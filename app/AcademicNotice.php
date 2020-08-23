<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicNotice extends Model
{
    protected $fillable =['id','title','title_slug','description','user_id','academic_session_id','notice_type_id','course_name_id','department_id','faculty_id','notice_image','notice_date','start_date','end_date','status'];




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

    public function NoticeType(){
     return $this->belongsTo(NoticeType::class);
    }

    public function User(){
    	return $this->belongsTo(User::class);
    }
}
