<div id="modal1" class="modal">
	<div class="modal-content">
		<h4><b>EDITAR USUARIO</b></h4>
		<div class="col s12 m12 l6">
			<div class="card">
				<div class="card-content">
					<span ><b>Seleccion los servicios que quiere agregar a su habitacion</b></span>
					<form class="col s12" id="services" action="{{ url('/addServices') }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" id="id_reservation" name="id_reservation">
						<input type="hidden" id="id_detail" name="id_detail">
						<input type="hidden" id="price" name="price">
						<p class="p-v-xs">
							<input type="checkbox" id="cuna" name="service[]" value="Cuna">
							<label for="cuna">cuna</label>
						</p>
						<p class="p-v-xs">
							<input type="checkbox" id="cama" name="service[]" value="Cama">
							<label for="cama">cama</label>
						</p>
						<p class="p-v-xs">
							<input type="checkbox" id="wifi" name="service[]" value="Wifi">
							<label for="wifi">wifi</label>
						</p>
						<p class="p-v-xs">
							<input type="checkbox" id="restaurante" name="service[]" value="Restaurante">
							<label for="restaurante">restaurante</label>
						</p>
						<p class="p-v-xs">
							<input type="checkbox" id="limpieza" name="service[]" value="Limpieza">
							<label for="limpieza">limpieza</label>
						</p>
						<div class="modal-footer">
							<button class="btn btn-default btn-detail edit">
								Aceptar
							</button>
							<button type="button" class="btn btn-warning modal-close" data-dismiss="modal">
								<span class='glyphicon glyphicon-remove'></span> Cerrar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

</div>