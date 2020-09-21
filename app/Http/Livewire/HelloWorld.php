<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $name = 'Silva';
    public $loud = 'false';
    public $greeting = ['Hello'];

    public function render()
    {
        return view('livewire.hello-world');
    }
    public function resetName(Request $request, $name='muema')
    {
        $this->name = $request->input('name',$name);

    }
}

