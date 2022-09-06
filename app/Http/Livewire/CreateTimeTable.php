<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\ClassRoom;
use App\Models\timeTable;

class CreateTimeTable extends Component
{

    public $class_id;
    public $teacher_id;
    public $subject_id;
    public $time;
    public $duration;


    public $classes = '';
    public $teachers = '';
    public $subjects = '';

    public function mount()
    {
        $this->subjects =     Subject::all();
        $this->teachers =     Teacher::all();

        $this->class =     ClassRoom::all();
    }

    public function  CreateTimeSlot()
    {

        $data = $this->validate([
            'teacher_id' => 'required',
            'subject_id' => 'required',
            'class_id' => 'required',
            'time' => 'required',
            'duration' => 'required',
        ]);
        timeTable::create($data);

        session()->flash('message', 'time table created  successfully .');
    }

    public function render()
    {
        return view('livewire.create-time-table')->extends('layouts.app');
    }
}
