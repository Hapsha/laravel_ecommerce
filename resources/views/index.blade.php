@extends('layouts.frontLayout.front_design')
@section('content')

	<div class="slider">
		  <div class="callbacks_container">
		      <ul class="rslides" id="slider">
		        @foreach($bannerImage as $banner)
		        <li><img src="{{ asset('images/frontend_images/banners/'.$banner->image) }}" class="img-responsive" alt=""/>
		        </li>
		        @endforeach
		      </ul>
		  </div>
	</div>

	<div class="column_center column_center_search">
	  <div class="container">
		<div class="search">
		  <div class="stay">Search Product</div>
		  <div class="stay_right">
			  <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
			  <input type="submit" value="">
		  </div>
		  <div class="clearfix"> </div>
		</div>
	    <div class="clearfix"> </div>
	  </div>
	</div>
	<div class="main">
	  <div class="content_top">
	  	<div class="container">
		   <div class="col-md-3 sidebar_box">
			   	@include('layouts.frontLayout.front_sidebar')
		   </div>

		   <div class="col-md-9 content_right">
		   	<h4 class="head"><span class="m_2">All</span> Products</h4>
		   	<div class="top_grid1">
		   		@foreach($productsAll as $product)
		    <div class="col-md-4 box_2">
		     	<div class="grid_1">
		     		<a href="{{ url('product/'.$product->id) }}">
		     		<div class="b-link-stroke b-animate-go  thickbox">
			        	<img  height="350px" src="{{ asset('images/backend_images/products/small/'.$product->image)}}" class="img-responsive" alt=""/>
			    	</div>
		     	   	<div class="grid_2">
			     	  	<p>{{$product->product_name}}</p>
			     	  	<ul class="grid_2-bottom">
			     	  		<li class="grid_2-left"><p>TK {{$product->price}}</p></li>
			     	  		<li class="grid_2-right">
			     	  			<div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It
			     	  			</div>
			     	  		</li>
			     	  	</ul>
		     	   	</div>
		     	</div>
		     		</a>
		 	</div>

		     	@endforeach
		     
		    </div>


	       </div>
		  </div>  	    
		</div>
	</div>


@endsection