<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ route('product.index') }}">Leonardo's shop</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="fa fa-shopping-cart" aria-hidden="true">
						</i> Shopping Cart
						<span  class="badge"> {{Session::has('cart') ? Session::get('cart')->totalAmount : ''}}  </span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User <span class="caret"></span></a>
					<ul class="dropdown-menu">
						@if(Auth::check())
							<li><a href="{{ route('user.profile') }}">Profile</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="{{ route('user.logout') }}">Log out</a></li>
						@else
							<li><a href="{{ route('user.signup') }}">Sign Up</a></li>
							<li><a href="{{ route('user.signin') }}">Sign In</a></li>
						@endif

					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>