<div id="modal1" class="modal">
    <div class="modal-content">
        <h4><b>EDITAR USUARIO</b></h4>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <span ><b>Datos Persona</b></span>
                    <form class="col s12">
                        <div class="row">
                            <input type="hidden" id="id_person" class="validate">
                            <div class="input-field col s6">
                                <input placeholder="Nombres" id="name" type="text" class="validate">
                                <label for="first_name" class="active">Nombres</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Apellido" id="last_name" type="text" class="validate">
                                <label for="first_name" class="active">Apellido</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input placeholder="Telefono" id="phone" type="text" class="validate">
                                <label for="first_name" class="active">Telefono</label>
                            </div>
                            <div class="input-field col s4">
                                <input placeholder="Sexo" id="sex" type="text" class="validate">
                                <label for="first_name" class="active">Sexo</label>
                            </div>
                            <div class="input-field col s4">
                                <input placeholder="Nacionalidad" id="nationality" type="text" class="validate">
                                <label for="first_name" class="active">Nacionalidad</label>
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