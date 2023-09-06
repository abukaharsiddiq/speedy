<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\slideModel;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new slideModel();
        $slide = $db->orderBy('id','DESC')->paginate(5);
        return view('admin.slider',['view'=>$slide]);
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
        $db = new slideModel();
        $valid = Validator::make($request->all(),
            [
            'title'=>'required',
            'image'=>'required | mimes:jpeg,jpg,png,gif'
            ]);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $title = $request->input('title');
        $image = $request->file('image');
        if($image){
             $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
            $image->move('photo',$image_name);
        }
        else{
            $image_name = "noimage.jpg";
        }

        $db->title = $title;
        $db->image = $image_name;
        $db->save();
        return redirect()->back()->with('success', 'Slide uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $db = slideModel::find($id);
     if(file_exists('photo/'.$db->image) AND !empty($db->image)){
     unlink('photo/'.$db->image);
            
    }
    $db->delete();
        return redirect()->back()->with('success','Slide Delete Successful !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = slideModel::find($id);
       return view('admin.slider_edit',['view'=>$db]);
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
       $db = slideModel::find($id);

        $title = $request->input('title');
        $image = $request->file('image');
        
        if($image){
        $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
        $image->move('photo',$image_name);

        if(file_exists('photo/'.$db->image) AND !empty($db->image)){
            unlink('photo/'.$db->image);
        }
       }
       else{
         $image_name = "noimage.jpg";
       }

        $db->title = $title;
        $db->image = $image_name;
        $db->update();
        return redirect()->route('SlideAdmin.index')->with('success','Slide Update Successful !');
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
