@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <div class="register-form">{{ __('Register') }}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Name"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert"><br>
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6"><br>
                                <input id="surname" type="text" placeholder="Surname"
                                    class="form-control @error('surname') is-invalid @enderror" name="surname"
                                    value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                <span class="invalid-feedback" role="alert"><br>
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6"><br>
                                <input id="email" type="email" placeholder="E-mail"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert"><br>
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <div class="gender-input">
                                <input id="gender" type="radio" checked
                                    class="form-control @error('gender') is-invalid @enderror" name="gender"
                                    value="Man"> Man
                                <input id="gender" type="radio"
                                    class="form-control @error('gender') is-invalid @enderror" name="gender"
                                    value="Woman"> Woman
                                @error('gender')
                                <span class="invalid-feedback" role="alert"><br>
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="date" type="date"
                                    class="form-control @error('date') is-invalid @enderror" name="date"
                                    value="{{ old('date') }}" autocomplete="date" value="Man">
                                @error('date')
                                <span class="invalid-feedback" role="alert"><br>
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password"><br>

                                @error('password')
                                <span class="invalid-feedback" role="alert"><br>
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row"><br>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm Password"
                                    class="form-control" name="password_confirmation" required
                                    autocomplete="new-password"><br>
                            </div>
                        </div>

                        <div class="form-group row mb-0"><br>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection