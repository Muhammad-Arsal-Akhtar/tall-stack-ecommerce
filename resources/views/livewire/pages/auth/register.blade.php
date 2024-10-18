<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component 
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        if ($user->role == 1) {
        // Admin user
        $this->redirect(route('dashboard', absolute: false), navigate: true);
        } else {
            // Non-admin user
            $this->redirect(route('home', absolute: false), navigate: true);
        }
    }
}; ?>

<div class="flex flex-col justify-center font-[sans-serif] sm:h-screen p-4">
    <div class="w-full max-w-md p-8 mx-auto border border-gray-300 rounded-2xl">
        {{-- <div class="mb-12 text-center">
        <a href="javascript:void(0)"><img
            src="https://readymadeui.com/readymadeui.svg" alt="logo" class='inline-block w-40' />
        </a>
        </div> --}}

        <form wire:submit="register">
            <div class="space-y-6">
                <div>
                    <x-input-label for="name" :value="__('Name')" class="block mb-2 text-sm text-gray-800" />
                    <x-text-input wire:model="name" id="name"
                        class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-teal-500"
                        type="text" name="name" required autofocus autocomplete="name"
                        placeholder="Enter user name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="email" :value="__('Email')" class="block mb-2 text-sm text-gray-800" />
                    <x-text-input wire:model="email" id="email"
                        class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-teal-500"
                        placeholder="Enter email" type="email" name="email" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>

                    <x-input-label for="password" :value="__('Password')" class="block mb-2 text-sm text-gray-800" />
                    <x-text-input wire:model="password" id="password" class="block w-full mt-1" type="password"
                        name="password" required autocomplete="new-password"
                        class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-teal-500"
                        placeholder="Enter password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div>

                    <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                        class="block mb-2 text-sm text-gray-800" />

                    <x-text-input wire:model="password_confirmation" id="password_confirmation"
                        class="w-full px-4 py-3 text-sm text-gray-800 bg-white border border-gray-300 rounded-md outline-teal-500"
                        placeholder="Enter confirm password" type="password" name="password_confirmation" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            <div class="!mt-12">
                <button type="submit"
                    class="w-full px-4 py-3 text-sm font-semibold tracking-wider text-white bg-teal-600 rounded-md hover:bg-teal-700 focus:outline-none">
                    Create an account
                </button>
            </div>
            <p class="mt-6 text-sm text-center text-gray-800">Already have an account? <a wire:navigate
                    href="{{ route('login') }}" class="ml-1 font-semibold text-teal-600 hover:underline">Login here</a>
            </p>

        </form>
    </div>
</div>
