<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adjacency extends Model
{
    protected $fillable = ['name', 'parent_id'];

    protected $casts = [
        'parent_id' => 'array',
    ];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    // helper tree select
    public static function treeOptions($parentId = null, $prefix = '')
    {
        return self::where('parent_id', $parentId)
            ->orderBy('name')
            ->get()
            ->flatMap(function ($item) use ($prefix) {
                return [
                    $item->id => $prefix.$item->name,
                ] + self::treeOptions($item->id, $prefix.'— ');
            })
            ->toArray();
    }
}
