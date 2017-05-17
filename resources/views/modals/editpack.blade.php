<div id="packmodal" class="modal">
    <div class="modal-content">
        <h4><b>EDITAR PAQUETE</b></h4>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <span ><b>Datos Paquete</b></span>
                    <form class="col s12">
                        <div class="row">

                            <input type="hidden" id="id_pack" class="validate">
                            <div class="input-field col s6">
                                <input placeholder="Nombres" id="pack" type="text" class="validate">
                                <label for="first_name" class="active">Paquete</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Apellido" id="price" type="number" class="validate">
                                <label for="first_name" class="active">Precio</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Apellido" id="description" type="text" class="validate">
                                <label for="first_name" class="active">Descripcion</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default btn-detail editpackbutton modal-close" >
            Aceptar
        </button>
        <button type="button" class="btn btn-warning modal-close" data-dismiss="modal">
            <span class='glyphicon glyphicon-remove'></span> Cerrar
        </button>

    </div>
</div>