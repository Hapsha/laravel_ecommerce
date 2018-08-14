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
          <form enctype="multipart/form-data" class="form-horizontal" method="post" action="/admin/add-banner">{{ csrf_field() }}
            <div class="card-body">
              <h4 class="card-title">Add Banner</h4>

              <div class="form-group row">
                <label for="image" class="col-sm-3 text-right control-label col-form-label">Banner Image</label>
                  <div class="col-sm-4">
                      <input class="form-control" id="image" name="image" type="file" required />
                  </div>
              </div>
            
              <div class="form-group row">
                  <label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
                  <div class="col-sm-9">
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="link" class="col-sm-3 text-right control-label col-form-label">Link</label>
                  <div class="col-sm-9">
                      <input type="text" name="link" class="form-control" id="link" placeholder="Link">
                  </div>
              </div>

              <div class="form-group row">
                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Enable</label>
                <div class="col-sm-1">
                  <input type="checkbox" name="status" class="form-control" id="status" value="1" >   
                </div>
              </div>

            </div>
            <div class="border-top">
              <div class="card-body">
                  <button type="submit" class="btn btn-primary">Add Banner</button>
              </div>
            </div>
          </form>
        </div>
      </div>
        
    </div>

  </div>
</div>


@endsection