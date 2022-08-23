@extends('layouts.app')
@section('content')
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="assets/img/media/Group7344.png" class="login-side-img" />
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <img src="{{ asset('public/assets/img/logo/logo.png') }}" class="login-logo" />
                </div>

                <div class="col-lg-12 col-md-12">
                    <form action="{{ route('auth') }}" method="post">
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
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                        Se connecter
                                    </button>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col text-center mt-4">

                                    <a class="btn btn-link blue-anchor mt-3 text-block" data-toggle="modal"
                                        data-target="#forget_password">
                                        Envoyer
                                    </a>

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

                <div class="container">
                    <!-- Trigger the modal with a button -->


                    <!-- Modal -->
                    <div class="modal fade view-formation-modal" id="alert_model" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content" style="">
                                <div class="modal-header pb-0" style="margin:0 auto;">
                                    <h5 class="modal-title text-blue" style="text-align: center">Alerte RGPD</h5>

                                </div>
                                <div class="modal-body">
                                    <div class="Panel">
                                        <div class="Panel__body">
                                            <p>
                                                Attention : Traitement de données à caractère personnel (DCP) : Par le biais
                                                de cette application vous traitez des données à caractère personnel. Ainsi
                                                conformément à la loi Informatique et Libertés du 6 janvier 1978 et au
                                                règlement européen sur la protection des données personnelles, il est
                                                primordial de prendre toutes les précautions utiles pour protéger la
                                                sécurité et la confidentialité des informations auxquelles vous avez accès,
                                                et notamment : ne pas utiliser les données auxquelles vous pouvez accéder à
                                                des fins autres que celles prévues par vos attributions ou encore empêcher
                                                qu'elles ne soient communiquées à des personnes non expressément autorisées
                                                à recevoir ces informations.
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12 col-sm-12 text-center mb-5">
                                    <a class="btn btn-lightblue" style="border-radius: 30px !important; line-height: 25px;" href="{{ route('dashboard') }}">Valider</a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="modal fade view-formation-modal" id="forget_password" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="margin-top:35%">
                        <div class="modal-header pb-0">
                            <h5 class="modal-title" style="text-align: center;">Renitialiser le mot de passe</h5>
                        </div>
                        <form action="{{ route('recover_pw_post') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="Panel">
                                    <div class="Panel__body">

                                        <p>
                                            Entrez votre email pour recevoir le lien pour reinitialiser le mot de passe
                                        </p>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Enter email">

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 col-sm-12 text-center mb-5">
                                <button class="btn btn-lightblue btn-lightgreen" type="submit">Envoyer</button>
                                <span class="btn btn-light btn-lightgreen" data-dismiss="modal"
                                    aria-label="Close">Annuler</span>

                            </div>
                        </form>

                    </div>

                </div>
            </div>


        </div>

    </div>

    </div>
@endsection
