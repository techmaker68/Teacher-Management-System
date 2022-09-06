<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subject as Sbjct;

class Subject extends Component
{

    public $subject;
    public $name;
    public $description;



    public function mount()
    {

        $this->subject = Sbjct::all();
    }

    public function CreateSubject()
    {
        $data = $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        Sbjct::create($data);
        session()->flash('message', 'Subject created  successfully .');
    }
    public function render()
    {
        return view('livewire.subject')->extends('layouts.app');
    }
}
