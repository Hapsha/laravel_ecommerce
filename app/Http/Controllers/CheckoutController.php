<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function userLogin(){
    	return view('checkouts.user_login');
    }


    public function customerRegistration(Request $request){
      $data=array();
      $data['customer_name']=$request->customer_name;
      $data['customer_email']=$request->customer_email;
      $data['password']=md5($request->password);
      $data['mobile']=$request->mobile;

        $customer_id=DB::table('customer')
                     ->insertGetId($data);

               Session::put('id',$customer_id);
               Session::put('customer_name',$request->customer_name);
               return Redirect('/checkout');      

    }


   	public function checkout(){
    	
      return view('checkouts.checkout');

    }


    public function save_shipping_details(Request $request){

      $data=array();
      $data['shipping_email']=$request->shipping_email;
      $data['shipping_first_name']=$request->shipping_first_name;
      $data['shipping_last_name']=$request->shipping_last_name;
      $data['shipping_address']=$request->shipping_address;
      $data['shipping_mobile']=$request->shipping_mobile;
      $data['shipping_city']=$request->shipping_city;

        $shipping_id=DB::table('shipping')
                     ->insertGetId($data);
           Session::put('id',$shipping_id);
           return Redirect::to('/payment'); 

    }


    public function customerLogin(Request $request){
      $customer_email=$request->customer_email;
      $password=md5($request->password);
      $result=DB::table('customer')
              ->where('customer_email',$customer_email)
              ->where('password',$password)
              ->first();

	     if ($result) {
	       
	       Session::put('id',$result->id);
	       return Redirect::to('/checkout');
	     }else{
	        
	        return Redirect::to('/user-login');
	     }
    }

    public function payment(){
      return view('checkouts.payment')->with(compact('userCart'));
    }


    public function orderPlace(Request $request)
    {
      $payment_gateway=$request->payment_method;

      // $total=Cart::total();
 /*      echo $payment_gateway;*/
      
      $pdata=array();
      $pdata['payment_method']=$payment_gateway;
      $pdata['payment_status']='pending';
      $payment_id=DB::table('payment')
             ->insertGetId($pdata);
  

      $odata=array();
      $odata['customer_id']=Session::get('id');
      $odata['shipping_id']=Session::get('id');
      $odata['payment_id']=$payment_id;
      $odata['order_status']='pending';
      $order_id=DB::table('order')
               ->insertGetId($odata);
 

     if ($payment_gateway=='handcash') {
          
          return view('checkouts.handcash');
         
        
     }elseif ($payment_gateway=='cart') {
   
     return view('checkouts.handcash');
      
     }elseif($payment_gateway=='paypal'){

         return view('checkouts.handcash');
     }else{
      echo "not selectd";
     }


    }


    public function viewOrder(){
      $all_order_info=DB::table('order')->join('customer','order.customer_id','=','customer.id')->select('order.*','customer.customer_name')->get();

       return view('admin.orders.view_order')->with(compact('all_order_info'));

  	}


  	public function manageOrder($order_id){
      $order_by_id=DB::table('order')
              ->join('customer','order.customer_id','=','customer.id')
              ->join('shipping','order.shipping_id','=','shipping.id')
              ->select('order.*','shipping.*','customer.*')
              ->where('order.order_id',$order_id)
              ->get();

       return view('admin.orders.manage_order')->with(compact('order_by_id'));
               
                     // echo "<pre>";
                     //  print_r($order_by_id);
                     // echo "</pre>";

  	}


    public function customerLogout()
    {
      Session::flush();
      return Redirect::to('/');
    }


}
