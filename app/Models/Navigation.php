<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $fillable = ['label', 'url', 'parent_id', 'order'];

    public function children()
    {
        return $this->hasMany(Navigation::class, 'parent_id')->orderBy('order');
    }

    public function parent()
    {
        return $this->belongsTo(Navigation::class, 'parent_id');
    }
}
