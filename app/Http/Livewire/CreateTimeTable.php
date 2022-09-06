<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\ClassRoom;

class CreateTimeTable extends Component
{

    public $class_name;
    public $teacher_name;
    public $subject_name;


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
            'teacher_name' => 'required'
        ]);

        dd($this->teacher_name);
    }

    public function render()
    {
        return view('livewire.create-time-table')->extends('layouts.app');
    }
}
