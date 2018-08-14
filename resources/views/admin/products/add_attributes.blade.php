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
          <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-attributes/'.$products->id) }}">{{ csrf_field() }}
          	<input type="hidden"  name="product_id" value="{{ $products->id }}">
            <div class="card-body">
              <h4 class="card-title">Add Product Attributes</h4>

              <div class="form-group row">
                  <label for="product_name" class="col-sm-3 text-right control-label col-form-label">Product Name</label>
                  <label for="product_name" class="col-sm-3 text-right control-label col-form-label"><strong>{{ $products->product_name }}</strong></label>
              </div>

              <div class="form-group row">
                  <label for="product_code" class="col-sm-3 text-right control-label col-form-label">Product Code</label>
                  <label for="product_name" class="col-sm-3 text-right control-label col-form-label"><strong>{{ $products->product_code }}</strong></label>
              </div>

              <div class="form-group row">
                  <label for="product_color" class="col-sm-3 text-right control-label col-form-label">Product Color</label>
                  <label for="product_name" class="col-sm-3 text-right control-label col-form-label"><strong>{{ $products->product_color }}</strong></label>
              </div>

              <div class="form-group row">
                <label for="product_color" class="col-sm-3 text-right control-label col-form-label">Attributes :</label>
                <div class="field_wrapper">
				    <div>
				        <input type="text" name="sku[]" placeholder="SKU" required style="width: 120px;"/>
				        <input type="text" name="size[]" placeholder="Color" required style="width: 120px;"/>
				        <input type="text" name="price[]" placeholder="Price" required style="width: 120px;"/>
				        <input type="text" name="stock[]" placeholder="Stock" required style="width: 120px;"/>
				        <a href="javascript:void(0);" class="add_button" title="Add field">Add</a>
				    </div>
				</div>
              </div>

            </div>
            <div class="border-top">
              <div class="card-body">
                  <button type="submit" class="btn btn-primary">Add Attributes</button>
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
          <h5 class="card-title">View Attributes</h5>
          <div class="table-responsive">
            <form method="post" action="{{ url('/admin/edit-attributes/'.$products->id) }}">{{ csrf_field() }}
              <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                      <th>Attribute ID</th>
                      <th>SKU</th>
                      <th>Size</th>
                      <th>Price</th>
                      <th>Stock</th>
                      <th>Action</th>
                    </tr>
                </thead>
                  <tbody>
                      @foreach($products['attributes'] as $attribute)
                    <tr> 
                      <td><input type="hidden" name="idAttr[]" value="{{ $attribute->id }}" />{{ $attribute->id }}</td>
                      <td>{{ $attribute->sku }}</td>
                      <td>{{ $attribute->size }}</td>
                      <td><input type="text" name="price[]" value="{{ $attribute->price }}" /></td>
                      <td><input type="text" name="stock[]" value="{{ $attribute->stock }}" /></td>
                      <td>
                        <input type="submit" value="Update" class="btn btn-primary btn-sm ">
  						          <a rel="{{ $attribute->id }}" rell="delete-attribute" href="javascript:" type="button" class="btn btn-danger btn-sm deleteRecord" >Delete</a>
                      </td>
                    </tr>
                      @endforeach    
                  </tbody>                 
              </table>
            </form>
          </div>

        </div>
</div>
      
    </div>
  </div>

  </div>
  
</div>

@endsection