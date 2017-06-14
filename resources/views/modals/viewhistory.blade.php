<div id="modal2" class="modal">
    <div class="modal-content">
        <h3><b>DETALLES DE LA RESERVA</b></h3>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    
                    <form class="col s12">
                        <div class="row">
                            
                            <div class="out-field col s4">
                                <input placeholder="" id="id_reservation" type="label" class="validate" disabled>
                                <label for="id_reservation" class="active" >Nº de Reserva</label>
                            </div>
                            <div class="out-field col s4">
                                <input placeholder="" id="date" type="label" class="validate" disabled>
                                <label for="date" class="active">Fecha de Registro</label>
                            </div>
                        </div>

                        <div class="row">
                            <input type="hidden" id="id_reservation" class="validate">
                            <div class="out-field col s4">
                                <input placeholder="" id="ckechin" type="label" class="validate" disabled>
                                <label for="ckechin" class="active" >Fecha de entrada</label>
                            </div>
                            <div class="out-field col s4">
                                <input placeholder="" id="ckechout" type="label" class="validate" disabled>
                                <label for="ckechout" class="active">Fecha de Salida</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="out-field col s4">
                                <input placeholder="" id="total" type="label" class="validate" disabled>
                                <label for="total" class="active">Costo Total</label>
                            </div>
                             <div class="out-field col s4">
                                <input placeholder="" id="type_reservation" type="label" class="validate" disabled>
                                <label for="type_reservation" class="active">Tipo de reserva</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-default btn-detail edit modal-close">
            Volver
        </button>




    </div>
</div>