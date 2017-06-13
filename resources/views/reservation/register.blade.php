
@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
@endsection
@section('middle-content')

    <div class="row">
        <div class="col s12 m12 l7">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="center"><p><b>DETALLES DE LA RESERVA</b></p></div><br>
                        <div class="row">
                            <div class="col s6 m6 l6">
                                <p><b>CLIENTE</b></p>
                                <p>Nombre : <b>Joel rojas </b></p>
                                <p>Telefono : 77281259</p>
                                <p>Documento : 11541321</p>
                                <p>Correo : <b>joel.a.rojas.v@gmail.com</b></p>
                            </div>
                            <div class="col s6 m6 l6 right">
                                <p><b>HABITACIONES</b></p>
                                <p>Fecha de la reserva:</p>
                                <p>Check-In : </p>
                                <p>Check-Out :</p>
                                <p>Noches : </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="center"><p><b>HABITACIONES DE LA RESERVA</b></p></div>
                    <div class="row">
                        <div class="row">
                            <div class="row" id="tableReservation">
                                <table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                        <th rowspan="1" colspan="1" style="width: 50px;">ID</th>
                                        <th rowspan="1" colspan="1" style="width: 150px;">Habitaciones</th>
                                        <th rowspan="1" colspan="1" style="width: 70px;">Precio</th>
                                        <th rowspan="1" colspan="1" style="width: 80px;">Noches</th>
                                        <th>Extras</th>
                                        <th rowspan="1" colspan="1" style="width: 100px;">Opciones</th>
                                        <th rowspan="1" colspan="1" style="width: 100px;">Sub-Total</th>
                                    </tr>
                                    </thead>
                                    <br>
                                    <?php $total = 0 ?>
                                    @foreach($details as $detail)
                                        <?php  $total = $total + $detail->sub_total ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$detail->room_id}}</td>
                                            <td>{{$detail->name}}</td>
                                            <td>{{$detail->price}}</td>
                                            <td>{{$detail->nights}}</td>
                                            <td>cuna, cama</td>
                                            <td>
                                                <a class="btn-floating blue" style="transform: scaleY(1) scaleX(1) translateY(0px) translateX(0px); opacity: 1;"><i class="material-icons">playlist_add</i></a>
                                                <a class="btn-floating red" style="transform: scaleY(1) scaleX(1) translateY(0px) translateX(0px); opacity: 1;"><i class="material-icons">not_interested</i></a>
                                            </td>
                                            <td>{{$detail->sub_total}}</td>
                                        </tr>
                                    @endforeach()
                                    <tr>
                                        <td colspan="6" style="text-align: right"><b>Total:</b></td>
                                        <td>{{$total}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l5">
            <div class="card">
                <div class="card-content">
                    <div class="center"><p><b>ADICIONAR HABITACION</b></p></div>
                    <div class="row">
                        <form action="{{ url('/addRoom') }}" method="POST" id="formReservationStore">
                        {{ csrf_field() }}
                        <!-- <div class="input-field col s10 m10 l10">
                                        <i class="material-icons prefix">store</i>
                                        <input id="tipo_habitacion" name="tipo_habitacion" type="text" class="validate">

                                        <input type="hidden" id="room_type_id" name="room_type_id">
                                        <input type="hidden" id="room_type_id" name="room_id">
                                        <input type="hidden" id="precio" name="precio">
                                        <label for="icon_prefix" class="">Tipo de Habitacion</label>
                                    </div>-->

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
                            <div class="input-field col s12 m12 l12">
                                <div class="select-wrapper">
                                    <div class="select-wrapper initialized">
                                        <label class="active">Tipo de habitación</label>
                                        <span class="caret">▼</span>
                                        <select id="room-type" name="room-type" onchange="check_availbility();" >
                                            <option disabled selected >Seleccione una habitacion</option>
                                            @foreach($roomTypes as $roomType)
                                                <option value="{{$roomType->id_room_type}}">{{$roomType->room_type}}</option>
                                            @endforeach
                                        </select>
                                        <!--	<input type="hidden" name="room-type-id" id="room-type-id">-->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div id="orderdata"></div>
                                </div>
                            </div>
                            <div class="input-field col s2 m2 l1">
                                <button class="btn-floating btn-large waves-effect waves-light btn green" type="submit" style=" display: none" id="next"><i class="material-icons">add</i></button>
                                <!--<div class="pull-right">
                                    <input class="waves-effect waves-light btn green " type="submit" value="agregar"  id="next" />
                                </div>-->
                            </div>
                        </form>
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
                function check_availbility(){
                    call_loader();
                    $.ajax({
                        url: '{{ url('/roomsearch') }}',
                        type:'POST',
                        data:$('#formReservationStore').serialize(),
                        success:function(result){
                            var obj = result.x;
                            var search = result.search;
                            if(obj==1)
                            {
                                $('#orderdata').html(search);
                                $('#next').show();
                                remove_loader();
                                Materialize.toast('<b>Tipo de habitacion disponible</b>', 4000, 'green');
                                //get_order_data();
                            }
                            else
                            {
                                remove_loader();
                                $('#orderdata').html('');
                                $('#next').hide();
                                Materialize.toast('<b>Tipo de habitacion no disponible</b>', 4000, 'red');
                            }
                        }
                    });
                }
                function remove_loader()
                {
                    $('#overlay1').remove();
                }
                function call_loader(){
                    if($('#overlay1').length == 0 ){
                        var over = '<div id="overlay1">' +
                            '<img  style="padding-top:300px; margin: 0 auto; " class="img-responsive " id="loading" src="http://pysrencoperu.com/sistemasinformaticos/sistemadehotel/assets/admin/dist/img/ajax-loader.gif"></div>';
                        $(over).appendTo('body');
                    }
                }
                $(document).ready(function () {
                    $("#formReservationStore").validate({
                        rules : {
                            cantidadAdulto  : { required : true },

                        },
                        messages : {
                            cantidadAdulto : { required : 'ingrese la cantidad de adultos '}

                        },
                        submitHandler: function(form){
                            var datos = $( 'form ').serialize();
                            $("#tableReservation").html("<div class='progress'><div class='indeterminate'></div></div>");
                            $.ajax({
                                type : "POST",
                                url : '{!! url('/addRoom') !!}',
                                data : datos,
                                dataType : 'json',
                                success : function (data) {
                                    if (data.result == true )
                                    {
                                        $("#tableReservation").load('{!! Request::url() !!} #tableReservation');
                                        $("#room-type").val('');
                                        $("#cantidadAdulto").val('').focus('');
                                        $('#orderdata').html('');
                                        $('#next').hide();
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


