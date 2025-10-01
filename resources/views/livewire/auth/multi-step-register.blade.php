<div>
    <div class="container vh-100 d-flex flex-column justify-content-center">
        <!-- Progress Lines -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5 mb-3">
                <div class="d-flex gap-2">
                    <div class="progress flex-grow-1" style="height: 2px;">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: 100%"></div>
                    </div>
                    <div class="progress flex-grow-1" style="height: 2px;">
                        <div class="progress-bar {{ $currentStep >= 2 ? 'bg-dark' : 'bg-secondary' }}" role="progressbar" 
                            style="width: 100%"></div>
                    </div>
                    <div class="progress flex-grow-1" style="height: 2px;">
                        <div class="progress-bar {{ $currentStep >= 3 ? 'bg-dark' : 'bg-secondary' }}" role="progressbar" 
                            style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                <div class="border p-4 rounded-4 shadow form-card">
                    @if($currentStep === 1)
                    <livewire:auth.step-one-personal-info />
                    @elseif($currentStep === 2)
                    <livewire:auth.step-two-password-setup />
                    @elseif($currentStep === 3)
                    <livewire:auth.step-three-email-verification />
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>