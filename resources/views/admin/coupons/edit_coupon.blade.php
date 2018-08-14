@extends('layouts.adminLayout.admin_design')
   @section('content')

<div class="page-wrapper">
           
  <div class="container-fluid">
      @if(Session::has('flash_message_success'))
           <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success') !!}</strong>
           </div>      
          @endif

          @if(Session::has('flash_message_error'))
           <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_error') !!}</strong>
           </div>      
          @endif
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <form class="form-horizontal" method="post" action="{{ url('/admin/edit-coupon/'.$couponDetails->id) }}">{{ csrf_field() }}
            <div class="card-body">
              <h4 class="card-title">Edit Coupon</h4>
            
              <div class="form-group row">
                  <label for="coupon_code" class="col-sm-3 text-right control-label col-form-label">Coupon Code</label>
                  <div class="col-sm-9">
                      <input style="width: 50%;" type="text" value="{{ $couponDetails->coupon_code
                  }}" name="coupon_code" class="form-control" id="coupon_code" placeholder="Coupon Code" minlength="5" maxlength="15" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="amount" class="col-sm-3 text-right control-label col-form-label">Amount</label>
                  <div class="col-sm-9">
                      <input type="number" name="amount" value="{{ $couponDetails->amount
                  }}" class="form-control" id="amount" placeholder="Amount" min="1" style="width: 50%;" required>
                  </div>
              </div>

              <div class="form-group row">
                <label for="amount_type" class="col-sm-3 text-right control-label col-form-label">Amount Type</label>
                <div class="col-sm-9">
                    <select name="amount_type" style="width: 50%; height:36px;">
                      <option @if($couponDetails->amount_type=="Percentage") selected @endif value="Percentage">Percentage</option>
                      <option @if($couponDetails->amount_type=="Fixed") selected @endif value="Fixed">Fixed</option>   
                    </select>  
                </div>
              </div>

              <div class="form-group row">
                  <label for="product_color" class="col-sm-3 text-right control-label col-form-label">Expiry Date</label>
                  <div class="col-sm-9">
                      <input type="text" value="{{ $couponDetails->expiry_date
                  }}" name="expiry_date" class="form-control" id="expiry_date" placeholder="Expiry Date"style="width: 50%;" autocomplete="off">
                  </div>
              </div>

              <div class="form-group row">
                <label for="status" class="col-sm-3 text-right control-label col-form-label">Enable</label>
                <div class="col-sm-1">
                  <input type="checkbox" name="status" class="form-control" value="1" @if($couponDetails->status=="1") checked @endif>   
                </div>
              </div>

            </div>
            <div class="border-top">
              <div class="card-body">
                  <button type="submit" class="btn btn-primary">Edit Coupon</button>
              </div>
            </div>
          </form>
        </div>
      </div>
        
    </div>

  </div>
</div>


@endsection