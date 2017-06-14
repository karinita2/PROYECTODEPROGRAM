@extends('layouts.head')
@section('css')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
@endsection
@section('middle-content')
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<sect class="w3-theme-l5">

<!-- Page Container -->
<div class="input-field col s12 center">
    <font color="black"><h3>Perfil de usuario</h3></font>
</div>
<br>
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container">
                    <h4 class="w3-center">Mi Perfil</h4>
                    <p class="w3-center"><img src="assets/images/profile-image.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                    <hr>
                    <!--{{print_r($users)}}}-->
                    @foreach($users as $user)
                        @if ($user->id == Auth::user()->id)
                    <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Nombre: {{$user->name }}</p>
                    <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Apellido: {{$user->last_name }} </p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Telefono:{{$user->phone }}</p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> sexo: {{$user->sex }}</p>
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Nacionalidad: {{$user->nationality }}</p>
                        @endif
                        @endforeach
                </div>
            </div>
            <br>

            <!-- Accordion -->
            <div class="w3-card-2 w3-round">
                <div class="w3-white">
                    <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Mis Intereses</button>
                    <div id="Demo3" class="w3-hide w3-container">
                        <div class="w3-row-padding">
                            <br>
                            <div class="w3-half">
                                <img src="assets/images/1.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="/assets/images/2.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="assets/images/3.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="assets/images/4.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="assets/images/5.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                            <div class="w3-half">
                                <img src="assets/images/6.jpg" style="width:100%" class="w3-margin-bottom">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="w3-col m9">

            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card-2 w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h4 class="w3-center">Registro de actividad</h4>
                            <ul class="list-unstyled user_data">
                                <li>
                                    <p><strong>TIEMPO DE CONEXION</strong></p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                    </div>
                                </li>
                                <li>
                                    <p><strong>CANTIDAD RESERVAS</strong></p>
                                    <div class="progress progress_sm">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="90"></div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <center>

                            {!! link_to_route('profile.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']) !!}


                        </center>
                        <br>
                    </div>
                </div>
            </div>
            <!-- End Middle Column -->
        </div>


        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>
<br>


@section('js')
    <script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
    <script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
    <script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
    <script src="{{asset('assets/js/alpha.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.js')}}"></script>

<script>
    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            x.previousElementSibling.className += " w3-theme-d1";
        } else {
            x.className = x.className.replace("w3-show", "");
            x.previousElementSibling.className =
                x.previousElementSibling.className.replace(" w3-theme-d1", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>

@endsection
@endsection
