<div id="createpackmodal" class="modal">
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
                                <input placeholder="Paquetes" id="packc" name="packc" type="text" class="validate">
                                <label for="first_name" class="active">Paquete</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Precio" id="pricec" name="pricec" type="text" class="validate">
                                <label for="first_name" class="active">Precio</label>
                            </div>
                        </div>
                        <div class="row">
                            <p>Servicios del paquete</p><br>
                            <select class="js-states browser-default" multiple="multiple" tabindex="-1" style="width: 100%" id="multiple" name="multiple[]">

                                    <option value="night">2 noches</option>
                                    <option value="breakfast">Desayuno incluido</option>
                                    <option value="dinner">Cena incluida</option>
                                    <option value="event">Acceso a salon de eventos</option>

                            </select>
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
        <button class="btn btn-default btn-detail crubutton modal-close" id="crpmbutton">
            Aceptar
        </button>
        <button type="button" class="btn btn-warning modal-close" data-dismiss="modal">
            <span class='glyphicon glyphicon-remove'></span> Cerrar
        </button>

    </div>
</div>