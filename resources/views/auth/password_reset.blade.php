@extends('layouts.app')
@section('content')
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{ asset('public/assets/img/media/Group7344.png') }}" class="login-side-img" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('public/assets/img/logo/logo.png') }}" class="login-logo" />
                </div>

                <div class="col-lg-12 col-md-12">
                    <form action="{{ route('password_reset_post') }}" method="post">
                        @csrf

                        <div class="mt-3 col-md-6" style="margin-left: 24%;">
                            @if (session('success_alert'))
                                <script type="text/javascript">
                                    $(window).on('load', function() {
                                        $('#alert_model').modal('show');
                                    });
                                </script>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif


                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <div class="login-div">

                            <div class="form-group">
                                <label>Identifiant</label>

                                <input id="email" type="email"
                                    class="form-control login-input @error('email') is-invalid @enderror" name="email"
                                    value="{{ $email }}" required autocomplete="email" readonly>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>



                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password"
                                    class="form-control login-input @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Confirm Password</label>

                                <input id="password" type="password"
                                    class="form-control login-input @error('password') is-invalid @enderror"
                                    name="password_confirmation" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3" style="display:none">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col text-center mt-4">
                                    <button type="submit" class="btn btn-lightblue px-4">
                                        Définir le mot de passe
                                    </button>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
                <script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>

                <!-- Bootstrap js-->
                <script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
                <script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>



            </div>

        </div>

    </div>
@endsection
