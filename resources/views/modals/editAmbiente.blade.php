
<div id="modal3" class="modal">
	<div class="modal-content">
		<h4><b>EDITAR USUARIO</b></h4>
		<div class="col s12 m12 l6">
			<div class="card">
				<div class="card-content">
					<span ><b>Seleccione los Ambientes que desea agregar</b></span>
					<form class="col s12" id="services" action="{{ url('/addAmbientes') }}" method="POST">
{{ csrf_field() }}
<input type="hidden" id="id_reservation" name="id_reservation">
<input type="hidden" id="id_detail" name="id_detail">
<input type="hidden" id="price" name="price">
<p class="p-v-xs">
    <input type="checkbox" id="conferencia" name="service[]" value="Conferencia">
    <label for="conferencia">Sala de Conferencias</label>
</p>
<p class="p-v-xs">
    <input type="checkbox" id="eventos" name="service[]" value="Eventos">
    <label for="eventos">Salon de Eventos</label>
</p>
<p class="p-v-xs">
    <input type="checkbox" id="reuniones" name="service[]" value="Reuniones">
    <label for="reuniones">Sala de Reuniones</label>
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