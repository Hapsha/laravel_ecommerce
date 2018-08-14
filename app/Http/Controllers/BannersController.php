<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use App\Banner;

class BannersController extends Controller
{
    public function addBanner(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();



    		$banner = new Banner;
    		$banner->title = $data['title'];
    		$banner->link = $data['link'];

    		//upload image
    		if($request->hasfile('image')){
    			$image_tmp = Input::file('image');
    			if($image_tmp->isValid()){
    				
    				$extension = $image_tmp->getClientOriginalExtension();
    				$filename = rand(111,99999).'.'.$extension;
    				$banner_path = 'images/frontend_images/banners/'.$filename;

    				//Resize image
    				Image::make($image_tmp)->resize(1600,627)->save($banner_path);

						//store image
    				$banner->image = $filename;

    			}
    		}

            if(empty($data['status'])){
                $status=0;
            }else{
                $status=1;
            }

            $banner->status = $status;
    		$banner->save();
    		//return redirect()->back()->with('flash_message_success','Banner has been added successfully!');
    		return redirect('admin/view-banner')->with('flash_message_success','Banner has been added successfully!');
    	}

    	return view('admin.banners.add_banner');
    }


    public function viewBanner(){
    	$banners = Banner::get();
    	return view('admin.banners.view_banner')->with(compact('banners'));
    }

    public function editBanner(Request $request,$id=null){

    	if($request->isMethod('post')){
            $data = $request->all();

            //upload image
            if($request->hasfile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $banner_path = 'images/frontend_images/banners/'.$filename;
                    //Resize image
                    Image::make($image_tmp)->resize(1600,627)->save($banner_path);
                }    
            }else{
                $filename = $data['current_image'];
            }

            if(empty($data['status'])){
                $status = 0;
            }else{
                $status = 1;
            }

            Banner::where(['id'=>$id])->update(['image'=>$filename,'title'=>$data['title'],'link'=>$data['link'],'status'=>$status]);

            return redirect('/admin/view-banner')->with('flash_message_success','Banner updated successfully!');
        }
    	$bannerDetails = Banner::find($id);
    	return view('admin.banners.edit_banner')->with(compact('bannerDetails'));
    }


    public function deleteBanner(Request $request, $id = null){
    		Banner::where(['id'=>$id])->delete();
    		return redirect()->back()->with('flash_message_success','Banner deleted successfully!');
    }


    public function deleteBannerImage($id = null){

        $bannerImage = Banner::where(['id'=>$id])->first();

        //get product image pqth
        $banner_path = 'images/frontend_images/banners/';

        //Delete
        if(file_exists($banner_path.$bannerImage->image)){
            unlink($banner_path.$bannerImage->image);
        }

        Banner::where(['id'=>$id])->update(['image'=>'']);
        
        return redirect()->back()->with('flash_message_success','Banner image has been deleted successfully!');
    }


}
