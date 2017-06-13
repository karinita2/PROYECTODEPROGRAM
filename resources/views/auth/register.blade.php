@extends('layouts.auth')

@section('mn-content')
<div class="container">
    <div class="row">
        <div class="col s12 m12 l12 ">
            <div class="panel panel-default">
                <div class="row margin">
                    <div class="input-field col s12 center">
                        <font color="white"><h4>Registro de Usuario</h4></font>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-head style-primary">
                                <br>
                                <header><center><h5>Información general</h5></center></header>
                            </div>
                            <div class="card-content">

                                        <div class="row">
                                            <div class="input-field col s12 m6 l6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="apellido" type="text" class="validate" name="apellido" value="{{ old('apellido') }}" >
                                                <label for="icon_prefix">Apellidos</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="name" type="text" class="validate" name="nombres" value="{{ old('nombres') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                                <label for="icon_prefix">Nombres (*)</label>
                                                @if ($errors->has('nombres'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('nombres') }}</strong>
                                                    </span>
                                                @endif
                                                </div>
                                            </div>
                                        </div>

                                <div class="row">
                                    <div class="input-field col s12 m6 l6">
                                        <div class="form-group{{ $errors->has('nacionalidad') ? ' has-error' : '' }}">
                                            <i class="material-icons prefix">location_on</i>
                                                <input id="name" type="text" class="validate" name="nacionalidad" value="{{ old('nacionalidad') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')" >
                                                <label for="nombres" class="col-md-4 control-label">Nacionalidad(*)</label>
                                                @if ($errors->has('nacionalidad'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('nacionalidad') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <i class="material-icons prefix">call</i>
                                        <input id="celular" type="number" class="validate" name="celular" value="{{ old('celular') }}" >
                                        <label for="celular">Teléfono</label>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m6 l6">
                                        <i class="material-icons prefix">credit_card</i>
                                        <input id="ndi" type="text" class="validate" name="ndi" value="{{ old('ndi') }}" >
                                        <label for="ndi">Documento de Identidad</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <div class="select-wrapper">
                                            <select id="sexo" class="initialized" name="sexo">
                                                <option value="" disabled="" selected="">Sexo (*)</option>
                                                <option value="masculino">Masculino</option>
                                                <option value="femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        <!--end .card-body-->
                            <div class="card-content">
                            <div class="card-head style-primary">
                                <header><center><h5>Información de cuenta</h5></center></header>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <i class="material-icons prefix">person_pin</i>
                                        <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')" >
                                        <label for="nombres" class="col-md-4 control-label">Usuario(*)</label>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="input-field col s12 m6 l6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <i class="material-icons prefix">email</i>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                            <label for="email" class="col-md-4 control-label">Correo Electronico (*)</label>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <i class="material-icons prefix">vpn_key</i>
                                            <input id="password" type="password" class="form-control" name="password" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                            <label for="password" class="col-md-4 control-label">Contraseña (*)</label>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                    <label for="password-confirm" class="col-md-4 control-label">Repetir contraseña (*)</label>
                                </div>
                            </div>
                            <br>
                            <div class="card-actionbar">
                                    <div class="col-sm-6 col-md-offset-3" align="center">
                                        <button type="submit" class="btn btn-block ink-reaction btn-primary">Crear cuenta</button>
                                    </div>
                            </div>
                        </div>
                        </div>

                        <!--end .card -->
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
