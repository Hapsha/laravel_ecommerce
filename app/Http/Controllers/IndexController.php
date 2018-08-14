<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Banner;

class IndexController extends Controller
{
    public function index(){

    	//in ascending order
    	$productsAll = Product::get();

    	//in descending order
    	$productsAll = Product::orderBy('id','DESC')->get();

    	// in random order
    	$productsAll = Product::inRandomOrder()->where('status',1)->limit(9)->get();

    	//get all categories and sub-categories
    	$categories = Category::with('categories')->where(['parent_id'=>0])->get();
    	/*$categories = json_decode(json_encode($categories));
    	echo "<pre>"; print_r($categories); die;*/
    	/*$categories_menu ="";
    	foreach ($categories as $cat) {
    		$categories_menu .="<li class='item1'><a href='#".$cat->id."'><img class='rrow-img' src='{{ asset('images/frontend_images/images/f_menu.png') }}' alt=''/> ".$cat->name."</a>
						<ul class='cute'>";
						$sub_categories = Category::where(['parent_id'=>$cat->id])->get();
			    		foreach ($sub_categories as $subcat) {
			    			$categories_menu .="<li class='subitem1'><a href='".$subcat->url."'>".$subcat->name."</a></li>";
			    		}
							
						$categories_menu .="</ul>
					</li>";
    		
    	}*/

        //get banner image
        $bannerImage = Banner::get();

    	return view('index')->with(compact('productsAll','categories_menu','categories','bannerImage')); 
    }
}
