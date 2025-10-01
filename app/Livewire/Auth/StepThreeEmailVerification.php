<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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

        $registrationData = session()->get('registration', []);

        $user = User::create([
            'first_name' => $registrationData['first_name'] ?? null,
            'last_name' => $registrationData['last_name'] ?? null,
            'address' => $registrationData['address'] ?? null,
            'email' => $registrationData['email'],
            'password' => Hash::make($registrationData['password'] ?? ''),
            // optionally save 'terms' field if your users table has it
        ]);

         // Log the user in
        Auth::login($user);

        // Clear the temporary registration session
        session()->forget('registration');

        return redirect()->route('dashboard');
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
