<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentHasClassModel extends Model
{
    protected $table = 'student_has_class';

    protected $guarded = ['id'];

    public function classrooms()
    {
        return $this->belongsTo(ClassroomsModel::class, 'classrooms_id', 'id');
    }

    public function periode(){
        return $this->belongsTo(PeriodesModel::class);
    }
}
