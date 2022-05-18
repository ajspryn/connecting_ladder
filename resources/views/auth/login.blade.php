{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
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
                    <img src="../assets/images/login/charcter.png" class="img-fluid blur-up lazyload" alt="charcter">
                    <h1>Welcome Back!</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-10 col-12 m-auto">
            <div class="login-form">
                <div>
                    <div class="login-title">
                        <h2>Login</h2>
                    </div>
                    <div class="login-discription">
                        <h3>Hello Everyone, Welcome Back</h3>
                        <h4>Welcome to Friendbook, please login to your account.
                        </h4>
                    </div>
                    <div class="form-sec">
                        <div>
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form class="theme-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" :value="old('email')" required autofocus>
                                    <i class="input-icon iw-20 ih-20" data-feather="user"></i>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required autocomplete="current-password">
                                    <i class="input-icon iw-20 ih-20" data-feather="eye"></i>
                                    <!-- <i class="input-icon" data-feather="eye-off" width="20" height="20"></i> -->
                                </div>
                                <div class="bottom-sec">
                                    <div class="form-check checkbox_animated">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                        <label class="form-check-label" for="exampleCheck1">remember me</label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="ms-auto forget-password">forget password?</a>
                                </div>
                                <div class="btn-section">
                                    <button action="submit" class="btn btn-solid btn-lg mx-auto">login</button>
                                </div>
                                <div class="bottom-sec mt-5">
                                    <div class="form-check checkbox_animated">
                                        <a href="{{ route('register') }}" class="ms-auto forget-password">Belum punya akun? <i>Ayo Daftar</i></a>
                                    </div>
                                </div>
                                </form>
                                <div class="connect-with">
                                    <h6><span>Masuk Dengan</span></h6>
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
</div>
@endsection
