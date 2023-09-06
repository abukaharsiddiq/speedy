<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderModel;
use Validator;

class OrderInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new OrderModel();
        $view  = $db->orderBy('id','DESC')->where('active','=',0)->where('unactive','=',0)->paginate(20);
        return view('admin.order_info',['order'=>$view]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $db = new OrderModel();
        $view  = $db->orderBy('id','DESC')->where('active','=',1)->where('unactive','=',0)->paginate(20);
        return view('admin.orderConform',['order'=>$view]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $db = new OrderModel();
         $Valid = Validator::make($request->all(),['form_date'=>'required','to_date'=>'required']);
         if($Valid->fails()){
            return redirect()->back()->withErrors($Valid)->withInput();
         }

          $form_date=$request->input('form_date');
          $to_date=$request->input('to_date');

         $search = $db->whereBetween('created_at',[$form_date,$to_date])->paginate(20);
        
         return view('admin.search_result',['order'=>$search]);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db = OrderModel::find($id);
        return view('admin.orderDetails',['order'=>$db]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $db = OrderModel::find($id);
       $db->active=1;
       $db->update();

       return redirect()->back()->with('success','User Order Conform Successful !');
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

    public function orderCancel_method($id){
       $db = OrderModel::find($id);
       $db->unactive=1;
       $db->update();

       return redirect()->back()->with('success','User Order Cencel Successful !');
    }

    public function orderDelete_method($id){
       $db = OrderModel::find($id);
       $db->delete();
       return redirect()->back()->with('success','Order Delete Successful !');
    }

    public function orderCancel_MemberView(){
        $db = new OrderModel();
        $view  = $db->orderBy('id','DESC')->where('active','=',0)->where('unactive','=',1)->paginate(50);
      
       return view('admin.orderCancel',['order'=>$view]);
       
    } 
    public function orderSearch(){
        $db = new OrderModel();
        // $view  = $db->orderBy('id','DESC')->where('active','=',1)->where('unactive','=',0)->paginate(50);
      
       return view('admin.orderSearch');
       
    }
}
