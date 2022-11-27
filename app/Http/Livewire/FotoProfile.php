<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FotoProfile extends Component
{
    use WithFileUploads;
    public $photo, $data;

    protected $listeners = [
        'updated' => 'render'
    ];

    public function render()
    {
        return view('livewire.foto-profile', [
            'foto' => Auth::user()->profile,
        ]);
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function none()
    {
        $this->photo = null;
    }

    public function upload()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
        if (Auth::user()->profile) {
            Storage::delete('public/profile/' . Auth::user()->profile);
        }

        $foto = mt_rand(100000000, 999999999);
        $this->photo->storeAs('public/profile/', $foto);
        $model = User::find(Auth::user()->id);
        $model->profile = $foto;
        $model->update();

        $this->emit('updated');

        $this->none();

        session()->flash('message', 'Berhasil mengganti foto profile');
    }
}