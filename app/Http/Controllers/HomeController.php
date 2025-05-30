<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\User;

use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

use App\Models\Order;

//namespace App\Http\Controllers\Orders;

class HomeController extends Controller
{
    public function home(){
        $product=Product::all();
        if(Auth::id()){
        $user=Auth::user();
        $userid=$user->id;
        $count=Cart::where('user_id',$userid)->count();
        }else{
            $count="";
            }
        return view('home.index',compact('product','count'));
    }

    public function login_home(){
        $product=Product::all();
        if(Auth::id()){
            $user=Auth::user();
            $userid=$user->id;
            $count=Cart::where('user_id',$userid)->count();
            }else{
                $count="";
                } 
        return view('home.index',compact('product','count')); 
    }

    public function product_details($id){
        $data=Product::find($id);
        if(Auth::id()){
            $user=Auth::user();
            $userid=$user->id;
            $count=Cart::where('user_id',$userid)->count();
        }else{
                $count="";
        }
        return view('home.product_details',compact('data','count'));
    }

    public function add_cart($id){
        $product_id=$id;
        $user=Auth::user();
        $user_id=$user->id;
        $data=new Cart;
        $data->user_id=$user_id;
        $data->product_id=$product_id;
        $data->save();
        //toastr()->timeout(10000)->closeButton()->addSuccess('Added to cart successfully');
        return redirect()->back();
    }

    public function mycart(){
        if(Auth::id()){
            $user=Auth::user();
            $userid=$user->id;
            $count=Cart::where('user_id',$userid)->count();
            $cart=Cart::where('user_id',$userid)->get();
        }else{
                $count="";
        }
        return view('home.mycart',compact('count','cart'));
    }

    public function confirm_order(Request $request){
        $name=$request->name;
        $address=$request->address;
        $phone=$request->phone;
        $userid=Auth::user()->id;
        $cart=Cart::where('user_id',$userid)->get();

        foreach($cart as $carts){
            $order=new Order;
            $order->product_id=$carts->product_id;
            $order->name=$name;
            $order->rec_address=$address;
            $order->phone=$phone;
            $order->user_id=$userid;
            $order->save();
        }
        $cart_remove=Cart::where('user_id',$userid)->get();

        foreach($cart_remove as $remove){
            $data=Cart::find($remove->id);
            $data->delete();
        }
        return redirect()->back();
    }

    public function myorders(){
        $user=Auth::user()->id;
        $count=Cart::where('user_id',$user)->get()->count();
        $order=Order::where('user_id',$user)->get();
        return view('home.order',compact('count','order'));
    }

    public function park(){
        return view('home.park');
    }

    public function why(){
        return view('home.why');
    }

    public function testimonial(){
        return view('home.testimonial');      
    }

    public function contactus(){
        return view('home.contactus');      
    }
}
