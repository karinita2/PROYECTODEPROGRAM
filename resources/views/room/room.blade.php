@extends('layouts.head')
@section('middle-content')
    <div class="row">
        <div class="col s12">
            <div class="page-title">Data Tables</div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Basic</span>
                    <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code></p><br>
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
                                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $rooms->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
