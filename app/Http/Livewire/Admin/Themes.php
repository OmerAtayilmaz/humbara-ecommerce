<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Themes extends Component
{
    public function toggleForm($status){
        session([
            'form'=>!session('form'),
            'status'=>$status
        ]);
    }
    public function render()
    {
        return view('livewire.admin.themes');
    }
}
