@extends('layouts.head')
@section('css')
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="assets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
@endsection
@section('middle-content')
    <div class="row">
        <div class="col s12">
            <div class="page-title"><h5>Historial de Reservas</h5></div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">

                    <div id="example_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="browser-default"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div id="example_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search records" aria-controls="example"></label></div>
                        <table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">CI</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Nombre</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 150px;">Apellido</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 160px;">Check in</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 160px;">Check out</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 120px;">Habitaciones</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 152px;">Opciones</th>
                            </tr>
                            </thead>

                            <br>
                          
                        </table>
                        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">-</div>
                        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                            <a class="paginate_button previous" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">
                                <i class="material-icons">chevron_left</i></a>
                            <span>
                                <a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">5</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="6" tabindex="0">6</a>
                            </span>
                            <a class="paginate_button next disabled" aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next">
                                <i class="material-icons">chevron_right</i>
                            </a></div>
                    </div>
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