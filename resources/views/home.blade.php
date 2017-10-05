@extends('layouts.master')

@section('content')
	<div class="home-con">
		@include('partials.home-nav')
		<div style="background-color: #eeeeee; overflow: hidden; max-height: 400px;">
			<div class="row no-container">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<div style="padding: 80px 0px;">
						<h1 style="margin-bottom: 20px; font-size: 38px;">El lugar donde nuestros técnicos comparten información.</h1>
                        <p class="minor-text" style="margin-bottom: 25px; font-size: 16px;">Utilizando <a href="https://github.com/zeeshanu/opus" target="_blank">Opus</a>, la idea es compartir información entre todos los que hacemos <a href="https://tutecni.co" target="_blank" style="font-family: 'Special Elite';"><strong>tutecni.co</strong></a>.</p>
						<div class="brand-buttons text-center">
							{{--<a href="{{ route('team.create') }}" class="btn btn-default home-head-btn">Create Team</a>--}}
							<a href="{{ route('team.login') }}" class="btn btn-default home-head-btn">Login</a>
						</div>	
					</div>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-center">
					<div style="padding: 65px 0px;">
						<img src="img/brand.png" style="border-radius: 3px; box-shadow: 0px 1px 8px #b3b3b3; " width="844">
					</div>
				</div>
			</div>
		</div>
		<div style="padding-top: 26px; padding-bottom: 45px;" id="features">
			<div class="row no-container" style="width: 1130px; margin: auto;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="text-center" style="margin-bottom: 55px; margin-top: 30px;">
						<h1 style="font-size: 34px; margin-bottom: 12px;">Características</h1>
                        <p style="font-size: 18px; width: 550px; margin: auto; margin-bottom: 40px;">Opus es creado pensando en la innovación, todo envuelto en un hermoso diseño. Esto no es sólo una piel bonita.</p>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/software_layout_header_sideleft.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">UI Elegante</h4>
							<p>
                                Hemos pensado cuidadosamente sobre el diseño para que tu no tengas que hacerlo. Sólo necesitas concentrarte en su contenido.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/basic_smartphone.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Optimizado para mobile</h4>
							<p>
                                Opus se ve impresionante en el desktop, tablets o teléfonos. Nuestro diseño totalmente adaptable ajusta perfectamente para caber todos sus dispositivos.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/basic_bolt.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Rápido</h4>
							<p>
                                Optimizado cuidadosamente de la interface de usuario, y rendimiento adecuado significan una barrera baja para la creación y edición de contenido.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/basic_info.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Notificaciones</h4>
							<p>
                                Recibe notificaciones al instante cuando alguien te menciona en algún comentario.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/ecommerce_sales.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Etiquetas</h4>
							<p>
                                Las etiequetas (tags) le dan libertad para definir su propia estructura. Puedes asignar etiquetas a wiki y páginas.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/basic_message_multiple.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Respuestas instantáneas</h4>
							<p>
                                Mencione a otros usuarios y responda a las páginas para mantener que el flujo en la discusión.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/basic_key.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Gestion de permisos</h4>
							<p>
                                Toma el control de tus wikis con permisos a distintos niveles. Asigna permisos a un rol determinado para lograr una flexibilidad adicional.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/basic_clockwise.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Actividad en tiempo real</h4>
							<p>
                                Cada actividad de un usuario en el equipo se almacena en la base de datos, para tener un registro preciso.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 38px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/basic_lock.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Herramientas de Moderación</h4>
							<p>
                                Crea accesos directos de páginas importantes en la wiki. Agrega páginas en tu lista de lectura y mucho más.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 38px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							<img src="img/icons/software_font_smallcaps.svg" class="media-object">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Formatea tus wikis</h4>
							<p>
                                Manipula el diseño de tu página como prefieras, html y emojis son compatibles, con una vista previa.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="background: #404041; padding: 50px 0; color: #f7f5ef;">
			<div class="row no-container"  style="width: 1130px; margin: auto;">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<ul class="list-unstyled">
						<li style="font-size: 20px; margin-bottom: 20px; font-weight: 500;">Producto</li>
						<li>
							<a href="#features" style="text-decoration: none; color: #c5dae6; display: block; margin-bottom: 10px; line-height: 140%; font-size: 15px;">Características</a>
						</li>
						<li>
							<a href="https://tutecni.co" style="text-decoration: none; color: #c5dae6; display: block; margin-bottom: 10px; line-height: 140%; font-size: 15px;">Acerca de <strong style="font-family: 'Special Elite';">tutecni.co</strong></a>
						</li>
					</ul>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<ul class="list-unstyled">
						<li style="font-size: 20px; margin-bottom: 20px; font-weight: 500;">Social</li>
						<li>
							<a href="https://github.com/tutecniCo" style="text-decoration: none; color: #c5dae6; display: block; margin-bottom: 10px; line-height: 140%; font-size: 15px;">Github</a>
						</li>
						<li>
							<a href="mailto:wiki@tutecni.co" style="text-decoration: none; color: #c5dae6; display: block; margin-bottom: 10px; line-height: 140%; font-size: 15px;">Contáctanos</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-4 col-lg-offset-4 text-center">
					<div>
						<img src="/img/fotter-logo.png" width="88" style="margin-bottom: 15px;">
						<p>Copyright © 2017 <a href="" style="color: #fff; text-decoration: none;font-family: 'Special Elite';font-size: 18px;">tutecni.co</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection