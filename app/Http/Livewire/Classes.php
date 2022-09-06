<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ClassRoom;

class Classes extends Component
{

    public $classes;
    public $class_name;


    public function mount()
    {
        $this->classes = ClassRoom::all();
    }

    public function CreateTeacher()
    {

        $data = $this->validate([
            'class_name' => 'required',
        ]);
        ClassRoom::create($data);
        session()->flash('message', 'Class created  successfully .');
    }
    public function render()
    {
        return view('livewire.classes')->extends('layouts.app');
    }
}
