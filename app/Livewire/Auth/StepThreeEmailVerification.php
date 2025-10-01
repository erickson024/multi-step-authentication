<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class StepThreeEmailVerification extends Component
{
    public $email;
    public $terms = false;

    protected $rules = [
        'email' => 'required|email|max:255',
        'terms' => 'accepted', // must be checked
    ];

    public function mount()
    {
        $registrationData = session()->get('registration', []);

        $this->email = $registrationData['email'] ?? '';
        $this->terms = $registrationData['terms'] ?? false;
    }

    public function submit()
    {
        $this->validate();
        $this->saveToSession();

        return redirect()->route('register.success');
    }

    public function goBack()
    {
        // ✅ Save data even when going back
        $this->saveToSession();

        $this->dispatch('goToStep', 2);
    }

    private function saveToSession()
    {
        $registrationData = session()->get('registration', []);
        $registrationData = array_merge($registrationData, [
            'email' => $this->email,
            'terms' => $this->terms,
        ]);

        session()->put('registration', $registrationData);
    }

    public function render()
    {
        return view('livewire.auth.step-three-email-verification');
    }
}
