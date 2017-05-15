
@extends('layouts.head')
@section('middle-content')

    <div class="row">
        <div class="col s12">
            <div class="page-title">Formulario de reservas</div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Datos Personales</span><br>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix" class="">Carnet de Identidad</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix" class="">Nombre(s)</label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix" class="">Apellido(s)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_prefix" type="number" class="validate">
                                    <label for="icon_prefix" class="">Teléfono</label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">perm_identity</i>
                                    <div class="select-wrapper">
                                        <select class="initialized">
                                            <option value="" disabled="" selected="">Sexo</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email2" type="email" class="validate">
                                    <label for="email2" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Datos de reserva</span><br>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">open_in_browser</i>
                                    <input placeholder="" id="checkin" name="checkin" type="date">
                                    <label for="fechabautismo" class="active"><b>Check in</b></label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">open_in_browser</i>
                                    <input placeholder="" id="checkout" name="checkout" type="date">
                                    <label for="fechabautismo" class="active"><b>Check out</b></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">store</i>
                                    <input id="icon_prefix" type="number" class="validate">
                                    <label for="icon_prefix" class="">Habitaciones</label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">dashboard</i>
                                    <div class="select-wrapper">
                                        <select class="initialized">
                                            <option value="" disabled="" selected="">Cama</option>
                                            <option value="1">Matrimonial</option>
                                            <option value="2">Simple</option>
                                            <option value="3">Doble</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a class="waves-effect waves-light btn m-b-xs"><i class="material-icons left">cloud</i>button</a>
            <a class="waves-effect waves-light btn m-b-xs"><i class="material-icons left">cloud</i>button</a>
    </div>
    <script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>


@endsection