<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginUser extends Component
{
    public function render()
    {
        return view('livewire.auth.login-user');
    }
    public $email, $password;

    public function login()
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            $this->addError('failed', __('auth.failed'));
            return null;
        }
        return redirect('dashboard');
    }
}