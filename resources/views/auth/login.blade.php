@extends('layouts.auth')

@section('section')
<!-- BEGIN LOGIN SECTION -->
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('../../assets/img/1.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <br/>
                    <span class="text-lg text-bold text-primary">BIENVENIDOS</span>
                    <br/><br/>
                    <form class="form floating-label" action="{{ url('/login') }}" role="form" accept-charset="utf-8" method="post">
                            {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <label for="username">Correo electrónico o usuario</label>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <label for="password">Contraseña</label>
                            <p class="help-block"><a href="{{ url('/password/reset') }}">
                                    Se te olvidó tu contraseña?</a></p>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <div class="checkbox checkbox-inline checkbox-styled">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> <span>Recuerdame</span>
                                    </label>
                                </div>
                            </div><!--end .col -->
                            <div class="col-xs-6 text-right">
                                <button class="btn btn-primary btn-raised" type="submit">Iniciar Sesión</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
                <div class="col-sm-5 col-sm-offset-1 text-center">
                    <br><br>
                    <h3 class="text-light">
                        No tienes cuenta aún?
                    </h3>
                    <a class="btn btn-block btn-raised btn-primary" href="{{ url('/register') }}">Regístrate aquí</a>

                    <h3 class="text-light">
                        o
                    </h3>
                    <p>
                        <a href="{{ url('/register') }}" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i>Iniciar sesión con Facebook</a>
                    </p>
                    <p>
                        <a href="{{ url('/register') }}" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i>Iniciar sesión con Twitter</a>
                    </p>
                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->

@endsection