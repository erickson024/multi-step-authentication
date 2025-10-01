<div>
    <p class="fs-6 fw-semibold">Password Setup</p>

    <form wire:submit.prevent="submit">
        <div class="row gx-3 mb-4">
            <div class="col-12 mb-3">
                <div class="form-floating">
                    <input type="password" class="form-control shadow-none" wire:model="password" placeholder="Password">
                    <label>password</label>
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <input type="password" class="form-control shadow-none" wire:model="password_confirmation" placeholder="Confirm Password">
                    <label>confirm password</label>
                     @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
        </div>

        <button
            type="button"
            class="btn btn-outline-dark"
            wire:click="goBack"
            wire:loading.attr="disabled"
            wire:target="goBack">
            <span wire:loading.remove wire:target="goBack">Back</span>

            <span wire:loading wire:target="goBack">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            </span>

        </button>

        <button
            type="submit"
            class="btn btn-dark"
            wire:loading.attr="disabled"
            wire:target="submit">
            <span wire:loading.remove wire:target="submit">Continue</span>

            <span wire:loading wire:target="submit">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            </span>
            
        </button>
    </form>
</div>