<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class StepTwoPasswordSetup extends Component
{
    public $password;
    public $password_confirmation;

    protected $rules = [
        'password' => 'required|min:8|confirmed'
    ];

    public function mount()
    {
        $this->fill(session()->get('registration', []));
    }

    public function submit()
    {
        $this->validate();

        $registrationData = session()->get('registration', []);
        $registrationData = array_merge($registrationData, [
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ]);

        session()->put('registration', $registrationData);

        $this->dispatch('goToStep', 3);
    }
    public function goBack()
    {
        $this->dispatch('goToStep', 1);
    }

    public function render()
    {
        return view('livewire.auth.step-two-password-setup');
    }
}
