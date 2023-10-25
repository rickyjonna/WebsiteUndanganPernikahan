<?php

namespace App\Livewire;

use Livewire\Component;

class Cover extends Component
{
    public $name = "";

    public $link = "";

    public function render()
    {
        return view('livewire.cover');
    }

    public function getLink(){
        $name = $this->name;
        $this->link = 'http://127.0.0.1:8000/' . $name;
        $this->reset('name');
    }
}
