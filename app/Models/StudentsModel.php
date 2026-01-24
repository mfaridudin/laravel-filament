<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentsModel extends Model
{
    protected $table = 'students';

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function studentHasClasses()
    {
        return $this->hasMany(StudentHasModel::class, 'students_id');
    }

    public function homerooms()
    {
        return $this->hasManyThrough(
            HomeRoomModel::class,
            StudentHasModel::class,
            'students_id',
            'id',
            'id',
            'homerooms_id'   
        );
    }
}
