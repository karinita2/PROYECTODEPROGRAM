@extends('layouts.head')
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
@section('css')
@endsection

@section('middle-content')
	<div class="row">
		<div class="s12">
			<b><h2>REGISTRO DE RESERVAS </h2></b>
		</div>
		<div class="col s12 m12"><br>
				<br>
				<form action="{{ url('/reservation/register') }}" id="formReservationStore" method="POST">
						{{ csrf_field() }}
					<div class="input-field col s6 s6 l6" >
							<i class="material-icons prefix">account_circle</i>
							<input id="cliente" name="cliente" type="text" class="validate">

							<label for="cliente" class="">Nombre, Apellido o NITCI</label>
					</div>
					<input type="hidden" id="id_person" name="id_person">
					<div class="input-field col m6 s6 l6">
						<div class="select-wrapper">
							<div class="select-wrapper initialized">
								<span class="caret">▼</span>
								<select id="room_type" name="room_type" class="initialized">
									<option value="default">Tipo Habitación...</option>
									<option value="1">suit</option>
									<option value="2">matrimonio</option>
									<option value="3">simple</option>
								</select>
								<input type="hidden" name="room_type_id" id="room_type_id">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s3 m3 l3">
							<i class="material-icons prefix">open_in_browser</i>
							<input placeholder="" id="checkin" name="checkin" type="date">
							<label for="fechabautismo" class="active"><b>Fecha de inicio </b></label>
						</div>
						<div class="input-field col s3 m3 l3">
							<i class="material-icons prefix">open_in_browser</i>
							<input placeholder="" id="checkout" name="checkout" type="date">
							<label for="fechabautismo" class="active"><b>Fecha de salida </b></label>
						</div>
					</div>

					<div class="input-field col s4 m4 l4" align="center">
						<button class="waves-effect waves-light btn green" type="submit"><i class="material-icons right">cloud</i>Siguiente</button>
						<a class="waves-effect waves-light btn red modal-trigger" href="#modal1"><i class="material-icons left">cloud</i>Registrar Cliente</a>
					</div>
					@extends('modals.createUser')
				</form>
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
	<script src="assets/js/alpha.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/jquery.validate.js"></script>

	<script type="text/javascript">
        $('#cliente').autocomplete({
            source: '{!! url('/buscarCliente') !!}',
            minlength:1,
            autoFocus:true,
            select:function (e, ui) {
                $('#id_person').val(ui.item.id);
            }
        });
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