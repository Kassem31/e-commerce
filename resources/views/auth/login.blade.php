@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Login</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="row">
            <div class="col-6 offset-3">
                <h2 class="h5 text-uppercase mb-4">{{ __('Login') }}</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-sm text-uppercase" for="username">{{ __('Username') }}</label>

                                <input class="form-control form-control-lg" name="username" id="username" type="text"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <label class="text-sm text-uppercase" for="password">{{ __('password') }}</label>

                                <input class="form-control form-control-lg" name="password" id="password" type="text"
                                    value="{{ old('password') }}" required autocomplete="password" autofocus>
                                @error('password')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 form-group mt-3">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="custom-control custom-checkbox text-sm" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>


                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                @if (Route::has('register'))
                                    <a class="btn btn-secondary float-right" href="{{ route('register') }}">
                                        {{ __("Don't have an account?") }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
