<div>
    <p class="fs-6 fw-semibold">Email and Terms</p>

    <form wire:submit.prevent="submit">
        <div class="row gx-3 mb-4">
            <div class="col-12 mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control shadow-none" wire:model="email" placeholder="Email">
                    <label>email</label>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input shadow-none" wire:model="terms">
                    <label>
                        I agree to the terms and conditions
                    </label>
                </div>
                @error('terms') <small class="text-danger">{{ $message }}</small> @enderror
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
            <span wire:loading.remove wire:target="submit">Create account</span>

            <span wire:loading wire:target="submit">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            </span>
            
        </button>

    </form>
</div>