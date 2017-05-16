@extends('layouts.head')
@section('css')
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="assets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
@endsection
@section('middle-content')
    <div class="row">
        <div class="col s12">
            <div class="page-title">Habitaciones</div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Basic</span>
                    <br>

                    <table id="example" class="display responsive-table datatable-example">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Tipo habitacion</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($rooms as $key )
                            <tr>
                                <td> {{ $key->id_room }}</td>
                                <td>{{ $key->pack }}</td>
                                <td>{{ $key->room_type }}</td>
                                <td>{{ $key->availability }}</td>
                                <td>
                                    <button class="btn btn-warning btn-detail view-modal"
                                            data-id_room        = "{{ $key->id_room }}"
                                            data-pack           = "{{ $key->pack}}"
                                            data-room_type      = "{{ $key->room_type }}"
                                            data-availability   = "{{ $key->availability }}">
                                        <i class="material-icons dp48">Ver</i>
                                    </button>
                                </td>
                            </tr>
                            @extends('modals.viewroom')
                        @endforeach
                        </tbody>
                    </table>

                    {{ $rooms->links() }}
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
    <script src="assets/js/alpha.min.js"></script>
    <script src="assets/js/ajax_users.js"></script>

    <!--<script src="assets/js/pages/miscellaneous-sweetalert.js"></script>-->
@endsection
