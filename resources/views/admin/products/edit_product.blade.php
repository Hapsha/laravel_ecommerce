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
          <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-product/'.$products->id) }}">{{ csrf_field() }}
            <div class="card-body">
              <h4 class="card-title">Edit Product</h4>

              <div class="form-group row">
                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Under Category</label>
                <div class="col-sm-9">
                    <select name="category_id" style="width: 50%; height:36px;">
                      <option value="">Under Category</option>
                        <?php echo $categories_dropdown; ?> 
                    </select>  
                </div>
              </div>
            
              <div class="form-group row">
                  <label for="product_name" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                  <div class="col-sm-9">
                      <input type="text" name="product_name" value="{{$products->product_name}}" class="form-control" id="product_name" placeholder="Product Name">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="product_code" class="col-sm-3 text-right control-label col-form-label">Product Code</label>
                  <div class="col-sm-9">
                      <input type="text" name="product_code" value="{{$products->product_code}}" class="form-control" id="product_code" placeholder="Product Code">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="product_color" class="col-sm-3 text-right control-label col-form-label">Product Color</label>
                  <div class="col-sm-9">
                      <input type="text" name="product_color" value="{{$products->product_color}}" class="form-control" id="product_color" placeholder="Product Color">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="description">{{ $products->description }}</textarea>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Key Features</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="features">{{ $products->features }}</textarea>
                  </div>
              </div>

              <div class="form-group row">
                <label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label>
                  <div class="col-sm-9">
                      <input type="text" name="price" value="{{$products->price}}" class="form-control" id="price" placeholder="Price">
                  </div>
              </div>

              <div class="form-group row">
                <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                  <div class="col-sm-4">
                  	@if(!empty($products->image))
                      <img style="width:50px;" src="{{ asset('images/backend_images/products/small/'.$products->image)}}"/>
                      <a type="button" class="btn btn-danger btn-sm" href="{{ url('/admin/delete-product-image/'.$products->id) }}"> Delete</a>
                     @endif 
                      <input class="form-control" id="image" name="image" type="file" />
                      <input type="hidden" name="current_image" value="{{ $products->image }}"/>
                  </div>
              </div>

              <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Enable</label>
                <div class="col-sm-1">
                  <input type="checkbox" name="status" class="form-control" id="status" @if($products->status=="1") checked @endif value="1" >   
                </div>
              </div>

            </div>
            <div class="border-top">
              <div class="card-body">
                  <button type="submit" class="btn btn-primary">Edit Product</button>
              </div>
            </div>
          </form>
        </div>
      </div>
        
    </div>

  </div>
  
</div>


@endsection