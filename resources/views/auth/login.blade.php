@extends('layouts.auth')


@section('mn-content')
    <div class="mn-content valign-wrapper">
        <main class="mn-inner container">
            <div class="valign">
                <div class="row">
                    <div class="col s12 m6 l4 offset-l4 offset-m3">
                        <div class="card white darken-1">

                                <div class="card-content ">
                                    <span class="card-title">Hotel Empresarial</span>
                                    <div class="row">
                                        <form class="col s12" action="{{ url('/login') }}" role="form" accept-charset="utf-8" method="post">
                                            {{ csrf_field() }}

                                            <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" required autofocus>
                                                <label for="email">Correo electrónico</label>
                                                @if ($errors->has('email'))
                                                    <span class="red-text">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>


                                            <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <input id="password" type="password" class="validate" name="password" required>
                                                <label for="password">Contraseña</label>
                                                @if ($errors->has('password'))
                                                    <span class="red-text">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <p class="help-block"><a href="{{ url('/password/reset') }}">
                                                    Se te olvidó tu contraseña?</a></p>
                                            <div class="col s12 right-align m-t-sm">
                                                <button class="waves-effect waves-light btn teal" type="submit"><i class="material-icons dp48"></i>Iniciar session</button>
                                                <a href="{{ url('/register') }}" class="waves-effect waves-grey btn-flat">Registrate</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
