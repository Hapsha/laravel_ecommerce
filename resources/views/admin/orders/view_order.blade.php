@extends('layouts.adminLayout.admin_design')
   @section('content')



  <div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Orders</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
      <div class="container-fluid">
        
          <div class="row">
              <div class="col-12">

                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">View Orders</h5>
                          <div class="table-responsive">
                              <table id="zero_config" class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>Order ID</th>
                                          <th>Customer Name</th>
                                          <th>Order Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                   @foreach( $all_order_info as $v_order)
                                      <tr>
                                          <td>{{ $v_order->order_id }}</td>
                                          <td>{{ $v_order->customer_name }}</td>
                                          <td>{{ $v_order->order_status }}</td>
                                         
                                          <td>
                                              <a href="{{ url('/admin/manage-order',$v_order->order_id) }}" type="button" class="btn btn-cyan btn-sm" >View</a>
                                              <a href="{{ url('/admin/delete-category',$v_order->order_id) }}" type="button" class="btn btn-danger btn-sm" >Delete</a>
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

