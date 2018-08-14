@extends('layouts.frontLayout.front_design')
@section('content')
<div class="column_center">
  <div class="container">
	<div class="search">
	  <div class="stay"><h3>Shopping Cart</h3></div>
	  <div class="stay_right">
		  
	  </div>
	  <div class="clearfix"> </div>
	</div>
    <div class="clearfix"> </div>
  </div>
</div>


	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="{{ url('/customer-login') }}" method="post">
						    {{csrf_field()}}
							<input type="email" name="customer_email" required placeholder="Email Address" />
							<input type="password" name="password" placeholder="password" required />
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{ url('/customer-registration') }}" method="post">{{ csrf_field() }}
							<input type="text" placeholder="Full Name" name="customer_name" required="" />
							<input type="email" placeholder="Email Address" name="customer_email" required="" />
							<input type="password" placeholder="Password" name="password" required="" />
							<input type="text" placeholder="Mobile Number" name="mobile" required="" />
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@endsection