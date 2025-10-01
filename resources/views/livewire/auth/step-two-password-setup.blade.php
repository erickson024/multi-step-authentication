<div>
    <h4>Step 2: Password Setup</h4>
    <form wire:submit.prevent="submit">
        <input type="password" wire:model="password" placeholder="Password">
        @error('password') <small>{{ $message }}</small> @enderror

        <input type="password" wire:model="password_confirmation" placeholder="Confirm Password">

        <button type="submit">Next</button>
        <button type="button" wire:click="goBack">Back</button>
    </form>
</div>

