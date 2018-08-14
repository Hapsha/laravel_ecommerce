@extends('layouts.adminLayout.admin_design')
   @section('content')

<div class="page-wrapper">
           
            <!-- Container fluid  -->
            <!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <form class="form-horizontal" method="post" action="{{url('/admin/edit-category/'.$category->id)}}">{{ csrf_field() }}
                      <div class="card-body">
                          <h4 class="card-title">Edit Category</h4>
                          <div class="form-group row">
                              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name</label>
                              <div class="col-sm-9">
                                  <input type="text" name="cname" class="form-control" value="{{$category->name}}" id="fname" />
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Main Category</label>
                              <div class="col-sm-9">
                                  <select name="parent_id" style="width: 50%; height:36px;">
                                    <option value="0">Main Category</option>
                                    @foreach($levels as $val)
                                      <option value="{{ $val->id }}" @if($val->id == $category->parent_id)selected @endif>{{ $val->name }}</option>
                                    @endforeach
                                  </select>  
                              </div>
                          </div>
                      
                          
                          <div class="form-group row">
                              <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                              <div class="col-sm-9">
                                  <textarea class="form-control" name="description">{{$category->description}}</textarea>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="cono1" class="col-sm-3 text-right control-label col-form-label">URL</label>
                              <div class="col-sm-9">
                                  <input type="text" name="url" class="form-control" id="cono1" value="{{$category->url}}"/>
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Enable</label>
                            <div class="col-sm-1">
                              <input type="checkbox" name="status" class="form-control" id="status" @if($category->status=="1") checked @endif value="1" >   
                            </div>
                          </div>

                      </div>
                      <div class="border-top">
                          <div class="card-body">
                              <button type="submit" class="btn btn-primary">Edit Category</button>
                          </div>
                      </div>
                  </form>
              </div>


          </div>
          
      </div>

  </div>
  
</div>


@endsection