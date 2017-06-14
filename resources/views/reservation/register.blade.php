
@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="{{asset('assets/plugins/material-preloader/css/materialPreloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
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
                                    <p>Nombre       : <b> {{ $reservation->last_name. ' '.$reservation->name }} </b></p>
                                    <p>Telefono     :     {{ $reservation->phone}}</p>
                                    <p>Documento    :     {{ $reservation->ndi }}</p>
                                    <p>Correo       : <b> {{ $reservation->email }}</b></p>
                                    <p>Nacionalidad : {{ $reservation->nationality }}</p>
                                </div>
                                <div class="col s6 m6 l6 right">
                                    <p><b>HABITACIONES</b></p>
                                    <p>Fecha de la reserva: {{ $reservation->date }}</p>
                                    <p>Check-In : {{ $reservation->ckechin }}</p>
                                    <p>Check-Out: {{ $reservation->ckechout }}</p>
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
                                                <td></td>
                                                <td>
                                                    <button class="waves-effect waves-light btn green edit-modal"
                                                            data-id_reservation    = "{{ $reservation->id_reservation }}"
                                                            data-id_detail         = "{{ $detail->id_detail }}"
                                                            data-price             = "{{ $detail->price }}">
                                                        <i class="material-icons dp48">settings</i>
                                                    </button>
                                                    <button class="waves-effect waves-light btn red delete-modal"
                                                            data-id             = "{{ $detail->id_detail }}"
                                                            data-id_room         = "{{ $detail->room_id }}">
                                                        <i class="material-icons dp48">delete</i>
                                                    </button>
                                                </td>
                                                <td>{{$detail->sub_total}}</td>
                                            </tr>
                                            @extends('modals.editDetail')
                                            @extends('modals.deleteDetail')
                                        @endforeach()
                                        <input type="hidden" id="reservation_id" name="reservation_id" value="{{$reservation->id_reservation}}">
                                        <input type="hidden" id="id_user" name="id_user" value="{{$reservation->user_id}}">
                                        <tr>
                                            <td colspan="6" style="text-align: right"><b>Total:</b></td>
                                            <td><input type="hidden" id="total" name="total" value="{{$total}}">{{$total}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <form action="{{ url('/saveReservation') }}" method="POST" id="aceptar">
                                    {{csrf_field()}}
                                    <input type="hidden" id="total_reservation" name="total_reservation">
                                    <input type="hidden" id="reservation" name="reservation">
                                    <input type="hidden" id="user_id" name="user_id">
                                    <div class="col s12 m12 l12 center">
                                        <button class="waves-effect waves-light btn green" type="submit" id="aceptar">ACEPTAR</button>
                                    </div>
                                </form>
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
            <script src="{{asset('assets/plugins/google-code-prettify/prettify.js')}}"></script>
            <script src="{{asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
            <script src="{{asset('assets/js/alpha.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
            <script src="{{asset('assets/js/jquery.validate.js')}}"></script>

            <script type="text/javascript">
                $(document).ready(function(){

                    $("#aceptar").click(function () {
                        //saco el valor accediendo a un input de tipo text y name = nombre2 y lo asigno a uno con name = nombre3
                        var total = $("#total").val();
                        var id_reservation = $("#reservation_id").val();
                        var id = $('#id_user').val();
                        $('#total_reservation').val(total);
                        $('#reservation').val(id_reservation);
                        $('#user_id').val(id);
                    });
                    //var resultado = au - ao;
                    //  $("#cambio").val($("#total-venda").val());
                });
                $(document).on('click', '.edit-modal', function() {
                    $('#id_reservation').val($(this).data('id_reservation'));
                    $('#id_detail').val($(this).data('id_detail'));
                    $('#price').val($(this).data('price'));
                    $('#modal1').openModal(true);
                });

                $(document).on('click', '.delete-modal', function() {
                    $('#id').val($(this).data('id'));
                    $('#id_room').val($(this).data('id_room'));
                    $('#modal2').openModal(true);
                });
                $('.modal-footer').on('click', '.delete', function() {
                    $.ajax({
                        type: 'post',
                        url: '/deleteDetail',
                        data: {
                            '_token'    : $('input[name=_token]').val(),
                            'id'        : $("#id").val(),
                            'id_room'   : $("#id_room").val(),
                        },
                        success: function(data) {
                            $('.item' + $('#id').val()).remove();
                            $("#tableReservation").load('{!! Request::url() !!} #tableReservation');
                            swal("Eliminado!", "Se ha eliminado correctamente", "success");

                        }
                    });
                });
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


