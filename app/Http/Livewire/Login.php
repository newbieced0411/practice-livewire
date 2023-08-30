<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $form = [
        'email' => '',
        'password' => '',
    ];

    // real time validation
    public function updated($field)
    {
        $this->validateOnly($field, [
            'form.name' => 'required',
            'form.email' => 'required|email',
            'form.password' => 'required',
        ], [], [
            'form.email' => 'email',
            'form.password' => 'password',
        ]);
    }

    public function login()
    {
        $this->validate([
            'form.email' => 'required',
            'form.password' => 'required',
        ], [], [
            'form.email' => 'email',
            'form.password' => 'password',
        ]);

        Auth::attempt($this->form);
        return redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.login');
    }
}
