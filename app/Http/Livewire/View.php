<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Teacher as Teachers;

class View extends Component
{

    public $teacher;
    public function mount()
    {
        $this->teacher = Teachers::all();
    }
    public function render()
    {
        return view('livewire.view')->extends('layouts.app');
    }
}
