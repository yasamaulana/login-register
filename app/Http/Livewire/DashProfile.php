<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashProfile extends Component
{
    protected $listeners = ['updated' => 'render'];

    public function render()
    {
        return view('livewire.dash-profile', [
            'image' => Auth::user()->profile,
        ]);
    }
}