<!-- top-header -->
	<div class="header-most-top">
		<p> Las Mejores Ofertas Solo En Nuestras Tiendas Z-MatrixShop</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<span>Z</span>-
						<span>M</span>atrixShop
						<img src="{{ asset('assets/frontend/images/logo2.png') }}" alt="">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
							<span class="fa fa-map-marker" aria-hidden="true"></span>Dirección De Tiendas</a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-truck" aria-hidden="true"></span>Orden de pista</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span>(503)+2270-2028
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span>Iniciar Sesión</a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span>Registrarse</a>
					</li>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="¿Cómo podemos ayudarle hoy?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>Por Favor Selecciona Tu Localización</h3>
			<select class="list_of_cities">
				<optgroup label="Ciudades Populares">
					<option selected style="display:none;color:#eee;">Selecciona Tu Ciudad</option>
					<option>San Salvador</option>
					<option>San Miguel</option>
					<option>Santa Ana</option>
					<option>Sonsonate</option>
					<option>La Unión</option>
					<option>Zacatecoluca</option>
					<option>Santa Tecla</option>
				</optgroup>
				<optgroup label="San Salvador">
					<option>San Salvador</option>
					<option>Soyapango</option>
					<option>Ilopango</option>
					<option>San Marcos</option>
					<option>Mejicanos</option>
				</optgroup>
				<optgroup label="La Libertad">
					<option>Antiguo Cuscatlan</option>
					<option>Santa Tecla</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Iniciar Sesión</h3>
						<p>
							Inicie sesión ahora, comencemos su compra de productos. No tienes una cuenta?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Registrate Aquí</a>
						</p>
						<form method="post" action="{{ route('login') }}">
							@csrf
							<div class="styled-input agile-styled-input-top {{ $errors->has('email') ? ' is-invalid' : '' }}">
								<input type="email" placeholder="Email" name="email" required value="{{ old('email') }}">
								 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="styled-input {{ $errors->has('password') ? ' is-invalid' : '' }}">
								<input type="password" placeholder="Contraseña" name="password" required="">
								@if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                 @endif
							</div>
							<input type="submit" value="Iniciar Sesión">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Registrarse</h3>
						<p>
							¡Únete al Shoppen de Los Mejores Ofertas! Vamos a configurar tu cuenta
						</p>
						<form action="{{ route('register') }}" method="post">
							 @csrf
							<div class="styled-input agile-styled-input-top {{ $errors->has('name') ? ' is-invalid' : '' }} ">
								<input type="text" placeholder="Nombre" name="name" required value="{{ old('name') }}">
								@if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="styled-input {{ $errors->has('email') ? ' is-invalid' : '' }}">
								<input type="email" placeholder="E-mail" name="email" required value="{{ old('email') }}">
								@if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="styled-input agile-styled-input-top {{ $errors->has('username') ? ' is-invalid' : '' }} ">
								<input type="text" placeholder="Username" name="username" required value="{{ old('username') }}">
								@if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="styled-input {{ $errors->has('password') ? ' is-invalid' : '' }}">
							<input type="password" placeholder="Contraseña" name="password" required>
								 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirmar Contraseña" name="password_confirmation" required>
							</div>
							<input type="submit" value="Registrarse">
						</form>
						<p>
							<a href="#">Al hacer clic en Registrarse, acepto sus términos</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
					<select id="agileinfo-nav_search" name="agileinfo_search" onchange="location = this.value;">
						<option value="{{ route('welcome') }}">Todas Las Categorias</option>
						@foreach($categories as $category)
						<option value="{{ asset('/categoria/'.$category->slug) }}">{{ $category->name }}</option>
						@endforeach
					</select>
			
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href="{{ route('welcome') }}">Inicio
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.html">Acerca De</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
												   @foreach($categories as $category)
												   <li><a href="{{ asset('/categoria/'.$category->slug) }}">{{ $category->name }}</a></li>
												    @endforeach
											    </ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-2">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
												   @foreach($brands as $brand)
												   <li><a href="{{ asset('/marca/'.$brand->slug) }}">{{ $brand->name }}</a></li>
												    @endforeach
											    </ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="faqs.html">Faqs</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="contact.html">Contactanos</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>