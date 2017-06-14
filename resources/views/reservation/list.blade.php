@extends('layouts.head')
@section('css')
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="assets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet">
@endsection
@section('middle-content')
    <div class="row">
        <div class="col s12">
            <div class="page-title">Habitaciones</div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Lista</span>
                    <br>
                    <div>
                        {{ Form::open(['method' => 'GET','url'=>'reservationList','class'=>'navbar-form navbar-left','role'=>'search']) }}
                        <div>
                            <input type="text" name="search" class="input-field col s4" placeholder="Buscar ...">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default -sm">
                                    <i class="material-icons dp48">search</i>
                                </button>
                            </span>
                        </div>
                        {{ Form::close() }}
                    </div>

                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                        <tr>
                            <th>Numero de Reserva</th>
                            <th>Habitacion</th>
                            <th>Fecha de Ingreso</th>
                            <th>Fecha de Salida</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($details as $key )
                            <tr>
                                <td> {{ $key->id_detail }}</td>
                                <td>{{ $key->name }}</td>
                                <td>{{ $key->ckechout }}</td>
                                <td>{{ $key->ckechin }}</td>
                                <td>{{ $key->sub_total }}</td>
                            </tr>
                            @extends('modals.viewroom')
                        @endforeach
                        </tbody>
                    </table>

                    {{ $details->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
    <script src="assets/plugins/materialize/js/materialize.min.js"></script>
    <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="assets/plugins/google-code-prettify/prettify.js"></script>
    <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="assets/plugins/fullcalendar/moment.min.js"></script>
    <script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets/js/alpha.min.js"></script>
    <script src="assets/js/ajax_room.js"></script>
    <script src="assets/js/pages/calendar.js"></script>

    <!--<script src="assets/js/pages/miscellaneous-sweetalert.js"></script>-->
@endsection
