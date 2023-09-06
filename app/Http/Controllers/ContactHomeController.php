<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contactemail_model;
use Validator;

class ContactHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new contactemail_model();
        $email = $db->orderBy('id','DESC')->where('able','=',0)->paginate(10);
        return view('admin.contact_email',['Contact'=>$email]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $db = new contactemail_model();
        $email = $db->orderBy('id','DESC')->where('able','=',1)->paginate(10);
        return view('admin.approve_email',['Contact'=>$email]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new contactemail_model();
        $valid = Validator::make($request->all(),['name'=>'required','email'=>'required|email','message'=>'required']);
        if($valid->fails()){
            return redirect()->back()->withInput()->withErrors($valid);
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        $db->name=$name;
        $db->email=$email;
        $db->subject=$subject;
        $db->message=$message;
        $db->able=0;

        $db->save();
          return redirect()->back()->with('success','Successful !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $db = contactemail_model::find($id);
         $db->delete();
          return redirect()->back()->with('success','Delete success !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = contactemail_model::find($id);
        $db->able=1;
        $db->update();

        return redirect()->back()->with('success','Conform !');

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
