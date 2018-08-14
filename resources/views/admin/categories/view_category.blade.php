@extends('layouts.adminLayout.admin_design')
   @section('content')



  <div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Categories</h4>
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
                          <h5 class="card-title">View Categories</h5>
                          <div class="table-responsive">
                              <table id="zero_config" class="table table-striped table-bordered">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Category Name</th>
                                          <th>Category Level</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($categories as $category)
                                      <tr>
                                          <td>{{$category->id}}</td>
                                          <td>{{$category->name}}</td>
                                          <td>{{$category->parent_id}}</td>
                                          <td>{{$category->description}}</td>
                                          <td>
                                              <a href="{{ url('/admin/edit-category',$category->id) }}" type="button" class="btn btn-cyan btn-sm" >Edit</a>
                                              
                                              <a rel="{{ $category->id }}" rell="delete-category" href="javascript:" type="button" class="btn btn-danger btn-sm deleteRecord" title="Delete Category" >Delete</a>
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

