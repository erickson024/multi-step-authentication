<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class StepOnePersonalInfo extends Component
{
    public $first_name, $last_name, $address;

    protected $rules = [
        'first_name' => 'required|string|max:50',
        'last_name'  => 'required|string|max:50',
        'address'    => 'required|string|max:255',
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'address' => $this->address,
        ]);
        
        session()->put('registration', $registrationData);
        
        $this->dispatch('goToStep', 2);
    }


    public function render()
    {
        return view('livewire.auth.step-one-personal-info');
    }
}


