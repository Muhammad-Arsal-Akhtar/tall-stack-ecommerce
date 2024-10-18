<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        if (auth()->user()->role == 1) 
        {    
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
        } else {
            $this->redirect(route('home', absolute: false), navigate: true);
        }

    }
}; ?>


<div class="bg-gray-50 font-[sans-serif]">
        <div class="flex flex-col items-center justify-center min-h-screen px-4 py-6">
          <div class="w-full max-w-md">
            {{-- <a href="javascript:void(0)"><img
              src="https://readymadeui.com/readymadeui.svg" alt="logo" class='block w-40 mx-auto mb-8' />
            </a> --}}
  
            <div class="p-8 bg-white shadow rounded-2xl">
              <h2 class="text-2xl font-bold text-center text-gray-800">Sign in</h2>
                  <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
              <form class="mt-8 space-y-4" wire:submit="login">
                <div>
                  <x-input-label for="email" :value="__('Email')" class="block mb-2 text-sm text-gray-800" />
                  <div class="relative flex items-center">
                    <x-text-input wire:model="form.email" id="email" class="w-full px-4 py-3 text-sm text-gray-800 border border-gray-300 rounded-md outline-teal-600" type="email" name="email" required autofocus autocomplete="username" placeholder="Enter user email"  />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="absolute w-4 h-4 right-4" viewBox="0 0 24 24">
                      <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                      <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                    </svg>
                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                  </div>
                </div>

                <div>
                  <x-input-label for="password" :value="__('Password')" class="block mb-2 text-sm text-gray-800"  />
                  <div class="relative flex items-center">
                    <x-text-input wire:model="form.password" id="password" class="w-full px-4 py-3 text-sm text-gray-800 border border-gray-300 rounded-md outline-teal-600"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" placeholder="Enter password" />
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="absolute w-4 h-4 cursor-pointer right-4" viewBox="0 0 128 128">
                      <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                    </svg>
                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                  </div>
                </div>
  
                <div class="flex flex-wrap items-center justify-between gap-4">
                  <div class="flex items-center">
                    <input wire:model="form.remember" id="remember" name="remember" type="checkbox" class="w-4 h-4 text-teal-600 border-gray-300 rounded shrink-0 focus:ring-teal-500" />
                    <label for="remember" class="block ml-3 text-sm text-gray-800">
                      Remember me
                    </label>
                  </div>

                  <div class="text-sm">
                    @if (Route::has('password.request'))
                    <a wire:navigate href="{{ route('password.request') }}" class="font-semibold text-teal-600 hover:underline">
                      Forgot your password?
                    </a>
                    @endif
                  </div>
                </div>
  
                <div class="!mt-8">
                  <button type="submit" class="w-full px-4 py-3 text-sm tracking-wide text-white bg-teal-600 rounded-lg hover:bg-teal-700 focus:outline-none">
                    Log in
                  </button>
                </div>
                
                <p class="text-gray-800 text-sm !mt-8 text-center">Don't have an account? <a wire:navigate href="{{route('register')}}" class="ml-1 font-semibold text-teal-600 hover:underline whitespace-nowrap">Register here</a></p>
              </form>
            </div>
          </div>
        </div>
</div>
