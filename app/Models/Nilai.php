<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\Nilais\NilaiResource;

class Nilai extends Model
{
    protected $table = 'nilais';

    protected $guarded = ['id'];


    public function class()
    {
        return $this->belongsTo(ClassroomsModel::class, 'class_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(StudentsModel::class);
    }

    public function periode()
    {
        return $this->belongsTo(PeriodesModel::class, 'periode_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(SubjectsModel::class);
    }

    public function category_nilai()
    {
        return $this->belongsTo(CategoryNilaisModel::class, 'category_nilai_id', 'id');
    }
}
