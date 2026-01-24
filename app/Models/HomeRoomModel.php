<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeRoomModel extends Model
{
    protected $table = 'home_rooms';

    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsTo(TeachersModel::class, 'teachers_id', 'id');
    }

    public function classroom()
    {
        return $this->belongsTo(ClassroomsModel::class, 'classrooms_id', 'id');
    }

    public function periode()
    {
        return $this->belongsTo(PeriodesModel::class, 'periode_id', 'id');
    }

    public function studentHasClasses()
    {
        return $this->hasMany(StudentHasModel::class, 'homerooms_id');
    }
}
