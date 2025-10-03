<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Livewire Multi-Step Authentication

My application uses a **multi-step authentication system** to improve user experience and security. Instead of a single sign-up form, the registration process is split into multiple steps:

### Steps Overview
1. **Personal Information**
   - User provides: First Name, Last Name, and Address.
   - Data is validated before moving to the next step.

2. **Password Setup**
   - User sets their account password.
   - Passwords are validated for strength and confirmed.

3. **Email Verification & Terms Acceptance**
   - User verifies their email via a verification link.
   - User accepts the Terms of Service and Privacy Policy.

### Implementation
- Built using **Laravel Livewire**, allowing a smooth, interactive step-by-step registration.
- Each step is handled as a separate Livewire component.
- Data is temporarily stored until the process is complete, preventing partial registration.
- Final account creation occurs only after all steps are successfully completed.

### Benefits
- Cleaner user experience.
- Reduces form errors.
- Ensures important steps (like email verification) are not skipped.

