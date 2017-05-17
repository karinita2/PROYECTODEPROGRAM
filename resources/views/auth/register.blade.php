@extends('layouts.auth')

@section('mn-content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="section-header " align="center">
                    <div class="col-lg-12">
                        <h1 class="text-primary">CREAR CUENTA DE USUARIO </h1>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-head style-primary">
                                <header>Datos Personales</header>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="apellido" class="col-sm-4 control-label">Apellido completo (*) </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}" >
                                                <div class="form-control-line"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                                            <label for="nombres" class="col-md-4 control-label">Nombre completo (*)</label>
                                            <div class="col-md-8">
                                                <input id="name" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')" >
                                                <div class="form-control-line"></div>
                                                @if ($errors->has('nombres'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('nombres') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('nacionalidad') ? ' has-error' : '' }}">
                                            <label for="nombres" class="col-md-4 control-label">Nacionalidad(*)</label>
                                            <div class="col-md-8">
                                                <input id="name" type="text" class="form-control" name="nacionalidad" value="{{ old('nacionalidad') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')" >
                                                <div class="form-control-line"></div>
                                                @if ($errors->has('nacionalidad'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('nacionalidad') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="col-sm-6">
                                        <div class="form-group {{ $errors->has('fecha_nacimiento') ? ' has-error ' : '' }}">
                                           <label for="fecha_nacimiento" class="col-sm-4 control-label">Fecha nacimiento (*)</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                                <div class="form-control-line"></div>
                                                @if ($errors->has('fecha_nacimiento'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="celular" class="col-sm-4 control-label">Telefono</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="celular" name="celular" value="{{ old('celular') }}">
                                                <div class="form-control-line"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ndi" class="col-sm-4 control-label">Documento de identidad</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="ndi" name="ndi" value="{{ old('ndi') }}">
                                                <div class="form-control-line"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="sexo" class="col-sm-4 control-label">Sexo (*)</label>
                                            <div class="col-sm-8">
                                                <select id="sexo" name="sexo" class="form-control">
                                                    <option value="" disabled>&nbsp;</option>
                                                    <option value="masculino">masculino</option>
                                                    <option value="femenino">femenino</option>
                                                </select>
                                                <label for="select2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--end .card-body-->
                            <h1>
                                <hr></h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Nombre usuario (*)</label>
                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')" >
                                            <input type="hidden" id="tipo" name="tipo" value="catequista">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Correo Electronico (*)</label>
                                        <div class="col-md-8">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Contraseña (*)</label>
                                        <div class="col-md-8">
                                            <input id="password" type="password" class="form-control" name="password" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Repetir contraseña (*)</label>
                                        <div class="col-md-8">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card-actionbar">
                                    <div class="col-sm-6 col-md-offset-3" align="center">
                                        <button type="submit" class="btn btn-block ink-reaction btn-primary">Crear cuenta</button>
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
