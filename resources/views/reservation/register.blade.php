
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
                <div class="card">
                    <div  class="card-content" >
                        <center>
                            <a class="waves-effect waves-light btn red m-b-xs"><i class="material-icons left">cloud</i>Cancelar</a>
                            <button class="waves-effect waves-light btn green m-b-xs" type="submit"><i class="material-icons left">cloud</i>Aceptar</button>
                        </center>
                    </div>
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
                                <div class="collection">
                                    <div class="input-field col s10 m10 l10">
                                        <i class="material-icons prefix">store</i>
                                        <input id="tipo_habitacion" name="tipo_habitacion" type="text" class="validate">
                                        <input type="hidden" id="id" name="id" value="{!! Auth::user()->id !!}">
                                        <input type="hidden" id="role_id" name="role_id" value="{{ Auth::user()->role_id }}">
                                        <input type="hidden" id="room_type_id" name="room_type_id">
                                        <input type="hidden" id="room_type_id" name="room_id">
                                        <input type="hidden" id="precio" name="precio">
                                        <label for="icon_prefix" class="">Tipo de Habitacion</label>
                                    </div>
                                    <div class="input-field col s2 m2 l1">
                                        <button class="btn-floating btn-large waves-effect waves-light red" type="submit"><i class="material-icons">add</i></button>
                                    </div>
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
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <form id="example-form" action="#" novalidate="novalidate">
                            <div role="application" class="wizard clearfix" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist" class="tabs z-depth-1" style="width: 100%;"><li role="tab" class="first current tab" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0" class="active"><span class="current-info audible">current step: </span><span class="number">1.</span> Personal Info</a></li><li role="tab" class="disabled tab" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="number">2.</span> Product Info</a></li><li role="tab" class="disabled tab" aria-disabled="true"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="number">3.</span> Privacy &amp; Terms</a></li><li role="tab" class="disabled last tab" aria-disabled="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="number">4.</span> Finish</a></li><div class="indicator" style="right: 304.25px; left: 0px;"></div></ul></div><div class="content clearfix">
                                    <h3 id="steps-uid-0-h-0" tabindex="-1" class="title current">Personal Info</h3>
                                    <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">

                                        <div class="wizard-content">
                                            <div class="row">
                                                <div class="col m12">
                                                    <form action="{{ url('/reservation/store') }}" id="formReservationStore" method="POST">
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <label for="firstName">Nombres</label>
                                                                <input id="firstName" name="firstName" type="text" class="required validate" aria-required="true">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="lastName">Apellidos</label>
                                                                <input id="lastName" name="lastName" type="text" class="required validate" aria-required="true">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="firstName">Carnet identidad</label>
                                                                <input id="firstName" name="firstName" type="text" class="required validate" aria-required="true">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="firstName">Telefono</label>
                                                                <input id="firstName" name="firstName" type="text" class="required validate" aria-required="true">
                                                            </div>

                                                            <div class="input-field col m6 s12">
                                                                <label for="email">Email</label>
                                                                <input id="email" name="email" type="email" class="required validate" aria-required="true">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <div class="select-wrapper">
                                                                    <div class="select-wrapper initialized">
                                                                        <span class="caret">▼</span>
                                                                        <select id="countrySelect" class="initialized">
                                                                            <option value="">Sexo...</option>
                                                                            <option value="AF">Masculino</option>
                                                                            <option value="AL">Femenino</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                    <h3 id="steps-uid-0-h-1" tabindex="-1" class="title" style="display: none;">Product Info</h3>
                                    <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
                                        <div class="wizard-content">
                                            <div class="row">
                                                <div class="col m3 s12 center-align">
                                                    <img src="assets/images/wizard-image.png" class="m-b-lg" alt="">
                                                    <p class="grey-text center-align">Steelcoders ©</p>
                                                </div>
                                                <div class="col m9 s12">
                                                    <h5><b>Alpha - Responsive Admin Dashboard Template</b></h5>
                                                    <div class="row m-t-lg">
                                                        <div class="col m6">
                                                            <p class="no-p">Features:</p>
                                                            <ul>
                                                                <li><b>Layout:</b> Responsive</li>
                                                                <li><b>Framework:</b> MaterializeCSS</li>
                                                                <li><b>Compatible Browsers:</b> IE9, IE10, IE11, Firefox, Safari, Opera, Chrome</li>
                                                                <li><b>Documentation:</b> Well Documented</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col m6">
                                                            <div class="input-field col m12 s12">
                                                                <div class="select-wrapper required validate" aria-required="true"><div class="select-wrapper required validate initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-2dec39a1-1f12-67e5-363c-3cb29c1bb4f2" value="Regular License"><ul id="select-options-2dec39a1-1f12-67e5-363c-3cb29c1bb4f2" class="dropdown-content select-dropdown "><li class=""><span>Regular License</span></li><li class=""><span>Extended License</span></li></ul><select id="licenseSelect" class="required validate initialized" aria-required="true">
                                                                            <option value="rl">Regular License</option>
                                                                            <option value="el">Extended License</option>
                                                                        </select></div></div>
                                                            </div>
                                                            <div class="input-field col m12 s12">
                                                                <label for="quantity">Quantity</label>
                                                                <input id="quantity" name="quantity" type="number" class="required validate" aria-required="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h3 id="steps-uid-0-h-2" tabindex="-1" class="title" style="display: none;">Privacy &amp; Terms</h3>
                                    <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
                                        <div class="wizard-content">
                                            <div class="wizardTerms">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel risus elit. Nunc tempor velit dui, sed gravida urna posuere in. Cras sollicitudin urna at sapien vestibulum commodo quis eget tellus. Nam dapibus fringilla nulla, ac interdum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus at enim lectus. Phasellus commodo, massa vel congue fermentum, ligula erat egestas turpis, at tempor tellus nulla at nunc. Proin in ornare diam. Proin egestas sodales dolor at rutrum. Suspendisse eu ipsum feugiat, sollicitudin mi eu, tincidunt nibh. Etiam et orci nulla. Sed condimentum orci vel maximus egestas.<br><br>Donec malesuada urna sed orci venenatis ultricies nec eu enim. Vestibulum accumsan iaculis ligula, ac semper risus feugiat ut. Suspendisse tincidunt iaculis ante at eleifend. Maecenas ac nulla varius, vehicula tellus vitae, placerat ipsum. Suspendisse nunc nibh, efficitur non mollis in, pulvinar volutpat metus. Nulla sit amet tortor vestibulum, porttitor dui sed, porta ex. Mauris at justo in sapien semper efficitur quis eget orci. Donec pellentesque leo sit amet dui pharetra condimentum. Nullam eleifend tempor augue, non rutrum nibh tristique non. Nullam eget pellentesque nisi. Aenean nibh ipsum, suscipit id imperdiet vitae, sodales et lacus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed at ex turpis. Donec tempor molestie leo eget rutrum. Suspendisse quis nunc a nibh luctus cursus. Fusce vel varius nibh.<br><br>Duis dapibus consequat iaculis. Maecenas fringilla velit ligula, non mattis enim vehicula ut. Suspendisse ipsum ante, pellentesque quis auctor eu, ullamcorper ac ligula. Morbi laoreet consectetur leo. Nam lacus felis, feugiat eget felis eget, lobortis dictum justo. Aenean congue magna at eros rutrum, ut volutpat risus porta. Vivamus arcu lectus, accumsan sit amet mauris ut, tristique sollicitudin sapien. Sed pulvinar feugiat justo, eu mattis sem consequat blandit. Duis blandit purus sit amet sem ornare accumsan. Donec ullamcorper ante enim, sed pretium odio ultricies ac. Duis nec sapien efficitur, faucibus erat ut, bibendum diam. Cras tempus mattis sapien eu feugiat. Aenean risus dui, semper eget velit in, ultrices convallis velit. Morbi a velit dictum, egestas orci eu, venenatis felis. Sed feugiat eros eget orci semper finibus.<br><br>Vivamus in metus lobortis, bibendum mauris dignissim, dapibus justo. Nunc tempor lacus dolor, nec venenatis neque scelerisque sed. Fusce quis est ac erat condimentum posuere. Pellentesque eleifend mauris dui, eu volutpat elit commodo id. Donec faucibus, enim nec luctus elementum, orci justo faucibus dui, ut porttitor lectus neque id leo. Proin viverra diam lacus, rutrum feugiat eros tempor eu. Sed et lorem eu lectus interdum aliquet. In pretium luctus arcu ut pellentesque. Nam faucibus posuere leo, in vehicula mauris vestibulum non.<br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam fringilla efficitur sapien at volutpat. Vivamus nec enim est. Quisque sit amet ex non ex lobortis pulvinar vel id sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean ut nisl ac ipsum suscipit consectetur. Vestibulum in sodales turpis, eget elementum ipsum. Suspendisse ac magna sed turpis porttitor efficitur quis ac dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus convallis gravida lacus nec efficitur. Mauris euismod ex accumsan, convallis ante non, varius dui. Nam nec quam feugiat justo rhoncus aliquam. Phasellus lectus nisl, tristique vitae pellentesque ut, faucibus id turpis.


                                            </div>
                                            <p>By clicking Next you agree with the Terms and Conditions!</p>
                                        </div>
                                    </section>
                                    <h3 id="steps-uid-0-h-3" tabindex="-1" class="title" style="display: none;">Finish</h3>
                                    <section id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
                                        <div class="wizard-content">
                                            Congratulations! You got the last step.
                                        </div>
                                    </section>
                                </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem" class="waves-effect waves-blue btn-flat">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem" class="waves-effect waves-blue btn-flat">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem" class="waves-effect waves-blue btn-flat">Finish</a></li></ul></div></div>
                        </form>
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
                        $('#room_type_id').val(ui.item.id_room_type);
                        $('#room_id').val(ui.item.id_room);
                        //$('#cantidad').val(ui.item.cantidad);
                        $('#precio').val(ui.item.precio);
                    }
                });
            </script>
@endsection

