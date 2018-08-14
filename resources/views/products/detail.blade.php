@extends('layouts.frontLayout.front_design')
@section('content')

<div class="column_center">
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

	   	@if(Session::has('flash_message_error'))
		   <div class="alert alert-danger">
		      <button type="button" class="close" data-dismiss="alert">x</button>
		        <strong>{!! session('flash_message_error') !!}</strong>
		   </div>      
		@endif

	   <div class="col-md-9 single_right">
	   	<form name="addtocartForm" id="addtocartForm" action="{{ url('add-cart') }}" method="post">{{ csrf_field() }}
	   		<input type="hidden" name="product_id" value="{{ $productsDetails->id }}" />
	   		<input type="hidden" name="product_name" value="{{ $productsDetails->product_name }}" />
	   		<input type="hidden" name="product_code" value="{{ $productsDetails->product_code }}" />
	   		<input type="hidden" name="product_color" value="{{ $productsDetails->product_color }}" />
	   		<input type="hidden" name="price" id="price" value="{{ $productsDetails->price }}" />
	   	<div class="single_top">
	       <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
								@foreach($productAltImages as $altimage)
							<li>
								<a href="">
									<img width="" class="etalage_source_image" src="{{ asset('../images/backend_images/products/small/'.$altimage->image)}}" class="img-responsive" title="" />
								</a>
							</li>
								@endforeach
						</ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  	<h1>{{ $productsDetails->product_name }}</h1>
				<p class="availability">Availability: <span id="Availability" class="color">@if($total_stock>0) In stock @else Out Of Stock @endif</span></p>
				<div class="quantity_box">
					<ul class="product-qty">
						<select id="selSize" name="size">
							<option value="">Select</option>
							@foreach($productsDetails->attributes as $sizes)
							<option value="{{ $productsDetails->id }}-{{ $sizes->size }}">{{ $sizes->size }}</option>
							@endforeach
						</select>
					</ul>
				</div>
			    <div class="price_single">
					<span id="getPrice" class="actual">TK {{ $productsDetails->price }}</span><a href="#">click for offer</a>
				</div>
				<h2 class="quick">Quick Overview:</h2>
				<p class="quick_desc">Nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
			    <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#">Add to Wishlist</a></li>
				 	    <li class="compare"><a href="#">Add to Compare</a></li>
				 	</ul>
				 </div>
				<ul class="size">
					<h3>Length</h3>
					<li><a href="#">32</a></li>
					<li><a href="#">34</a></li>
				</ul>
				<div class="quantity_box">
					<ul class="product-qty">
					   <span>Quantity:</span>
					   <select name="quantity">
						 <option>1</option>
						 <option>2</option>
						 <option>3</option>
						 <option>4</option>
						 <option>5</option>
						 <option>6</option>
					   </select>
				    </ul>
				    <ul class="single_social">
						<li><a href="#"><i class="fb1"> </i> </a></li>
						<li><a href="#"><i class="tw1"> </i> </a></li>
						<li><a href="#"><i class="g1"> </i> </a></li>
						<li><a href="#"><i class="linked"> </i> </a></li>
		   		    </ul>
		   		    <div class="clearfix"></div>
	   		    </div>
	   		    	@if($total_stock>0)
			    	<button type="submit" id="cartButton" class="btn bt1 btn-primary btn-normal btn-inline " target="_self"><span id="cartButton">Add to cart</span></button>
			    	@endif
			</div>
		    <div class="clearfix"> </div>
				</div>
          	    <div class="clearfix"></div>
          </div>
         </form> 
          <div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="description" role="tab"><span>Product Description</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Features</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="description">
									<div class="facts tab_list">
										<p>{{ $productsDetails->description }}</p>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts tab_list">
										<p>{{ $productsDetails->features }}</p>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_list">
									  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  </ul>      
							     </div>	
							 </div>
					      </div>
			  </div>
		<h3 class="single_head">Related Products</h3>	
	    <div class="related_products">
	    <div class="top_grid2">
	    		<?php $count=1; ?>	
	    	@foreach($relatedProducts->chunk(3) as $chunk)
	    		@foreach($chunk as $item)

	    	<div class="col-md-4 box_2">
		     	<div class="grid_1">
		     		<a href="{{ url('product/'.$item->id) }}">
		     		<div class="b-link-stroke b-animate-go  thickbox">
			        <img src="{{ asset('../images/backend_images/products/small/'.$item->image)}}" class="img-responsive" alt=""/></div>
		     	   	<div class="grid_2">
			     	  	<p>{{ $item->product_name }}</p>
			     	  	<ul class="grid_2-bottom">
			     	  		<li class="grid_2-left"><p>TK {{ $item->price }}</p></li>
			     	  		<li class="grid_2-right">
			     	  			<div class="btn btn-primary btn-normal btn-inline " target="_self" title="Get It">Get It
			     	  			</div>
			     	  		</li>
			     	  	</ul>
		     	   	</div>
		     	</div>
		     		</a>
		 	</div>
			 		<?php $count++; ?>
				@endforeach
	     <div class="clearfix"> </div>
	    </div> 
	    @endforeach 
        </div>
      </div> 
	</div>
</div>
</div>


@endsection