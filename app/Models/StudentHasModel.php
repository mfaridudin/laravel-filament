<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentHasModel extends Model
{
    protected $table = 'student_has_class';

    protected $guarded = ['id'];

    protected $casts = [
        'students_id' => 'Array'
    ];

    public function teachers()
    {
        return $this->belongsTo(TeachersModel::class, 'teachers_id', 'id');
    }

    public function homeroom()
    {
        return $this->belongsTo(HomeRoomModel::class, 'homerooms_id', 'id');
    }

    public function students()
    {
        return $this->belongsTo(StudentsModel::class);
    }

}