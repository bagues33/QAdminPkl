<x-guest-layout>
    <x-slot name="title">
        Register
    </x-slot>

    <h2 class="mt-5 text-center">Sistem Informasi Project Management</h2>

    <x-auth-card>
    
        {{-- show alert if there is errors --}}
        <x-alert-error/>

        <x-slot name="title">
            Register
        </x-slot>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name field -->
            <x-input type="text" text="Name" name="name" />

            <!-- Email field -->
            <x-input type="text" text="Email" name="email" />

            <x-input type="text" text="No HP" name="no_hp" />

            <!-- Password field -->
            <x-input type="password" text="Password" name="password" />

            <!-- Password confirmation field -->
            <x-input type="password" text="Password Confirmation" name="password_confirmation" />
            
            <x-button type="primary btn-block" text="Register" for="submit" />
        </form>
        <hr>
        <div class="text-center">
            <a class="font-weight-bold small" href="{{ route('login') }}">Already have an account?</a>
        </div>
    </x-auth-card>
</x-guest-layout>
