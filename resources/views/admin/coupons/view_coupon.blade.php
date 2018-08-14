@extends('layouts.adminLayout.admin_design')
   @section('content')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Products</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
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
          <h5 class="card-title">View Coupons</h5>
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                  <tr>
                    <th>Coupon ID</th>
                    <th>Coupon Code</th>
                    <th>Amount</th>
                    <th>Amount Type</th>
                    <th>Expiry Date</th>
                    <th>Created Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
              </thead>
                <tbody>
                    @foreach($coupons as $coupon)
                  <tr> 
                    <td>{{$coupon->id}}</td>
                    <td>{{$coupon->coupon_code}}</td>
                    <td>
                    	{{$coupon->amount}}
                    	@if($coupon->amount_type=="Percentage") % @else TK @endif
                    </td>
                    <td>{{$coupon->amount_type}}</td>
                    <td>{{$coupon->expiry_date}}</td>
                    <td>{{$coupon->expiry_date}}</td>
                    <td>
                    	@if($coupon->status==1) Active @else Inactive @endif
                    </td>
                    <td>
                      <a href="{{ url('/admin/edit-coupon',$coupon->id) }}" type="button" class="btn btn-cyan btn-sm" title="Edit Product" >Edit</a>
                      <a rel="{{ $coupon->id }}" rell="delete-coupon" <?php /* href="{{ url('/admin/delete-product/'.$product->id) }}" */ ?> href="javascript:" type="button" class="btn btn-danger btn-sm deleteRecord" title="Delete Coupon" >Delete</a>
                    </td>
                  </tr>
                    @endforeach    
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

