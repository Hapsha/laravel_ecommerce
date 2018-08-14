@extends('layouts.frontLayout.front_design')
@section('content')

<div class="column_center">
  <div class="container">
	<div class="search">
	  <div class="stay">Search Product</div>
	  <div class="stay_right">
		  <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
		  <input type="submit" value="">
	  </div>
	  <div class="clearfix"> </div>
	</div>
    <div class="clearfix"> </div>
  </div>
</div>
<div class="about">
    <div class="container">
         <div class="register">
		  	  <h4 class="title">Shopping cart is empty</h4>
		  	  <p class="cart cart_wish">You have no items in your shopping cart.<br>Click<a href="{{ url('/') }}"> here</a> to continue shopping</p>
		 </div>
	</div>
</div>


@endsection