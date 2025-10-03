<div>
    <p class="fs-6 fw-semibold">Password Setup</p>

    <form wire:submit.prevent="submit">
        <div class="row gx-3 mb-4">
            <div class="col-12 mb-3">
                <div class="form-floating position-relative">
                    <input
                        type="password"
                        class="form-control shadow-none"
                        wire:model.live="password"
                        placeholder="Password"
                        id="password"
                        required>
                    <label>Password</label>

                    <button
                        type="button"
                        class="btn btn-sm btn-link position-absolute top-50 end-0 translate-middle-y me-2 text-secondary"
                        onclick="togglePassword('password', this)"
                        tabindex="-1">
                        <i class="bi bi-eye"></i>
                    </button>

                    <div class="progress rounded mt-2" style="height: 3px;">
                        <div class="progress-bar 
                                    @if($strengthScore < 2) bg-danger 
                                    @elseif($strengthScore < 4) bg-warning 
                                    @else bg-success 
                                    @endif"
                            role="progressbar"
                            style="width: {{ ($strengthScore/5) * 100 }}%">
                        </div>
                    </div>

                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating position-relative">
                    <input type="password"  id="confirmPassword" class="form-control shadow-none" wire:model="password_confirmation" placeholder="Confirm Password" required>
                    <label>Confirm Password</label>

                    <button
                        type="button"
                        class="btn btn-sm btn-link position-absolute top-50 end-0 translate-middle-y me-2 text-secondary"
                        onclick="togglePassword('confirmPassword', this)"
                        tabindex="-1">
                        <i class="bi bi-eye"></i>
                    </button>

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

