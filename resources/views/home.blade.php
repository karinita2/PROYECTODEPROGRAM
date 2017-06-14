@extends('layouts.head')

@section('middle-content')
    <div class="middle-content">
        <div class="row no-m-t no-m-b">
            <div class="col s12 m12 l4">
                <div class="card stats-card">
                    <div class="card-content">
                        <div class="card-options">
                        </div>
                        <span class="card-title">Reservas</span>
                        <span class="stats-counter"><span class="counter">48190</span><small>Este año</small></span>
                    </div>
                    <div id="sparkline-bar"></div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card stats-card">
                    <div class="card-content">
                        <div class="card-options">
                        </div>
                        <span class="card-title">Visitas página web</span>
                        <span class="stats-counter"><span class="counter">83710</span><small>Este mes</small></span>
                    </div>
                    <div id="sparkline-line"></div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card stats-card">
                    <div class="card-content">
                        <span class="card-title">Clientes</span>
                        <span class="stats-counter"><span class="counter">23230</span><small>Hasta la fecha</small></span>
                        <div class="percent-info green-text">8% <i class="material-icons">trending_up</i></div>
                    </div>
                    <div class="progress stats-card-progress">
                        <div class="determinate" style="width: 70%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-m-t no-m-b">
            <div class="col s12 m12 l8">
                <div class="card visitors-card">
                    <div class="card-content">
                        <div class="card-options">
                            <ul>
                                <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                            </ul>
                        </div>
                        <span class="card-title">Visitantes<span class="secondary-title">Datos de semana anterior</span></span>
                        <div id="flotchart1"></div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card server-card">
                    <div class="card-content">
                        <span class="card-title">Navegadores más usados para ingresar al sistema</span>
                        <div class="stats-info">
                            <ul>
                                <li>Google Chrome<div class="percent-info green-text right">32% <i class="material-icons">trending_up</i></div></li>
                                <li>Safari<div class="percent-info green-text right">7% <i class="material-icons">trending_up</i></div></li>
                                <li>Mozilla Firefox<div class="percent-info green-text right">18% <i class="material-icons">trending_up</i></div></li>
                                <li>Opera<div class="percent-info green-text right">25% <i class="material-icons">trending_up</i></div></li>
                                <li>Internet Explorer<div class="percent-info red-text right">20% <i class="material-icons">trending_down</i></div></li>
                                <li>Maxthon<div class="percent-info red-text right">30% <i class="material-icons">trending_down</i></div></li>
                                <li>Microsoft Edge<div class="percent-info green-text right">2% <i class="material-icons">trending_up</i></div></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="inner-sidebar">
        <span class="inner-sidebar-title">Empleados de la semana</span>
        <div class="message-list">
            <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-2.png" alt=""><div class="message-info"><div class="message-author">Juan Perez</div><small></small></div></div>
            <div class="info-item message-item"><img class="circle" src="assets/images/profile-image.png" alt=""><div class="message-info"><div class="message-author">Carla López</div><small></small></div></div>
            <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-1.png" alt=""><div class="message-info"><div class="message-author">Luis Cazón</div><small></small></div></div>
        </div>
        <span class="inner-sidebar-title">Eventos este mes</span>
        <span class="info-item">Reunión anual<span class="new badge">14/06</span></span>
        <div class="inner-sidebar-divider"></div>
        <span class="info-item">Cena personal administrativo</span>
        <div class="inner-sidebar-divider"></div>
        <span class="info-item disabled">No hay más eventos del mes</span>
        <div class="inner-sidebar-divider"></div>

        <span class="inner-sidebar-title">Sucursales <i class="material-icons">trending_up</i></span>
        <div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>
    </div>
@endsection
@section('js')
    <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
    <script src="assets/plugins/materialize/js/materialize.min.js"></script>
    <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
    <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/plugins/curvedlines/curvedLines.js"></script>
    <script src="assets/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/js/alpha.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
@endsection

