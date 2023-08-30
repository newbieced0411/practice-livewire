<?php

namespace App\Http\Livewire;

use App\Models\User;
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
            'form.password_confirmation' => 'required',
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
            'form.password_confirmation' => 'required',
        ], [], [
            'form.name' => 'name',
            'form.email' => 'email',
            'form.password' => 'password',
            'form.password_confirmation' => 'password confirmation',
        ]);

        User::create($this->form);
        session()->flash('success', 'Comment created successfully');
        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.register');
    }
}
