<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{


    public $search;
    protected $queryString = ['search' => ['except' => '']];

    public function render()
    {
        return view('livewire.counter');
    }
}
