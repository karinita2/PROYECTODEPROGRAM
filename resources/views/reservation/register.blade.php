
@extends('layouts.head')
@section('middle-content')

    <div class="row">
        <div class="col s12">
            <div class="page-title">Formulario de reservas</div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Datos Personales</span><br>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix" class="">Nombre(s)</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix" class="">Apellido(s)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix" class="">Telefono</label>
                                </div>
                                <div class="input-field col s6">
                                    <input placeholder="" id="mask4" class="masked" type="text" data-inputmask="'mask': '(999) 999-9999'">
                                    <label for="mask4" class="active">Phone</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Custom Error or Success Messages</span><br>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email2" type="email" class="validate">
                                    <label for="email2" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Radio Buttons</span><br>
                    <div class="row">
                        <form class="col s12">
                            <p class="p-v-xs">
                                <input name="group1" type="radio" id="test1">
                                <label for="test1">Red</label>
                            </p>
                            <p class="p-v-xs">
                                <input name="group1" type="radio" id="test2">
                                <label for="test2">Yellow</label>
                            </p>
                            <p class="p-v-xs">
                                <input class="with-gap" name="group1" type="radio" id="test3">
                                <label for="test3">Green</label>
                            </p>
                            <p class="p-v-xs">
                                <input name="group1" type="radio" id="test4" disabled="disabled">
                                <label for="test4">Brown</label>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Checkboxes</span><br>
                    <div class="row">
                        <form class="col s12" action="#">
                            <p class="p-v-xs">
                                <input type="checkbox" id="test5">
                                <label for="test5">Red</label>
                            </p>
                            <p class="p-v-xs">
                                <input type="checkbox" id="test6" checked="checked">
                                <label for="test6">Yellow</label>
                            </p>
                            <p class="p-v-xs">
                                <input type="checkbox" class="filled-in" id="filled-in-box-example" checked="checked">
                                <label for="filled-in-box-example">Filled in</label>
                            </p>
                            <p class="p-v-xs">
                                <input type="checkbox" id="test7" checked="checked" disabled="disabled">
                                <label for="test7">Green</label>
                            </p>
                            <p class="p-v-xs">
                                <input type="checkbox" id="test8" disabled="disabled">
                                <label for="test8">Brown</label>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Date Picker</span>
                    <div class="row">
                        <div class="col s12">
                            <label for="birthdate">Birthdate</label>
                            <input id="birthdate" type="text" class="datepicker picker__input" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="birthdate_root"><div class="picker" id="birthdate_root" tabindex="0" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__date-display"><div class="picker__weekday-display">Sunday</div><div class="picker__month-display"><div>May</div></div><div class="picker__day-display"><div>14</div></div><div class="picker__year-display"><div>2017</div></div></div><div class="picker__calendar-container"><div class="picker__header"><select class="picker__select--month browser-default" disabled="" aria-controls="birthdate_table" title="Select a month"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4" selected="">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><select class="picker__select--year browser-default" disabled="" aria-controls="birthdate_table" title="Select a year"><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="birthdate_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="birthdate_table" title="Next month"> </div></div><table class="picker__table" id="birthdate_table" role="grid" aria-controls="birthdate" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">S</th><th class="picker__weekday" scope="col" title="Monday">M</th><th class="picker__weekday" scope="col" title="Tuesday">T</th><th class="picker__weekday" scope="col" title="Wednesday">W</th><th class="picker__weekday" scope="col" title="Thursday">T</th><th class="picker__weekday" scope="col" title="Friday">F</th><th class="picker__weekday" scope="col" title="Saturday">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1493524800000" role="gridcell" aria-label="30 April, 2017">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1493611200000" role="gridcell" aria-label="1 May, 2017">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1493697600000" role="gridcell" aria-label="2 May, 2017">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1493784000000" role="gridcell" aria-label="3 May, 2017">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1493870400000" role="gridcell" aria-label="4 May, 2017">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1493956800000" role="gridcell" aria-label="5 May, 2017">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494043200000" role="gridcell" aria-label="6 May, 2017">6</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494129600000" role="gridcell" aria-label="7 May, 2017">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494216000000" role="gridcell" aria-label="8 May, 2017">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494302400000" role="gridcell" aria-label="9 May, 2017">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494388800000" role="gridcell" aria-label="10 May, 2017">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494475200000" role="gridcell" aria-label="11 May, 2017">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494561600000" role="gridcell" aria-label="12 May, 2017">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494648000000" role="gridcell" aria-label="13 May, 2017">13</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1494734400000" role="gridcell" aria-label="14 May, 2017" aria-activedescendant="true">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494820800000" role="gridcell" aria-label="15 May, 2017">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494907200000" role="gridcell" aria-label="16 May, 2017">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1494993600000" role="gridcell" aria-label="17 May, 2017">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495080000000" role="gridcell" aria-label="18 May, 2017">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495166400000" role="gridcell" aria-label="19 May, 2017">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495252800000" role="gridcell" aria-label="20 May, 2017">20</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495339200000" role="gridcell" aria-label="21 May, 2017">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495425600000" role="gridcell" aria-label="22 May, 2017">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495512000000" role="gridcell" aria-label="23 May, 2017">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495598400000" role="gridcell" aria-label="24 May, 2017">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495684800000" role="gridcell" aria-label="25 May, 2017">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495771200000" role="gridcell" aria-label="26 May, 2017">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495857600000" role="gridcell" aria-label="27 May, 2017">27</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1495944000000" role="gridcell" aria-label="28 May, 2017">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1496030400000" role="gridcell" aria-label="29 May, 2017">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1496116800000" role="gridcell" aria-label="30 May, 2017">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1496203200000" role="gridcell" aria-label="31 May, 2017">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496289600000" role="gridcell" aria-label="1 June, 2017">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496376000000" role="gridcell" aria-label="2 June, 2017">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496462400000" role="gridcell" aria-label="3 June, 2017">3</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496548800000" role="gridcell" aria-label="4 June, 2017">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496635200000" role="gridcell" aria-label="5 June, 2017">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496721600000" role="gridcell" aria-label="6 June, 2017">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496808000000" role="gridcell" aria-label="7 June, 2017">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496894400000" role="gridcell" aria-label="8 June, 2017">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1496980800000" role="gridcell" aria-label="9 June, 2017">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1497067200000" role="gridcell" aria-label="10 June, 2017">10</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1494734400000" disabled="" aria-controls="birthdate">Today</button><button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="birthdate">Clear</button><button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="birthdate">Close</button></div></div></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Autocomplete</span>
                    <div class="row">
                        <div class="col s12 m-b-xs">
                            <small>For example, type 'Goog'</small>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">textsms</i>
                            <input type="text" id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Autocomplete</label>
                            <ul class="autocomplete-content dropdown-content"></ul></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Icon Prefixes</span><br>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix" class="">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="icon_telephone" type="tel" class="validate">
                                    <label for="icon_telephone" class="">Telephone</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">First Name</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Select</span><br>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="select-wrapper"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-26834459-a608-fa63-4a45-ad568907a4ad" value="Choose your option"><ul id="select-options-26834459-a608-fa63-4a45-ad568907a4ad" class="dropdown-content select-dropdown "><li class="disabled "><span>Choose your option</span></li><li class=""><span>Option 1</span></li><li class=""><span>Option 2</span></li><li class=""><span>Option 3</span></li></ul><select class="initialized">
                                    <option value="" disabled="" selected="">Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select></div>
                            <label>Materialize Select</label>
                        </div>
                        <div class="col s12">
                            <label>Browser Select</label>
                            <select class="browser-default">
                                <option value="" disabled="" selected="">Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col s12">
                        <p>You can also add <code>disabled</code> to the select element to make the whole thing disabled. Or if you add disabled to the options, the individual options will be unselectable.</p><br></div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="select-wrapper"><span class="caret disabled">▼</span><input type="text" class="select-dropdown" readonly="true" disabled="" data-activates="select-options-2f95efc8-25cb-b70c-8142-06442a1d90cc" value="Choose your option"><ul id="select-options-2f95efc8-25cb-b70c-8142-06442a1d90cc" class="dropdown-content select-dropdown "><li class="disabled "><span>Choose your option</span></li><li class=""><span>Option 1</span></li><li class=""><span>Option 2</span></li><li class=""><span>Option 3</span></li></ul><select disabled="" class="initialized">
                                    <option value="" disabled="" selected="">Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select></div>
                            <label>Materialize Disabled</label>
                        </div>
                        <div class="col s12">
                            <select class="browser-default" disabled="">
                                <option value="" disabled="" selected="">Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Switches</span><br>
                    <div class="row">
                        <div class="col s12">
                            <!-- Switch -->
                            <div class="switch m-b-md">
                                <label>
                                    Off
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    On
                                </label>
                            </div>
                            <!-- Disabled Switch -->
                            <div class="switch m-b-md">
                                <label>
                                    Off
                                    <input disabled="" type="checkbox">
                                    <span class="lever"></span>
                                    On
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">File Input</span>
                    <div class="row">
                        <div class="col s12">
                            <form action="#" class="p-v-xs">
                                <div class="file-field input-field">
                                    <div class="btn teal lighten-1">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </form>
                            <form action="#" class="p-v-xs">
                                <div class="file-field input-field">
                                    <div class="btn teal lighten-1">
                                        <span>File</span>
                                        <input type="file" multiple="">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Range</span>
                    <div class="row">
                        <div class="col s12">
                            <form action="#">
                                <p class="range-field">
                                    <input type="range" id="test-range" min="0" max="100"><span class="thumb"><span class="value"></span></span>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Character Counter</span>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea" length="120"></textarea>
                                    <label for="textarea1">Textarea</label>
                                    <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>


@endsection