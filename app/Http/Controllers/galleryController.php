<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galleryModel;
use Validator;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = galleryModel::orderBy('id','DESC')->paginate(6);
        return view('admin.gallery',['Gallery'=>$db]);
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
        $db = new galleryModel();
        $valid = Validator::make($request->all(),['title'=>'required']);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }
        $title = $request->input('title');
        $image_name = $request->file('image');
        if($image_name){
            $image_convert = md5(time()).'.'.$image_name->getClientOriginalExtension();
            $image_name->move('photo',$image_convert);
        }

        $db->title=$title;
        $db->image=$image_convert;
        $db->save();

        return redirect()->back()->with('success','Gallery Uploaded Successful !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $db = galleryModel::find($id);
     if(file_exists('photo/'.$db->image) AND !empty($db->image)){
     unlink('photo/'.$db->image);
            
    }
    $db->delete();
        return redirect()->back()->with('success','Gallery Delete Successful !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = galleryModel::find($id);
       return view('admin.gallery_edit',['view'=>$db]);
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
        $db = galleryModel::find($id);

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
        return redirect()->route('GalleryAdmin.index')->with('success', 'File uploaded successfully.');
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
