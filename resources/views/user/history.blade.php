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
            <div class="page-title"><h5>Historial de Reservas</h5></div>
            
        </div>
        <div class="col s12">
            
            <div class="page-title"><h8>En esta sección podrá ver todas las reservas que usted realizó en el "Hotel Valentin".</h8></div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <div>
                        {{ Form::open(['method' => 'GET','url'=>'history','class'=>'navbar-form navbar-left','role'=>'search']) }}
                        <div>
                            <input type="text" name="search" class="input-field col s3" placeholder="Buscar reservas">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default -sm">
                                    <i class="material-icons dp48">search</i>
                                </button>
                            </span>
                        </div>
                        {{ Form::close() }}
                    </div>
                    <div id="example_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="example_length"><label>Mostrar<select name="example_length" aria-controls="example" class="browser-default"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div id="example_filter" class="dataTables_filter"></div>
                        <table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">Reserva Nº</th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 160px;">Check in</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 160px;">Check out</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120px;">Tipo de Reserva</th>
                                <th  tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 152px;">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($reservaciones as $key )
                            <tr>
                                <td>{{ $key->id_reservation }}</td>
                                <td>{{ $key->ckechin }}</td>
                                <td>{{ $key->ckechout }}</td>
                                <td>{{ $key->type_reservation }}</td>
                                <td>
                                    <button class="btn btn-warning btn-detail edit-modal"
                                            data-id_reservation       = "{{ $key->id_reservation }}"
                              