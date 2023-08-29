<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $form = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
    ];

    // real time validation
    public function updated($field)
    {
        $this->validateOnly($field, [
            'form.name' => 'required',
            'form.email' => 'required|email',
            'form.password' => 'required|confirmed',
            'form.password_confirmation' => 'required|same:password',
        ], [], [
            'form.name' => 'name',
            'form.email' => 'email',
            'form.password' => 'password',
            'form.password_confirmation' => 'password confirmation',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'form.name' => 'required',
            'form.email' => 'required|email',
            'form.password' => 'required|confirmed',
            'form.password_confirmation' => 'required|same:password',
        ], [], [
            'form.name' => 'name',
            'form.email' => 'email',
            'form.password' => 'password',
            'form.password_confirmation' => 'password confirmation',
        ]);
    }

    public function render()
    {
        return view('livewire.register');
    }
}
