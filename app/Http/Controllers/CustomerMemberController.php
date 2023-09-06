<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\CustomerModel;
class CustomerMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CustomerModel::orderBy('id','ASC')->paginate(5);
        return view('admin.customer',['customer'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $db = CustomerModel::orderBy('id','DESC')->paginate(20);
        return view('admin.product_view',['Product'=>$db]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new CustomerModel();

        $valid = Validator::make($request->all(),['customer'=>'required','email'=>'email','mobile'=>'required']);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $customer = $request->input('customer');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $designation = $request->input('designation');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $inlinked = $request->input('inlinked');
        $google = $request->input('google');
        $description = $request->input('description');
      
        $image_name = $request->file('image');
        if($image_name){
            $image_convert = md5(time()).'.'.$image_name->getClientOriginalExtension();
            $image_name->move('photo',$image_convert);
        }
        else{
            $image_convert = 'noimage.jpg';
        }

        $db->name=$customer;
        $db->eamil=$email;
        $db->mobile=$mobile;
        $db->designation=$designation;
        $db->facebook=$facebook;
        $db->twitter=$twitter;
        $db->google_pluz=$google;
        $db->inlink=$inlinked;
        $db->description=$description;
        $db->image=$image_convert;
        $db->admin_id='Doofazit';

        $db->save();

        return redirect()->back()->with('success','Customer registration Successful !');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $db = CustomerModel::find($id);

         if(file_exists('photo/'.$db->image) AND !empty($db->image)){
            unlink('photo/'.$db->image);
              }
       $db->delete();
       return redirect()->back()->with('success','Customer delete Successful !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = CustomerModel::find($id);
       
        return view('admin.customer_edit',['view'=>$db]);
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
        $db = CustomerModel::find($id);

         $customer = $request->input('customer');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $designation = $request->input('designation');
        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $inlinked = $request->input('inlinked');
        $google = $request->input('google');
        $description = $request->input('description');
      
        $image_name = $request->file('image');
        if($image_name){
            $image_convert = md5(time()).'.'.$image_name->getClientOriginalExtension();
            $image_name->move('photo',$image_convert);
        }
        else{
            $image_convert = 'noimage.jpg';
        }

        $db->name=$customer;
        $db->eamil=$email;
        $db->mobile=$mobile;
        $db->designation=$designation;
        $db->facebook=$facebook;
        $db->twitter=$twitter;
        $db->google_pluz=$google;
        $db->inlink=$inlinked;
        $db->description=$description;
        $db->image=$image_convert;
        $db->admin_id='Doofazit';

        $db->update();

        return redirect()->route('Customer.index')->with('success','Customer Update Successful !');
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
