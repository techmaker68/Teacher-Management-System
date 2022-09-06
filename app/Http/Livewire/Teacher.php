<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Teacher as Teachers;

class Teacher extends Component
{

    public $teacher;
    public $name;
    public $email;
    public $address;

    public function mount()
    {
        $this->teacher = Teachers::all();
    }

    public function CreateTeacher()
    {

        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',

        ]);
        Teachers::create($data);
        session()->flash('message', 'Teacher created  successfully .');
    }
    public function render()
    {
        return view('livewire.teacher')->extends('layouts.app');
    }
}
