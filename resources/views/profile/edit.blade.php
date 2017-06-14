@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
@endsection
@section('middle-content')

    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="http://empresarial.app/register" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="QbZiBhcUk6aJDVwRInOJVeJP73AMcU1z6iZpsWHD">
            <div class="card">
                <div class="card-head style-primary">
                    <br>
                    <header><center><h5>Información general</h5></center></header>
                </div>
                <div class="card-content">

                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="apellido" type="text" class="validate" name="apellido" value="">
                            <label for="icon_prefix">Apellidos</label>
                        </div>
                        <div class="input-field col s6">
                            <div class="form-group">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="name" type="text" class="validate" name="nombres" value="" required="" oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                <label for="icon_prefix">Nombres (*)</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <div class="form-group">
                                <i class="material-icons prefix">location_on</i>
                                <input id="name" type="text" class="validate" name="nacionalidad" value="" required="" oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                <label for="nombres" class="col-md-4 control-label">Nacionalidad(*)</label>
                            </div>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">call</i>
                            <input id="celular" type="number" class="validate" name="celular" value="">
                            <label for="celular">Teléfono</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">credit_card</i>
                            <input id="ndi" type="text" class="validate" name="ndi" value="">
                            <label for="ndi">Documento de Identidad</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">perm_identity</i>
                            <div class="select-wrapper">
                                <div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-ae4fadeb-53f2-3ff7-2647-050931ada3d6" value="Sexo (*)"><ul id="select-options-ae4fadeb-53f2-3ff7-2647-050931ada3d6" class="dropdown-content select-dropdown "><li class="disabled "><span>Sexo (*)</span></li><li class=""><span>Masculino</span></li><li class=""><span>Femenino</span></li></ul><select id="sexo" class="initialized" name="sexo">
                                        <option value="" disabled="" selected="">Sexo (*)</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                    </select></div>
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
                            <div class="form-group">
                                <i class="material-icons prefix">person_pin</i>
                                <input id="name" type="text" class="validate" name="name" value="" required="" oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                <label for="nombres" class="col-md-4 control-label">Usuario(*)</label>
                            </div>
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <div class="form-group">
                                <i class="material-icons prefix">email</i>
                                <input id="email" type="email" class="form-control" name="email" value="" required="" oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                <label for="email" class="col-md-4 control-label">Correo Electronico (*)</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <div class="form-group">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="password" type="password" class="form-control" name="password" required="" oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
                                <label for="password" class="col-md-4 control-label">Contraseña (*)</label>
                            </div>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" oninvalid="setCustomValidity('Por favor llene este campo')" oninput="setCustomValidity('')">
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

    @endsection