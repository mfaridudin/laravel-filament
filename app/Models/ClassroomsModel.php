<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassroomsModel extends Model
{
    protected $table = 'classrooms';

    protected $guarded = ['id'];

    public function homeroom()
    {
        return $this->hasMany(HomeRoomModel::class, 'classrooms_id', 'id');
    }

    public function subjects()
    {
        return $this->belongsToMany(
            SubjectsModel::class,
            'classroom_subject',
            'classroom_id',
            'subject_id'
        )->withPivot('description');
    }

    public function students()
    {
        return $this->belongsToMany(StudentsModel::class, 'student_has_class', 'homerooms_id', 'students_id');
    }

    public function homerooms()
    {
        return $this->hasMany(HomeRoomModel::class);
    }
}
