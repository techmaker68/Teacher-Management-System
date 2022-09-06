<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Teacher as Teachers;
use App\Models\TimeTable;

class View extends Component
{

    public $teacher;
    public $teacherData;
    public $teacher_id;
    public $timetables='';
    public function mount()
    {
        $this->teacher = Teachers::all();
    }

    public function searchteacher()

    {
       $this->teacherData=Teachers::find($this->teacher_id)->first();
        $this->timetables =  TimeTable::with(['teacher','class','subject'])->where('teacher_id', $this->teacher_id)->get();
   
    }
    public function render()
    {
        return view('livewire.view')->extends('layouts.app');
    }
}
