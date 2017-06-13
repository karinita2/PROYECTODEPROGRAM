<div id="modal1" class="modal">
	<div class="modal-content">
		<h3 align="center"><b>Registrar Cliente</b></h3>
		<div class="col s12 m12 l6">
			<div class="card">
				<div class="card-content">
					<span ><b>Datos Cliente</b></span>
					<form class="col s12" method="post" id="createUser" action="{{ url('/reservation/store') }}">
						{{ csrf_field() }}
						<div class="row">
							<input type="hidden" id="id_person" class="validate">
								<div class="input-field col s12">
									<i class="material-icons prefix">credit_card</i>
									<input id="carnet" type="text" class="validate" name="carnet">
									<input type="hidden" id="id" name="id" value="{!! Auth::user()->id !!}">
									<input type="hidden" id="role_id" name="role_id" value="{{ Auth::user()->role_id }}">
									<label for="icon_prefix" class="">Carnet de Identidad</label>
								</div>
							<div class="input-field col s6">
								<input placeholder="Nombres" id="name" name="name" type="text" class="validate">
								<label for="first_name" class="active">Nombres</label>
							</div>
							<div class="input-field col s6">
								<input placeholder="Apellido" id="last_name" name="last_name" type="text" class="validate">
								<label for="first_name" class="active">Apellido</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s4">
								<input placeholder="Telefono" id="phone" name="phone" type="text" class="validate">
								<label for="first_name" class="active">Telefono</label>
							</div>
							<div class="input-field col s4">
								<input placeholder="Nacionalidad" id="nationality" name="nationality" type="text" class="validate">
								<label for="first_name" class="active">Nacionalidad</label>
							</div>
							<div class="input-field col s4 m4 l4">
								<i class="material-icons prefix">perm_identity</i>
								<div class="select-wrapper">
									<select class="initialized" id="sex" name="sex">
										<option value="" disabled="" selected="">Elige una opción</option>
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
									</select>
									<label>Sexo</label>
								</div>
							</div>
							<div class="input-field col s12 m12 l12">
								<input placeholder="Correo electronico" id="email" name="email" type="text">
								<label for="email" class="active">Correo electronico</label>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-default create-modal" type="submit">Aceptar</button>
							<button type="button" class="btn btn-warning modal-close" data-dismiss="modal">
								<span class='glyphicon glyphicon-remove'></span> Cerrar
							</button>
						</div>
					</form>
					<div class="row" id="load"></div>

				</div>
			</div>
		</div>
	</div>

</div>