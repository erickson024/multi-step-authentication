<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class StepTwoPasswordSetup extends Component
{
    public $password;
    public $password_confirmation;
    public $strengthScore = 0;

    protected $rules = [
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password',
    ];

    public function updatedPassword($value)
    {
        $this->checkStrength($value);
    }
    private function checkStrength($password)
    {
        $score = 0;

        if (strlen($password) >= 8) $score++;
        if (preg_match('/[A-Z]/', $password)) $score++;
        if (preg_match('/[a-z]/', $password)) $score++;
        if (preg_match('/[0-9]/', $password)) $score++;
        if (preg_match('/[@$!%*#?&]/', $password)) $score++;

        $this->strengthScore = $score;
    }

    public function mount()
    {
        $this->fill(session()->get('registration', []));

        // if password already exists in session, recalc strength
        if (!empty($this->password)) {
            $this->checkStrength($this->password);
        }
    }

    public function submit()
    {
        $this->validate();


        if ($this->strengthScore < 3) {
            $this->addError('password', 'Password is too weak. Please make it stronger.');
            return;
        }

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
        $registrationData = session()->get('registration', []);
        $registrationData = array_merge($registrationData, [
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ]);

        session()->put('registration', $registrationData);

        $this->dispatch('goToStep', 1);
    }

    public function render()
    {
        return view('livewire.auth.step-two-password-setup');
    }
}
