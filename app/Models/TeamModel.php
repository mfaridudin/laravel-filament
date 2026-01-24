<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    protected $table = 'teams';

    protected $guarded = ['id'];

    public function members()
    {
        return $this->belongsToMany(User::class);
    }
}
