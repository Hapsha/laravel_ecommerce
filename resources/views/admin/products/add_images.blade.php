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
          <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-images/'.$products->id) }}">{{ csrf_field() }}
          	<input type="hidden"  name="product_id" value="{{ $products->id }}">
            <div class="card-body">
              <h4 class="card-title">Add Product Images</h4>

              <div class="form-group row">
                  <label for="product_name" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                  <label for="product_name" class="col-sm-3 text-right control-label col-form-label"><strong>{{ $products->product_name }}</strong></label>
              </div>

              <div class="form-group row">
                  <label for="product_code" class="col-sm-3 text-right control-label col-form-label">Product Code</label>
                  <label for="product_name" class="col-sm-3 text-right control-label col-form-label"><strong>{{ $products->product_code }}</strong></label>
              </div>
 			
 			  <div class="form-group row">
                <label for="image" class="col-sm-3 text-right control-label col-form-label">Alternate Image(s)</label>
                  <div class="col-sm-4">
                      <input class="form-control" id="image" name="image[]" type="file" multiple="multiple" />
                  </div>
              </div>	

            </div>
            <div class="border-top">
              <div class="card-body">
                  <button type="submit" class="btn btn-primary">Add Images</button>
              </div>
            </div>
          </form>
        </div>
      </div>
        
    </div>

    <div class="row">
    <div class="col-12">
    	<div class="card">
        <div class="card-body">
          <h5 class="card-title">View Images</h5>
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                  <tr>
                    <th>Image ID</th>
                    <th>Product ID</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
              </thead>
                <tbody>
                    @foreach($productsImages as $image)
                  <tr> 
                    <td>{{ $image->id }}</td>
                    <td>{{ $image->product_id }}</td>
                    <td><img width='50' src="{{ asset('images/backend_images/products/small/'. $image->image) }}"/></td>
                    <td>
						<a rel="{{ $image->id }}" rell="delete-alt-image" href="javascript:" type="button" class="btn btn-danger btn-sm deleteRecord" >Delete Product Image</a>
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
  
</div>

@endsection