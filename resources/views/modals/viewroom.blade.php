<div id="modal1" class="modal">
    <div class="modal-content">
        <h4><b>EDITAR USUARIO</b></h4>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <span ><b>Datos Persona</b></span>
                    <form class="col s12">
                        <div class="row">
                            <input type="hidden" id="id_room" class="validate">
                            <div class="input-field col s6">
                                <input placeholder="Paquete" id="pack" type="text" class="validate">
                                <label for="pack" class="active">Nombres</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Tipo de habitacion" id="room_type" type="text" class="validate">
                                <label for="room_type" class="active">Apellido</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input placeholder="Estado" id="availability" type="text" class="validate">
                                <label for="availability" class="active">Estado</label>
                            </div>


                        </div>
                        <!-- <div class="row">
                             <span ><b>Datos Cuenta</b></span><br><br>
                             <div class="input-field col s6">
                                 <input placeholder="Correo electronico" id="email" type="text" class="validate">
                                 <label for="email" class="active">Correo electronico</label>
                             </div>
                             <div class="input-field col s6">
                                 <input placeholder="Contraseña" id="password" type="password" class="validate">
                                 <label for="password" class="active">Contraseña</label>
                             </div>
                         </div>-->
                    </form>
                    <div align='right' class="row">
                        <div class="col s8">
                            <div class="page-title">Calendar</div>
                        </div>
                        <div class="col s8 m8 l8">
                            <div class="card">
                                <div class="card-content">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default btn-detail edit modal-close">
            Aceptar
        </button>
        <button type="button" class="btn btn-warning modal-close" data-dismiss="modal">
            <span class='glyphicon glyphicon-remove'></span> Cerrar
        </button>

    </div>
</div>