<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{

    protected $guarded = [];
    use HasFactory;

    public function timeTable()
    {
        return $this->hasMany(timeTable::class);
    }
}
