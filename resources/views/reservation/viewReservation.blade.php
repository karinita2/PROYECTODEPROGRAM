
@extends('layouts.head')
@section('css')
@endsection
@section('middle-content')
	<div class="row">
		<div class="row">
			<div class="header">
				<div class="row">
					<div class="center"><h3><b>SISTEMA DE RESERVAS - HOTEL EMPRESARIAL</b></h3></div><br>
				</div>
			</div>
			<div class="col s12">
				<ul class="tabs tab-demo z-depth-1" style="width: 100%;">
					<li class="tab col s4"><a href="#test1" class="">Detalles</a></li>
				</ul>
			</div>
			<div id="test1" class="col s12">
				<div class="card">
					<div class="card-content">
							<div class="row">
								<div class="col s4 m4 l4">
									<p><b>HOTEL</b></p>
									<P>Detalle       : <b> Hotel Empresarial ****** </b></P>
									<P>Telefono     :  +591657321488</P>
									<P>Correo   :  hotel@empresarial.com</P>
								</div>
								<div class="col s4 m4 l4">
									<p><b>CLIENTE</b></p>
									<p>Nombre       : <b> {{ $reservation->last_name. ' '.$reservation->name }} </b></p>
									<p>Telefono     :     {{ $reservation->phone}}</p>
									<p>Documento    :     {{ $reservation->ndi }}</p>
									<p>Correo       : <b> {{ $reservation->email }}</b></p>
									<p>Nacionalidad : {{ $reservation->nationality }}</p>
								</div>
								<div class="col s4 m4 l4 right">
									<?php
									$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                    $charactersLength = strlen($characters);
                                    $randomString = '';
                                    for ($i = 0; $i < 15; $i++) {
                                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                                    }
                                    $randomString;
                                    ?>
									<p><b>Codigo de la reserva : <?php echo $randomString?></b></p>
									<p><b>Fecha de la reserva: </b>{{ $reservation->created_at  }}</p>
									<p><b>Check-In : </b>{{ $reservation->ckechin }}</p>
									<p><b>Check-Out: </b>{{ $reservation->ckechout }}</p>
									<P><b>Estado de pago: </b> Pendiente</P>
									<p><b>Noches : 1</b></p>
								</div>
							</div>
							<div class="row">

								<div class="col l10 offset-l1">
									<div class="left"><h4><b>Fecha de Reserva</b></h4></div>
										<table>
										<thead>
										<tr>
											<th data-field="id">#</th>
											<th data-field="name">Fecha</th>
											<th data-field="price">Precio</th>
										</tr>
										</thead>
										<tbody>
											<?php
											$i=$reservation->ckechin;
											$contador = 1;
											$total = 0;
											?>
											@foreach($details as $detail)
                                                <?php  $total = $total + $detail->sub_total ?>
												@if($i<$reservation->ckechout)
													<tr>
														<td>{{$contador}}</td>
														<td>{{$i}}</td>
														<td>{{$detail->sub_total}}</td>
													</tr>
													<?php
                                                    $contador++;
                                                    $i = date("Y-m-d", strtotime($i ."+ 1 days"));
													?>
												@endif()
											@endforeach
										<tr><td  colspan="2" style="text-align: right"><b>Total: </b></td>
										<td><b>{{$total}}</b></td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!--<div class="row">
								<div class="col l10 offset-l1">
									<div class="left"><h5><b>Servicios</b></h5></div>
								</div>
							</div>-->
						</div>
					</div>
				</div>
			</div>
			<!--<div id="test2" class="col s12"><p class="p-v-sm">rojas</p></div>
			<div id="test3" class="col s12"><p class="p-v-sm">Test 3</p></div>-->
		</div>
	</div>
@endsection
@section('js')
	<script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
	<script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
	<script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
	<script src="{{asset('assets/js/alpha.min.js')}}"></script>
	<!--<script src="assets/js/pages/miscellaneous-sweetalert.js"></script>-->
@endsection