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
          <h5 class="card-title">View Products</h5>
          <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
              <thead>
                  <tr>
                    <th>Category Name</th>
                    <th>Product Name</th>
                    <th>Product Color</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
              </thead>
                <tbody>
                    @foreach($products as $product)
                  <tr> 
                    <td>{{$product->category_name}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_color}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                      <img width='50' src="{{ asset('images/backend_images/products/small/'.$product->image)}}"/>
                    </td>
                    <td>
                      <a href="#Modal1{{$product->id}}"  data-toggle="modal"  type="button" class="btn btn-success btn-sm" title="View Product" >View</a>
                      <a href="{{ url('/admin/edit-product',$product->id) }}" type="button" class="btn btn-cyan btn-sm" title="Edit Product" >Edit</a>
                      <a href="{{ url('/admin/add-attributes',$product->id) }}"  type="button" class="btn btn-success btn-sm" title="Add Attributes" >Add</a>
                      <a href="{{ url('/admin/add-images',$product->id) }}"  type="button" class="btn btn-info btn-sm" title="Add Images" >Add</a>
                      <a rel="{{ $product->id }}" rell="delete-product" <?php /* href="{{ url('/admin/delete-product/'.$product->id) }}" */ ?> href="javascript:" type="button" class="btn btn-danger btn-sm deleteRecord" title="Delete Product" >Delete</a>
                    </td>
                  </tr>

                    <div class="modal fade" id="Modal1{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                    <div class="modal-dialog" role="document ">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{$product->product_name}} Full Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true ">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <p>Product ID: {{$product->id}}</p>
                               <p>Category Name: {{$product->category_name}}</p>
                               <p>Product Code: {{$product->product_code}}</p>
                               <p>Product Color: {{$product->product_color}}</p>
                               <p>Price: {{$product->price}}</p>
                               <p>Description: {{$product->description}}</p>
                            </div>
                        </div>
                      </div>
                    </div>

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

