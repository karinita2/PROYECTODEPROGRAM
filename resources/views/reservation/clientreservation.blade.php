
@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker3.css') }}">
@endsection
@section('middle-content')

    <div class="row">

        <!--<div class="col s12">
            <div class="page-title"><h5>Formulario de reservas</h5></div>
        </div>
        <div class="col s12 m6 l6">
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <div class="center"><p><b>DETALLES DE LA RESERVA</b></p></div><br>
                        <div class="row">
                            <div class="col s6 m6 l6">
                                <h6>Nombre     : <b> <input id="nombre" type="text" class="validate" name="nombre"> </b></h6>
                                <h6>Telefono   : <b><input id="telefono" type="number" class="validate" name="telefono"></b></h6>
                            </div>
                            <div class="col s6 m6 l6">
                                <h6>Apellido    : <b> <input id="apellido" type="text" class="validate" name="apellidos"> </b></h6>
                                <h6>Carnet de identidad   : <b><input id="carnet" type="text" class="validate" name="carnet"></b></h6>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!--<form action="{{ url('/reservation/store') }}" id="formReservationStore" method="POST">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Datos Personales</span><br>
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">credit_card</i>
                                    <input id="carnet" type="text" class="validate" name="carnet">
                                    <input type="hidden" id="id" name="id" value="{!! Auth::user()->id !!}">
                                    <input type="hidden" id="tipo" name="tipo" value="{{ Auth::user()->role_id }}">
                                    <input type="hidden" id="personid" name="personid" value="{{ Auth::user()->person_id }}">
                                    <label for="icon_prefix" class="">Carnet de Identidad</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="nombre" type="text" class="validate" name="nombre">
                                    <label for="icon_prefix" class="">Nombre(s)</label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="apellido" type="text" class="validate" name="apellidos">
                                    <label for="icon_prefix" class="">Apellido(s)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="telefono" type="number" class="validate" name="telefono">
                                    <label for="icon_prefix" class="">Teléfono</label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">perm_identity</i>
                                    <div class="select-wrapper">
                                        <select id="sexo" class="initialized" name="sexo">
                                            <option value="" disabled="" selected="">Sexo</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="email" class="validate" name="email">
                                    <label for="email2" data-error="wrong" data-success="right">Email</label>
                                </div>

                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">location_on</i>
                                    <div class="select-wrapper">
                                        <select class="initialized" id="nacionalidad" name="nacionalidad">
                                            <option value="" disabled="" selected="">Nacionalidad</option>
                                            <option value="AF">Afghanistan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="card-content" >
                    <center>
                        <a class="waves-effect waves-light btn red m-b-xs"><i class="material-icons left">cloud</i>Cancelar</a>
                        <button class="waves-effect waves-light btn green m-b-xs" type="submit"><i class="material-icons left">cloud</i>Aceptar</button>
                    </center>
                </div>
            </form>-->
        </div>
        <!--<div class="col s12 m6 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Datos de reserva</span><br>
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">open_in_browser</i>
                                <input placeholder="" id="checkin" name="checkin" type="date">
                                <label for="fechabautismo" class="active"><b>Check in</b></label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <i class="material-icons prefix">open_in_browser</i>
                                <input placeholder="" id="checkout" name="checkout" type="date">
                                <label for="fechabautismo" class="active"><b>Check out</b></label>
                            </div>
                        </div>

                        <div class="row">
                            <form action="{{ url('/addreservation') }}" method="POST" id="formReservation">
                                {{ csrf_field() }}
                                <div class="input-field col s6 m6 l6">
                                    <i class="material-icons prefix">store</i>
                                    <input id="tipo_habitacion" name="tipo_habitacion" type="text" class="validate">
                                    <input type="hidden" id="tipo_habitacionId" name="tipo_habitacionId">
                                    <input type="hidden" id="id" name="id" value="{!! Auth::user()->id !!}">
                                    <input type="hidden" id="role_id" name="role_id" value="{{ Auth::user()->role_id }}">
                                    <label for="icon_prefix" class="">Tipo de Habitacion</label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <button class="waves-effect waves-light btn green m-b-xs" type="submit"><i class="material-icons left">cloud</i>Adicionar</button>
                                </div>
                            </form>

                            <div class="row" id="tableReservation">
                                <table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 200px;">Habitaciones</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">Opciones</th>
                                    </tr>
                                    </thead>

                                    <br>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">123456</td>
                                        <td>Juan</td>
                                        <td> <a class="btn-floating blue" style="transform: scaleY(1) scaleX(1) translateY(0px) translateX(0px); opacity: 1;"><i class="material-icons">mode_edit</i></a> <a class="btn-floating red" style="transform: scaleY(1) scaleX(1) translateY(0px) translateX(0px); opacity: 1;"><i class="material-icons">insert_chart</i></a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>-->

    <div class="row">
        <div class="col s7 m7 l7">
            <b><h5>BUSQUEDA DE RESERVAS </h5></b>
        </div>

    </div>
    <div class="card">
        <div class="row">
            <div class="col s12 m12"><br>
                <form id="formReservationStore" action="{{url('/reservation/store')}}" enctype="multipart/form-data"  method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s5">
                            <label for="cliente">Cliente</label><br>
                            <input id="nombre" type="text"name="nombre" disabled>
                        </div>
                        <div class="input-field col s1 m1 l1">
                            <input type="hidden" id="personid" name="personid" value="{{ Auth::user()->person_id }}">
                            <input type="hidden" id=" id-person" name=" id-person" value="{{ Auth::user()->person_id }}">
                        </div>

                        <div class="input-field col s6">
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

                    </div>
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
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <i class="material-icons prefix">open_in_browser</i>
                            <input type="text" name="check_in" class="form-control datepicker1" placeholder="Registrarse" autocomplete="off" />
                            <label for="check_in" class="active"><b>Fecha de inicio </b></label>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <i class="material-icons prefix">open_in_browser</i>
                            <input type="text" name="check_out" class="form-control datepicker2"  placeholder="Echa un vistazo" autocomplete="off" readonly="" />
                            <label for="check_out" class="active"><b>Fecha de salida </b></label>
                        </div>
                    </div>

                    <!--<div class="input-field col s4 m4 l4" align="center">
						<button class="waves-effect waves-light btn green" type="submit"><i class="material-icons right">cloud</i>Siguiente</button>
					</div>-->
                    <div class="row">
                        <div class="col s4 m4 l4 col-offset-s1">
                            <div id="orderdata"></div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            <input class="btn btn-primary" type="submit" value="Aceptar" style="display:none" id="next" />
                        </div>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>


    </div>

    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/plugins/jquery/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/materialize/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/material-preloader/js/materialPreloader.min.js') }}"></script>
    <!--<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>-->
    <script src="{{ asset('assets/js/alpha.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript">
        /*$('#cliente').autocomplete({
            source: '{!! url('/buscarCliente') !!}',
            minlength:1,
            select:function (event, ui) {
                $('#id-person').val(ui.item.id);
            }
        });*/
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url:'/findUser',
                dataType:"JSON",
                data: {
                    '_token': $('input[name=_token]').val(),
                    'person_id': $('#personid').val()
                },
                success: function(data)
                {
                    $('#nombre').val(data.name+' '+data.last_name);
                    $('#email').val(data.email);
                    $('#carnet').val(data.ndi);
                    //$('#lastname').val(data.lastname);
                    //$('[name="username"]').val(data.username);
                }
            });
        });
        $(function() {
            $('.datepicker1').datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'dd-mm-yyyy',
                startDate: new Date(),
                // endDate : new Date('2014-08-08'),
            }).on('changeDate', function (selected) {
                $(".datepicker2").attr("readonly", false);
                $('.datepicker2').focus();
            });;
            $('.datepicker2').datepicker({
                todayHighlight: true,
                autoclose: true,
                format: 'dd-mm-yyyy',
                startDate: new Date(),
            }).on('changeDate', function (selected) {
                var date1	= $(".datepicker1").datepicker('getDate');
                var date2	= $(".datepicker2").datepicker('getDate');
                if(date2<date1){
                    Materialize.toast('<b>Error - La fecha de salida debe ser mayor que la fecha de entrada!!</b>', 4000, 'red');
                    $('.datepicker2').val('');
                    $('.datepicker2').focus();
                }else{
                    check_availbility();
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
                        Materialize.toast('<b>Tipo de habitacion no disponible</b>', 4000, 'red');
                    }
                }
            });
        }
        function get_order_data(){
            call_loader();
            $.ajax({
                url: '{{ url('/addReservation') }}',
                type:'POST',
                data:$('#formReservationStore').serialize(),
                success:function(result){
                    // alert(result);return false;
                    $('#orderdata').html(result);
                    $('#next').show();
                    remove_loader();
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
    </script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#createUser").validate({
                rules : {
                    name 		: { required : true },
                    last_name 	: { required : true },
                    sex			: { required : true },
                },
                messages : {
                    name 		: { required : 'ingrese el nombre del cliente'},
                    last_name	: { required : 'ingrese el apellido del cliente' },
                    sex			: { required : 'ingrese el sexo' },
                },
                submitHandler: function(form){
                    $("#load").html("<div class='circle-clipper left'><div class='circle'></div></div>");
                    $.post({
                        type : "POST",
                        url : '{{ url('/reservation/store') }}',
                        data : {
                            '_token': 		$('input[name=_token]').val(),
                            'ndi':			$('#carnet').val(),
                            'name': 		$("#name").val(),
                            'last_name': 	$("#last_name").val(),
                            'phone':		$('#phone').val(),
                            'nationality':	$('#nationality').val(),
                            'sex':			$('#sex').val(),
                            'email':		$('#email').val(),
                            'id':			$('#id').val(),
                            'role_id':		$('#role_id').val(),
                        },
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
