@extends('layouts.head')
@section('css')
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="assets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
@endsection
@section('middle-content')
    <div class="row">
        <div class="col s12"><br>
            <div class="page-title">Usuarios</div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Lista de usuarios</span>
                    <a class="waves-effect waves-light btn m-b-xs"><i class="material-icons left">cloud</i>Registrar Usuario</a>
                    <div id="example_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="browser-default"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div id="example_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search records" aria-controls="example"></label></div><table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">Codigo</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200px;">Nombre</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 200px;">Apellido</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 122px;">Telefono</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">Nacionalidad</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">Opciones</th>
                            </tr>
                            {{ csrf_field() }}
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                                @foreach($users as $user)
                                    <tr role="row" class="odd item{{$user->id_person}}">
                                        <td class="sorting_1">{{ $user->id_person }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->nationality }}</td>
                                        <td>
                                            <button class="btn btn-warning btn-detail edit-modal"
                                                    data-id_person      = "{{ $user->id_person }}"
                                                    data-name           = "{{ $user->name}}"
                                                    data-last_name      = "{{ $user->last_name }}"
                                                    data-phone          = "{{ $user->phone }}"
                                                    data-sex            = "{{ $user->sex }}"
                                                    data-nationality    = "{{ $user->nationality }}">
                                                <i class="material-icons dp48">settings</i>
                                            </button>
                                            {{-- !! Form::open(['route' => ['user.destroy', $user->id_person], 'method' => 'delete','class'=>'delete_form']) !! --}}
                                            <!--<button class="waves-effect waves-light btn red sweetalert-cancel delete-btn"><i class="material-icons dp48">delete</i></button>-->
                                            {{--!! Form::close() !!--}}

                                            <button class="waves-effect waves-light btn red delete-modal"
                                                    data-id             = "{{ $user->id }}"
                                                    data-id_person      = "{{ $user->id_person }}"
                                                    data-name           = "{{ $user->name}}">
                                                <i class="material-icons dp48">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @extends('modals.edit')
                                    @extends('modals.delete')
                                @endforeach
                            </tbody>

                        </table>
                        <br>
                        <div class="dataTables_info" id="example_info" role="status" aria-live="polite"></div>
                        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                            <a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">
                                <i class="material-icons">chevron_left</i>
                            </a>
                            <span>
                                <a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">5</a>
                                <a class="paginate_button " aria-controls="example" data-dt-idx="6" tabindex="0">6</a>
                            </span>
                            <a class="paginate_button next" aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next">
                                <i class="material-icons">chevron_right</i>
                            </a>
                        </div>
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
    <script type="text/javascript">
        $('button.delete-btn').on('click', function(e){
            e.preventDefault();
            var self = $(this);
            swal({
                    title: "Esta seguro?",
                    text: "No podrá recuperar este dato.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Sí, Borrar!",
                    cancelButtonText: "No, Cancelar!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if(isConfirm){
                        swal("Eliminado!", "Se ha eliminado corrrectamente", "success");
                        setTimeout(function() {
                            self.parents(".delete_form").submit();
                        }, 500); //2 second delay (2000 milliseconds = 2 seconds)
                    }
                    else{
                        swal("Cancelado", "No se ha eliminado este dato. :)", "error");
                    }
                });
        });
    </script>
    <!--<script src="assets/js/pages/miscellaneous-sweetalert.js"></script>-->
@endsection