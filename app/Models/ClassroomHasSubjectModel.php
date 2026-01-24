<?php

namespace App\Models;

use App\Models\SubjectsModel;
use App\Models\ClassroomsModel;
use Illuminate\Database\Eloquent\Model;

class ClassroomHasSubjectModel extends Model
{
    protected $guarded = [];

    protected $table = 'classroom_subject';

    public function subject()
    {
        return $this->belongsTo(SubjectsModel::class, 'subject_id', 'id');
    }

    public function class()
    {
        return $this->belongsTo(ClassroomsModel::class);
    }
}
