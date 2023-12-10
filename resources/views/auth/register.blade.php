@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Register</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="row">
            <div class="col-6 offset-3">
                <h2 class="h5 text-uppercase mb-4">{{ __('Register') }}</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-sm text-uppercase" for="first_name">{{ __('First name') }}</label>

                                <input class="form-control form-control-lg" name="first_name" id="first_name" type="text"
                                    value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-sm text-uppercase" for="last_name">{{ __('Last name') }}</label>

                                <input class="form-control form-control-lg" name="last_name" id="last_name" type="text"
                                    value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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

                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-sm text-uppercase" for="email">{{ __('email') }}</label>

                                <input class="form-control form-control-lg" name="email" id="email" type="text"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-sm text-uppercase" for="mobile">{{ __('mobile') }}</label>

                                <input class="form-control form-control-lg" name="mobile" id="mobile" type="text"
                                    value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                                @error('mobile')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-sm text-uppercase" for="password">{{ __('Password') }}</label>

                                <input class="form-control form-control-lg" name="password" id="password" type="text"
                                    value="{{ old('password') }}" required autocomplete="password" autofocus>
                                @error('password')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-sm text-uppercase"
                                    for="password_confirmation">{{ __('Confirm Password') }}</label>

                                <input class="form-control form-control-lg" name="password_confirmation"
                                    id="password_confirmation" type="text" value="{{ old('password_confirmation') }}"
                                    required autocomplete="password_confirmation" autofocus>
                                @error('password_confirmation')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Register') }}
                                </button>

                                @if (Route::has('login'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Already have an account?') }}
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
