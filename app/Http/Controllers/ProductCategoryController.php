<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productCategoryModel;
use Validator;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new productCategoryModel();
        $cat = $db->orderBy('id','DESC')->paginate(5);
        return view('admin.category_product',['info'=>$cat]);
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
        $db = new productCategoryModel();
        $valid = Validator::make($request->all(),
            [
            'title'=>'required'
           
            ]);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $title = $request->input('title');
        $category_marquee = $request->input('category_marquee');
        // $image = $request->file('image');
        // if($image){
        //      $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
        //     $image->move('photo',$image_name);
        // }
        // else{
        //     $image_name = "noimage.jpg";
        // }

        $db->title = $title;
        $db->image = $category_marquee;
        $db->save();
        return redirect()->back()->with('success', 'Product Category uploaded successful !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $db = productCategoryModel::find($id);
     if(file_exists('photo/'.$db->image) AND !empty($db->image)){
     unlink('photo/'.$db->image);
            
    }
    $db->delete();
        return redirect()->back()->with('success','Product Cateogry Delete Successful !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = productCategoryModel::find($id);
       return view('admin.category_product_edit',['view'=>$db]);
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
       $db = productCategoryModel::find($id);

        $title = $request->input('title');
         $category_marquee = $request->input('category_marquee');
        // $image = $request->file('image');
        
       //  if($image){
       //  $image_name = md5(time()).'.'.$image->getClientOriginalExtension();
       //  $image->move('photo',$image_name);

       //  if(file_exists('photo/'.$db->image) AND !empty($db->image)){
       //      unlink('photo/'.$db->image);
       //  }
       // }
       // else{
       //   $image_name = "noimage.jpg";
       // }

        $db->title = $title;
        $db->image = $category_marquee;
        $db->update();
        return redirect()->route('ProductCategory.index')->with('success','Product Category Update Successful !');
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