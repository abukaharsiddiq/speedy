<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\third_categoryModel;
use App\subcategoryModel;
use App\productCategoryModel;
use Validator;

class third_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new third_categoryModel();
        $third_category = third_categoryModel::orderBy('id','ASC')->paginate(10);
        $selectCAT = productCategoryModel::orderBy('id','ASC')->get();
        $selectSub = subcategoryModel::orderBy('id','ASC')->get();
        return view('admin.third_category',['Category'=>$selectCAT,'SubCategory'=>$selectSub,'info'=>$third_category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $db = third_categoryModel::orderBy('id','DESC')->paginate(20);
        return view('admin.populer_productView',['Product'=>$db]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new third_categoryModel();

        $valid = Validator::make($request->all(),['category'=>'required','subcategory'=>'required']);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $third_category = $request->input('third_category');
     
      
        $db->category_id=$category;
        $db->subcategory_id=$subcategory;
        $db->third_category_name=$third_category;
       

        $db->save();

        return redirect()->back()->with('success',' Successful !');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $db = third_categoryModel::find($id);

         $db->delete();
       return redirect()->back()->with('success','ThirdCategory Delete !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = third_categoryModel::find($id);
         $category = productCategoryModel::orderBy('id','ASC')->get();
         $subcategory = subcategoryModel::orderBy('id','ASC')->get();
        return view('admin.third_categoryEdit',['view'=>$db,'Category'=>$category,'SubCategory'=>$subcategory]);
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
        $db = third_categoryModel::find($id);

        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $third_category = $request->input('third_category');
     
      
        $db->category_id=$category;
        $db->subcategory_id=$subcategory;
        $db->third_category_name=$third_category;

        $db->update();

        return redirect()->route('ThirdCategoryAdmin.index')->with('success','Category Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $db = third_categoryModel::find($id);

         $db->delete();
       // return redirect()->back()->with('success','SubCategory Delete !');
    }
}
