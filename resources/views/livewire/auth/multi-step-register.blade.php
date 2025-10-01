<div class="container p-4">
    <h2>Multi-Step Authentication</h2>

    @if($currentStep === 1)
    <livewire:auth.step-one-personal-info />
    @elseif($currentStep === 2)
    <livewire:auth.step-two-password-setup />
    @elseif($currentStep === 3)
    <livewire:auth.step-three-email-verification />
    @endif
</div>