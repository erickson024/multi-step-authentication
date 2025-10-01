<div>
    <form wire:submit.prevent="submit">
        <input type="email" wire:model="email" placeholder="Email" class="form-control mb-2">
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror

        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" id="terms" wire:model="terms">
            <label class="form-check-label" for="terms">
                I agree to the terms and conditions
            </label>
        </div>
        @error('terms') <small class="text-danger">{{ $message }}</small> @enderror

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Finish</button>
            <button type="button" wire:click="goBack" class="btn btn-secondary">Back</button>
        </div>
    </form>
</div>
