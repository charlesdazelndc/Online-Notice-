<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicNotice extends Model
{
    protected $fillable =['id','title','title_slug','description','user_id','academic_session_id','notice_type_id','course_name_id','department_id','faculty_id','notice_image','notice_date','start_date','end_date','status'];
}
