<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentHasClassModel extends Model
{
    protected $table = 'student_has_class';

    protected $guarded = ['id'];

    public function classroom()
    {
        return $this->belongsTo(
            ClassroomsModel::class,
            'classrooms_id',
            'id'
        );
    }

    // protected $casts = [
    //     'students_id' => 'Array',
    // ];

    public function periode()
    {
        return $this->belongsTo(
            PeriodesModel::class,
            'periode_id',
            'id'
        );
    }

    public function student()
    {
        return $this->belongsTo(
            StudentsModel::class,
            'students_id',
            'id'
        );
    }
}
