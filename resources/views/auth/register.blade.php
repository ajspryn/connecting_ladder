{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layout.auth.main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-5 d-none d-lg-block">
            <div class="login-welcome">
                <div>
                    <img src="../assets/images/login/charcter.png" class="img-fluid blur-up lazyload"
                        alt="charcter">
                    <h1>Welcome friend!</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-10 col-12 m-auto">
            <div class="login-form">
                <div>
                    <div class="login-title">
                        <h2>Register</h2>
                    </div>
                    <div class="login-discription">
                        <h3>Hello Everyone</h3>
                        <h4>Welcome to Friendbook, create your account below to start usinf friendbook.</h4>
                    </div>
                    <div class="form-sec">
                        <div>
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form class="theme-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus>
                                    <i class="input-icon iw-20 ih-20" data-feather="user"></i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" :value="old('email')" required>
                                    <i class="input-icon iw-20 ih-20" data-feather="mail"></i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required autocomplete="new-password">
                                    <i class="input-icon iw-20 ih-20" data-feather="eye"></i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_confirmation" required>
                                    <i class="input-icon iw-20 ih-20" data-feather="eye"></i>
                                </div>
                                <input type="hidden" name="role" value="0">
                                <div class="btn-section">
                                    <button action="submit" class="btn btn-solid btn-lg">sign up</button>
                                </div>
                                <div class="bottom-sec mt-3">
                                    <div class="form-check checkbox_animated">
                                        <a href="{{ route('login') }}" class="ms-auto forget-password">Login</a>
                                    </div>
                                </div>
                            </form>
                            <div class="connect-with">
                                <h6><span>Daftar Dengan</span></h6>
                                <ul class="social-links">
                                    <li class="google">
                                        <a href="auth/user/google">
                                            <svg class="">
                                                <use xlink:href="../assets/svg/icons.svg#google"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
