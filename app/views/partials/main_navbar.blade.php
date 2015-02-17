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
					<img class ="left" src="/assets/img/menetonea.png">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="">Why Choose Us?</a></li>
					<li><a href="">Our Commitment</a></li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown" id="right-dropdown">

					@if (Auth::check())
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="account" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{{ Auth::user()->username }}} <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="account">
							<li><a href="/profile">My Account</a></li>
							<li class="divider"></li>
							<li><a id="login-in-a" class="dropdown-toggle" href="{{{ url('logout') }}}"><span id="sign-out"><i class="glyphicon glyphicon-log-out"></i></span>Logout</a></li>
						</ul>
					</li>
						
					@else
						<a href="{{{ url('login') }}}">
							<i class="glyphicon glyphicon-log-in"></i>Login
						</a>
					</li>
					@endif
				</ul>
			</div>
		<!-- </div> -->
	</nav> 