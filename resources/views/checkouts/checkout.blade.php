@extends('layouts.frontLayout.front_design')
@section('content')
<div class="column_center">
  <div class="container">
	<div class="search">
	  <div class="stay"><h3>Shipping Information</h3></div>
	  <div class="stay_right">
		  
	  </div>
	  <div class="clearfix"> </div>
	</div>
    <div class="clearfix"> </div>
  </div>
</div>

	<section id="cart_items">
		<div class="container">
			
		@if(Session::has('flash_message_success'))
           <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success') !!}</strong>
           </div>      
          @endif
			<div class="register-req">
				<p>Please fillup the form..</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">

					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action="{{url('/save-shipping-details')}}" method="post">
									{{csrf_field()}}
									<input type="email" required name="shipping_email" placeholder="Email*">
									<input type="text" required name="shipping_first_name" placeholder="First Name *">
									<input type="text" required name="shipping_last_name" placeholder="Last Name *">
									<input type="text" required name="shipping_address" placeholder="Address *">
									<input type="text" required name="shipping_mobile" placeholder="Mobile Number">
									<input type="text" required name="shipping_city" placeholder="City *">
									<input type="submit" value="Submit">
								</form>
							</div>
						</div>
					</div>
				
				</div>
			</div>

		</div>
	</section> <!--/#cart_items-->

@endsection
