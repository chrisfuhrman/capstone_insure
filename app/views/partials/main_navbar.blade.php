 <!-- Fixed navbar -->
	<nav class="navbar navbar-default" role="navigation">
		<!-- <div class="container"> -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
					<img src="/assets/img/menetonea.png">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="">Products</a></li>
					<li><a href="/quote">Quotes</a></li>
					<li><a href="">Calculators</a></li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown" id="right-dropdown">

					@if (Auth::check())
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="account" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{{ Auth::user()->email }}} <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="account">
							<li><a href="/settings">My Account</a></li>
							<li class="divider"></li>
							<li><a id="login-in-a" class="dropdown-toggle" href="{{{ action('AuthController@doLogout') }}}"><span id="sign-out"><i class="glyphicon glyphicon-log-out"></i></span>Logout</a></li>
						</ul>
					</li>
						
					@else
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">
							<i class="glyphicon glyphicon-log-in"></i>Login
						</a>
						<div class="dropdown-menu">
							@include('partials.form_login')
							<div>
								<span id="login-or" class="clear-fix">or</span>	

								<a href="auth/google">
									<img id="google-login" src="/assets/img/google/Red-signin_Long_base_32dp.png">
								</a>

								<a href="auth/google">
									<img class="hide-this" id="google-login-hover" src="assets/img/google/Red-signin_Long_press_32dp.png"/>
								</a>

							</div>
						</div>
					</li>
					@endif
				</ul>
			</div>
		<!-- </div> -->
	</nav> 