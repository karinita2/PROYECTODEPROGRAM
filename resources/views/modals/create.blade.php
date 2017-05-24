<div id="createusermodal" class="modal">
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
                                <input placeholder="Nombres" id="namec" name="namec" type="text" class="validate">
                                <label for="first_name" class="active">Nombres</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Apellido" id="last_namec" name="last_namec" type="text" class="validate">
                                <label for="first_name" class="active">Apellido</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input placeholder="Telefono" id="phonec" name="phonec" type="text" class="validate">
                                <label for="first_name" class="active">Telefono</label>
                            </div>
                            <div class="input-field col s4">
                                <input placeholder="Sexo" id="sexc" name="sexc" type="text" class="validate">
                                <label for="first_name" class="active">Sexo</label>
                            </div>
                            <div class="input-field col s4">
                                <input placeholder="Nacionalidad" id="nationalityc" name="nationalityc" type="text" class="validate">
                                <label for="first_name" class="active">Nacionalidad</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input placeholder="email" id="emailc" name="emailc" type="text" class="validate">
                                <label for="first_name" class="active">Email</label>
                            </div>
                            <div class="input-field col s4">
                                <input placeholder="password" id="passwordc" name="passwordc" type="password" class="validate">
                                <label for="first_name" class="active">Password</label>
                            </div>
                            <div class="input-field col s4">
                                <input placeholder="repetir password" id="repasswordc" name="repasswordc" type="password" class="validate">
                                <label for="first_name" class="active">Password</label>
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
        <button class="btn btn-default btn-detail crubutton modal-close" id="crumbutton">
            Aceptar
        </button>
        <button type="button" class="btn btn-warning modal-close" data-dismiss="modal">
            <span class='glyphicon glyphicon-remove'></span> Cerrar
        </button>

    </div>
</div>