<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class MultiStepRegister extends Component
{
    
    public $currentStep = 1;

    protected $listeners = [
        'goToStep' => 'setStep'
    ];

    public function setStep($step)
    {
      $this->currentStep = $step;
    }

    public function render()
    {
        return view('livewire.auth.multi-step-register');
    }
}
