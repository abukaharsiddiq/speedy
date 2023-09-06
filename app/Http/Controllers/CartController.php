<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cartModel;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $db = new cartModel();
         // session_start();
        $user_id = session_id();
        $product_id = $request->input('product_id');
        $buyNow = $request->input('buyNow');
       
        if($request->input('quantity')){
             $quantity = $request->input('quantity');
             $db->quantity=$quantity;
        }else{
            $quantity=1;
             $db->quantity=$quantity;
        }
        

       $price = $request->input('price');
          $order_count = cartModel::where('product_id','=',$product_id)->where('user_id','=',$user_id)->where('active','=',0)->count();
        if($order_count==0){// single cart active 

        $db->user_id=$user_id;
        $db->product_id=$product_id;
        $db->date_time=date('d-m-Y');
        $db->price=$price;
       
        $db->unique_id='';
        $db->active=0;
        $db->save();

      } // end if

        if ($buyNow == 2) {
            return redirect()->route('Cart.show',$user_id);
        }else{
        return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $selectCart = cartModel::where('user_id','=',$id)->where('active','=',0)->get();
         return view('orderRequest',['CartProduct'=>$selectCart,'user_id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $select = cartModel::find($id);
       $select->delete();


        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
