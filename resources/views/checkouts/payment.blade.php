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

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">Payment method</li>
			</ol>
		</div>
		<div class="paymentCont col-sm-8">
			<div class="headingWrap">
					<h3 class="headingTop text-center">Select Your Payment Method</h3>	
					<p class="text-center">Created with bootsrap button and using radio button</p>
			</div>	
			<form action="{{url('/order-place')}}" method="post" class="pay_form">
				{{csrf_field()}}
			  <input type="radio" name="payment_method" value="handcash"> Hand Cash<br>
			  <input type="radio" name="payment_method" value="cart"> Debit Card<br>
			  <input type="radio" name="payment_method" value="paypal"> Paypal<br>
			  <input type="submit" name="" value="Done">
			</form>
					
		</div>
	</div>
</section><!--/#do_action-->

@endsection