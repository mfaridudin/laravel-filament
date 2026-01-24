<?php

namespace App\Models;

use App\Models\ClassroomsModel;
use Illuminate\Database\Eloquent\Model;

class SubjectsModel extends Model
{
    protected $table = 'subjects';

    protected $guarded = ['id'];

    public function classroomsModels()
    {
        return $this->belongsToMany(
            ClassroomsModel::class,
            'classroom_subject',
            'subject_id',
            'classroom_id'
        );
    }

    public function nilais(){
        return $this->hasMany(Nilai::class, 'subject_id', 'id');
    }
}
