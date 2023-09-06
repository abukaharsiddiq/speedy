<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoGallery;
class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=VideoGallery::get();
        return view('admin.videoGallery')->with('category',$category);
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
        $db=new VideoGallery();
    
        $url=$request->input('url');
    
        $db->url=$url;
        $db->save();
        return back()->with('success','Upload success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $db=VideoGallery::find($id);
        $db->delete();
        return back()->with('success','Deleted success!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view=VideoGallery::find($id);
        return view('admin.videoGalleryEdit')->with('view',$view);
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
        $db=VideoGallery::find($id);      
        $url=$request->input('url');       
        $db->url=$url;
        $db->update();
        return redirect()->route('video.index')->with('success','Update success!!');
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

