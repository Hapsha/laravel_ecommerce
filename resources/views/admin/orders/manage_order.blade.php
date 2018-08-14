@extends('layouts.adminLayout.admin_design')
   @section('content')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Order Details</h4>
            </div>
        </div>
    </div>
       @if(Session::has('flash_message_success'))
         <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
                  <strong>{!! session('flash_message_success') !!}</strong>
         </div>      
        @endif  
    <div class="container-fluid">  
	   <div class="row">
	      	<div class="col-12">
	          <div class="card">
	              <div class="card-body">
	                  <h5 class="card-title">Customer Info</h5>
	                  <div class="table-responsive">
	                      <table id="zero_config" class="table table-striped table-bordered">
	                          <thead>
	                              <tr>
	                                  <th>customer name</th>
	                                  <th>mobile</th>
	                              </tr>
	                          </thead>
	                          <tbody>
	                              <tr>
										@foreach($order_by_id as $v_order)
									 @endforeach 
							         <td>{{$v_order->customer_name}}</td>
							         <td>{{$v_order->mobile}}</td>    
	                              </tr>
	                          </tbody>
	                          
	                      </table>
	                  </div>

	              </div>
	          </div>
	      </div>

	      <div class="col-12">
	          <div class="card">
	              <div class="card-body">
	                  <h5 class="card-title">Shipping Info</h5>
	                  <div class="table-responsive">
	                      <table id="zero_config" class="table table-striped table-bordered">
	                          <thead>
	                              <tr>
	                                  <th>Username</th>
									  <th>Address</th>
									  <th>Mobile</th> 
									  <th>Email</th> 
	                              </tr>
	                          </thead>
	                          <tbody>
	                              <tr>
									@foreach($order_by_id as $v_order)
							 		@endforeach
							     	<td>{{$v_order->shipping_first_name}}</td>
							      	<td>{{$v_order->shipping_address}}</td>                   
							      	<td>{{$v_order->shipping_mobile}}</td>
							      	<td>{{$v_order->shipping_email}}</td>     
	                              </tr>
	                          </tbody>
	                          
	                      </table>
	                  </div>

	              </div>
	          </div>
	      </div>
	   </div>         
	</div>
           
    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
         
</div>

@endsection			