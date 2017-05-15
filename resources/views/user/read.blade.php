@extends('layouts.head')
@section('middle-content')
    <div class="row">
        <div class="col s12"><br>
            <div class="page-title">Usuarios</div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Basic</span>

                    <div id="example_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="browser-default"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div><div id="example_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search records" aria-controls="example"></label></div><table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">Codigo</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 151px;">Nombre</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 151px;">Apellido</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">Correo</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 122px;">Telefono</th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 122px;">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <br>
                        </table>
                        <br>
                        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
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