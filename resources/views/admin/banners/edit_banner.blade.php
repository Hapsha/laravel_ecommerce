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
          <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/edit-banner/'.$bannerDetails->id) }}">{{ csrf_field() }}
            <div class="card-body">
              <h4 class="card-title">Edit Banner</h4>
            
              <div class="form-group row">
                <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                  <div class="col-sm-4">
                  	@if(!empty($bannerDetails->image))
                      <img style="width:50px;" src="{{ asset('images/frontend_images/banners/'.$bannerDetails->image)}}"/>
                      <a type="button" class="btn btn-danger btn-sm" href="{{ url('/admin/delete-banner-image/'.$bannerDetails->id) }}"> Delete</a>
                     @endif 
                      <input class="form-control" id="image" name="image" type="file" />
                      <input type="hidden" name="current_image" value="{{ $bannerDetails->image }}"/>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="amount" class="col-sm-3 text-right control-label col-form-label">Title</label>
		          <div class="col-sm-9">
		          	<input type="text" name="title" value="{{ $bannerDetails->title
		          }}" class="form-control" id="title" >
		          </div>
              </div>

              <div class="form-group row">
                  <label for="amount" class="col-sm-3 text-right control-label col-form-label">Link</label>
		          <div class="col-sm-9">
		          	<input type="text" name="link" value="{{ $bannerDetails->link
		          }}" class="form-control" id="link" >
		          </div>
              </div>

              <div class="form-group row">
                <label for="status" class="col-sm-3 text-right control-label col-form-label">Enable</label>
                <div class="col-sm-1">
                  <input type="checkbox" name="status" class="form-control" value="1" @if($bannerDetails->status=="1") checked @endif>   
                </div>
              </div>

            </div>
            <div class="border-top">
              <div class="card-body">
                  <button type="submit" class="btn btn-primary">Edit Banner</button>
              </div>
            </div>
          </form>
        </div>
      </div>
        
    </div>

  </div>
</div>


@endsection