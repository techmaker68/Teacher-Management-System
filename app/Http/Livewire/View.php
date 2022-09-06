<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Teacher as Teachers;
use App\Models\ClassRoom;

class View extends Component
{

    public $teacher;
    public $teacher_id;
    public function mount()
    {
        $this->teacher = Teachers::all();
    }

    public function searchteacher()
    {
        $data =  ClassRoom::where('teacher_id', $this->teacher_id)->get();

        dd($data);
    }
    public function render()
    {
        return view('livewire.view')->extends('layouts.app');
    }
}
