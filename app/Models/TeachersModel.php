<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachersModel extends Model
{
    protected $table = 'teachers';

    protected $guarded = ['id'];

    public function classroom()
    {
        return $this->hasMany(HomeRoomModel::class, 'teachers_id', 'id');
    }
}
