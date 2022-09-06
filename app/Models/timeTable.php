<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeTable extends Model
{
    use HasFactory;
    protected $fillable = ['teacher_id', 'class_id', 'subject_id', 'time', 'duration', 'duration', 'created_at', 'updated_at'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
