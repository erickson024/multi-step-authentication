<div>
    <h4>Step 1: Personal Information</h4>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="first_name" placeholder="First Name" >
        @error('first_name') <small >{{ $message }}</small> @enderror

        <input type="text" wire:model="last_name" placeholder="Last Name" >
        @error('last_name') <small >{{ $message }}</small> @enderror

        <input type="text" wire:model="address" placeholder="Address" >
        @error('address') <small >{{ $message }}</small> @enderror

        <button type="submit" >Next</button>
    </form>
</div>
