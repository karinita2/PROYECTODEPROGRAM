
@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
@endsection
@section('middle-content')

    <div class="row">
        <div class="col s12">
            <div class="page-title"><h5>Formulario de reservas</h5></div>
        </div>
        <div class="col s12 m6 l6">
                <form action="{{ url('/reservation/store') }}" id="formReservationStore" method="POST">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Datos Personales</span><br>
                        <div class="row">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">credit_card</i>
                                        <input id="carnet" type="text" class="validate" name="carnet">
                                        <input type="hidden" id="id" name="id" value="{!! Auth::user()->id !!}">
                                        <input type="hidden" id="tipo" name="tipo" value="{{ Auth::user()->role_id }}">
                                        <label for="icon_prefix" class="">Carnet de Identidad</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m6 l6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="nombre" type="text" class="validate" name="nombre">
                                        <label for="icon_prefix" class="">Nombre(s)</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="nombre" type="text" class="validate" name="apellidos">
                                        <label for="icon_prefix" class="">Apellido(s)</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m6 l6">
                                        <i class="material-icons prefix">phone</i>
                                        <input id="telefono" type="number" class="validate" name="telefono">
                                        <label for="icon_prefix" class="">Teléfono</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <div class="select-wrapper">
                                            <select id="sexo" class="initialized" name="sexo">
                                                <option value="" disabled="" selected="">Sexo</option>
                                                <option value="masculino">Masculino</option>
                                                <option value="femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" type="email" class="validate" name="email">
                                        <label for="email2" data-error="wrong" data-success="right">Email</label>
                                    </div>

                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">location_on</i>
                                    <div class="select-wrapper">
                                        <select class="initialized" id="nacionalidad" name="nacionalidad">
                                            <option value="" disabled="" selected="">Nacionalidad</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AG">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AG">Antigua &amp; Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AA">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BL">Bonaire</option>
                                            <option value="BA">Bosnia &amp; Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BR">Brazil</option>
                                            <option value="BC">British Indian Ocean Ter</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="IC">Canary Islands</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CD">Channel Islands</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CI">Christmas Island</option>
                                            <option value="CS">Cocos Island</option>
                                            <option value="CO">Colombia</option>
                                            <option value="CC">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CT">Cote D'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CB">Curacao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="TM">East Timor</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FA">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="FS">French Southern Ter</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GB">Great Britain</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HW">Hawaii</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IA">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IR">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="NK">Korea North</option>
                                            <option value="KS">Korea South</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macau</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="ME">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="MI">Midway Islands</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Nambia</option>
                                            <option value="NU">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="AN">Netherland Antilles</option>
                                            <option value="NL">Netherlands (Holland, Europe)</option>
                                            <option value="NV">Nevis</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NW">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau Island</option>
                                            <option value="PS">Palestine</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PO">Pitcairn Island</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="ME">Republic of Montenegro</option>
                                            <option value="RS">Republic of Serbia</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="NT">St Barthelemy</option>
                                            <option value="EU">St Eustatius</option>
                                            <option value="HE">St Helena</option>
                                            <option value="KN">St Kitts-Nevis</option>
                                            <option value="LC">St Lucia</option>
                                            <option value="MB">St Maarten</option>
                                            <option value="PM">St Pierre &amp; Miquelon</option>
                                            <option value="VC">St Vincent &amp; Grenadines</option>
                                            <option value="SP">Saipan</option>
                                            <option value="SO">Samoa</option>
                                            <option value="AS">Samoa American</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome &amp; Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="OI">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syria</option>
                                            <option value="TA">Tahiti</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad &amp; Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TU">Turkmenistan</option>
                                            <option value="TC">Turks &amp; Caicos Is</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States of America</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VS">Vatican City State</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="VB">Virgin Islands (Brit)</option>
                                            <option value="VA">Virgin Islands (USA)</option>
                                            <option value="WK">Wake Island</option>
                                            <option value="WF">Wallis &amp; Futana Is</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZR">Zaire</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
                    <div  class="card-content" >
                        <center>
                            <a class="waves-effect waves-light btn red m-b-xs"><i class="material-icons left">cloud</i>Cancelar</a>
                            <button class="waves-effect waves-light btn green m-b-xs" type="submit"><i class="material-icons left">cloud</i>Aceptar</button>
                        </center>
                    </div>
        </form>
        </div>
            <div class="col s12 m6 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Datos de reserva</span><br>
                    <div class="row">
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">open_in_browser</i>
                                    <input placeholder="" id="checkin" name="checkin" type="date">
                                    <label for="fechabautismo" class="active"><b>Check in</b></label>
                                </div>
                                <div class="input-field col s12 m6 l6">
                                    <i class="material-icons prefix">open_in_browser</i>
                                    <input placeholder="" id="checkout" name="checkout" type="date">
                                    <label for="fechabautismo" class="active"><b>Check out</b></label>
                                </div>
                            </div>

                            <div class="row">
                                <form action="{{ url('/addreservation') }}" method="POST" id="formReservation">
                                    {{ csrf_field() }}
                                    <div class="input-field col s6 m6 l6">
                                        <i class="material-icons prefix">store</i>
                                        <input id="tipo_habitacion" name="tipo_habitacion" type="text" class="validate">
                                        <input type="hidden" id="tipo_habitacionId" name="tipo_habitacionId">
                                        <input type="hidden" id="id" name="id" value="{!! Auth::user()->id !!}">
                                        <input type="hidden" id="role_id" name="role_id" value="{{ Auth::user()->role_id }}">
                                        <label for="icon_prefix" class="">Tipo de Habitacion</label>
                                    </div>
                                    <div class="input-field col s12 m6 l6">
                                        <button class="waves-effect waves-light btn green m-b-xs" type="submit"><i class="material-icons left">cloud</i>Adicionar</button>
                                    </div>
                                 </form>

                                <div class="row" id="tableReservation">
                                    <table id="example" class="display responsive-table datatable-example dataTable" role="grid" aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 200px;">Habitaciones</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">Opciones</th>
                                    </tr>
                                    </thead>

                                    <br>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">123456</td>
                                        <td>Juan</td>
                                        <td> <a class="btn-floating blue" style="transform: scaleY(1) scaleX(1) translateY(0px) translateX(0px); opacity: 1;"><i class="material-icons">mode_edit</i></a> <a class="btn-floating red" style="transform: scaleY(1) scaleX(1) translateY(0px) translateX(0px); opacity: 1;"><i class="material-icons">insert_chart</i></a></td>
                                    </tr>
                                    </table>
                                </div>
                            </div>

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
            <script src="assets/js/pages/form_elements.js"></script>
            <script src="assets/js/jquery-ui.js"></script>
            <script src="assets/js/jquery.validate.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {
                    $("#formReservation").validate({
                        rules : {
                            tipo_habitacion : { required : true }
                        },
                        messages : {
                            tipo_habitacion : { required : 'ingrese el tipo de habitacion'}
                        },
                        submitHandler: function(form){
                            var typeHabitacion = $('form').serialize();
                            $("#tableReservation").html("<div class='progress'><div class='indeterminate'></div></div>");
                                $.ajax({
                                   type : "POST",
                                    url : '{!! url('/addreservation') !!}',
                                    data : typeHabitacion,
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

            <script type="text/javascript">
                $('#tipo_habitacion').autocomplete({
                   source: '{!! url('/autocomplete') !!}',
                    minlength:1,
                    //autoFocus:true,
                    select:function (e, ui) {
                        $('#tipo_habitacionId').val(ui.item.id);
                    }
                });
            </script>
@endsection

