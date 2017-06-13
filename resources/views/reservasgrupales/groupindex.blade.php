@extends('layouts.head')
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/datepicker3.css') }}">
@section('css')
    <style>
        .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
            background: #CCCCCC;
            color: #444;
            cursor: default;
        }
    </style>
    <style>
        #overlay1 {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            background: #ffffff;
            opacity: 0.7;
            filter: alpha(opacity=80);
            -moz-opacity: 0.6;
            z-index: 10000;
        }
    </style>
    <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
    <link href="assets/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
@endsection
@section('middle-content')
    <div class="row">
        <div class="col s12"><br>
            <div class="page-title">Registro de Reservas Grupales</div>
        </div>
        <div class="col s12 m12 l12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Lista de usuarios</span>
                    <a class="waves-effect waves-light btn m-b-xs" id="createuserbutton1"><i class="material-icons left">cloud</i>Registrar Usuario</a>
                    @extends('modals.createGroupUser')
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="col s12 m12"><br>
                <form id="formReservationStore" action="{{url('/groupreservation/store')}}" enctype="multipart/form-data"  method="POST">
                    {{ csrf_field() }}
                    <div class="row">

                        <div class="input-field col s5">
                            <input placeholder="Ingrese cliente" id="cliente" type="text" class="validate">
                            <label for="cliente" class="active">Cliente</label>
                        </div>
                        <div class="input-field col s1 m1 l1">
                            <input type="hidden" id="id-person" name="id-person">
                        </div>


                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <input placeholder="Ingrese cantidad de personas" id="cantidadPersonas" name="cantidadPersonas" type="text" class="validate">
                            <label for="cantidadPersonas" class="active">Numero de Personas</label>
                        </div>
                        <div class="input-field col s1 m1 l1">
                            <input type="hidden" id="role_id" name="role_id" value="{{ Auth::user()->role_id }}">
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
                </form>
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


    <script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/alpha.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax_user2.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript">
        $('#cliente').autocomplete({
            source: '{!! url('/buscarEncargado') !!}',
            minlength:1,
            select:function (event, ui) {
                $('#id-person').val(ui.item.id);
            }
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
                    if(obj==0)
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
    <!--<script src="assets/js/pages/miscellaneous-sweetalert.js"></script>-->
@endsection