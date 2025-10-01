<div>
    <p class="fs-6 fw-semibold">Personal Information</p>

    <form wire:submit.prevent="submit">
        <div class="row gap-3 mb-3">
            <div class="col-12">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control shadow-sm "
                        wire:model="first_name"
                        placeholder="firstname">
                    <label>Firstname</label>
                     @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror

                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control shadow-sm "
                        wire:model="last_name"
                        placeholder="lastname">
                    <label>Lastname</label>
                    @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control shadow-sm "
                        wire:model="address"
                        placeholder="Address">
                    <label>Address</label>
                    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

        </div>


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

</div>