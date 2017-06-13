
@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
@endsection
@section('middle-content')

    <div class="row">

        <div class="col s12 m12 l5">
            <div class="card">
                <div class="card-content">

                    <div class="row">
                        <div class="center"><p><b>DETALLE DE LA RESERVACION</b></p></div>

                        <div class="s12 m4 l4">
                            <div class="card-content left">
                                <p><b>Codigo de la reserva: </b></p><br>
                                <p><b>DETALLE DEL RESPONSABLE</b></p><hr>
                                <p>Nombre : <b>Joel rojas </b></p>
                                <p>Telefono : 77281259</p>
                                <p>Documento : 11541321</p>
                                <p>Correo : <b>joel.a.rojas.v@gmail.com</b></p><br>
                                <p><b>DETALLE DE LAS HABITACIONES</b></p><hr>
                                <p>Habitaciones : </p>
                                <p>Check-In : </p>
                                <p>Check-Out :</p>
                                <p>Noches : </p>
                            </div>
                            <div class="card-content right"><b>Total: asdasd</b></div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <div class="col s12 m12 l7">
            <div class="card">
                <div class="card-content">
                    <div class="center"><p><b>ADICIONAR HABITACION</b></p></div>
                    <div class="row">
                        <div class="row">
                            <form action="{{ url('/addreservation') }}" method="POST" id="formReservation">
                                {{ csrf_field() }}

                                   <!-- <div class="input-field col s10 m10 l10">
                                        <i class="material-icons prefix">store</i>
                                        <input id="tipo_habitacion" name="tipo_habitacion" type="text" class="validate">

                                        <input type="hidden" id="room_type_id" name="room_type_id">
                                        <input type="hidden" id="room_type_id" name="room_id">
                                        <input type="hidden" id="precio" name="precio">
                                        <label for="icon_prefix" class="">Tipo de Habitacion</label>
                                    </div>-->
                                    <input type="hidden" id="id" name="id" value="{!! Auth::user()->id !!}">
                                    <input type="hidden" id="role_id" name="role_id" value="{{ Auth::user()->role_id }}">
                                    <div class="row">

                                        <div class="input-field col s5">
                                            <input placeholder="Ingrese cantidad de adultos" id="cantidadAdulto" name="cantidadAdulto" type="text" class="validate">
                                            <label for="cantidadAdulto" class="active">Adultos</label>
                                        </div>
                                        <div class="input-field col s1 m1 l1">
                                            <input type="hidden" id="role_id" name="role_id" value="{{ Auth::user()->role_id }}">
                                        </div>
                                        <div class="input-field col s5 ">
                                            <input placeholder="Ingrese cantidad de niños" id="cantidadNino" name="cantidadNino" type="text" class="validate">
                                            <label for="cantidadNino" class="active">Niños</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s9">
                                        <div class="select-wrapper">
                                            <div class="select-wrapper initialized">
                                                <label class="active">Tipo de habitación</label>
                                                <span class="caret">▼</span>
                                                <select id="room-type" name="room-type">
                                                    <option disabled selected >Seleccione una habitacion</option>
                                                    @foreach($roomTypes as $roomType)
                                                        <option value="{{$roomType->id_room_type}}">{{$roomType->room_type}}</option>
                                                    @endforeach
                                                </select>
                                                <!--	<input type="hidden" name="room-type-id" id="room-type-id">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-field col s2 m2 l1">
                                        <button class="btn-floating btn-large waves-effect waves-light red" type="submit"><i class="material-icons">add</i></button>
                                    </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="row" id="tableReservation">
                                <table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 50px;">ID</th>
                                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 200px;">Habitaciones</th>
                                        <th>Extras</th>
                                        <th tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 100px;">Opciones</th>
                                    </tr>
                                    </thead>

                                    <br>

                                    @foreach($details as $detail)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$detail->room_id}}</td>
                                            <td>{{$detail->name}}</td>
                                            <td>cuna, cama</td>
                                            <td>
                                                <a class="btn-floating blue" style="transform: scaleY(1) scaleX(1) translateY(0px) translateX(0px); opacity: 1;"><i class="material-icons">playlist_add</i></a>
                                                <a class="btn-floating red" style="transform: scaleY(1) scaleX(1) translateY(0px) translateX(0px); opacity: 1;"><i class="material-icons">not_interested</i></a>
                                            </td>
                                        </tr>
                                    @endforeach()


                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endsection

        @section('js')
            <script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
            <script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
            <script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
            <script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
            <script src="{{asset('assets/js/alpha.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
            <script src="{{asset('assets/js/jquery.validate.js')}}"></script>

            <script type="text/javascript">
                $(document).ready(function () {

                    $("#formReservation").validate({
                        rules : {
                            tipo_habitacion : { required : true }
                        },
                        messages : {
                            tipo_habitacion : { required : 'ingrese el tipo de habitacion'}
                        },
                        submitHandler: function(form){
                            var typeHabitacion = $('form').serialize();
                            $("#tableReservation").html("<div class='progress'><div class='indeterminate'></div></div>");
                            $.ajax({
                                type : "POST",
                                url : '{!! url('/addreservation') !!}',
                                data : typeHabitacion,
                                dataType : 'json',
                                success : function (data) {
                                    if (data.result == true )
                                    {
                                        $("#tableReservation").load('{!! Request::url() !!} #tableReservation');
                                        $("#tipo_habitacion").val('').focus('');
                                    }
                                    else
                                    {
                                        alert('se produjo un error al agregar el tipo de habitacion');
                                    }
                                }
                            });
                        }
                    });

                });
            </script>

        @endsection


