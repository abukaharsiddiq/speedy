<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subcategoryModel;
use App\productCategoryModel;
use Validator;

class subCategorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = new subcategoryModel();
        $subselect = subcategoryModel::orderBy('position','ASC')->paginate(10);
        $select = productCategoryModel::orderBy('id','ASC')->get();
        return view('admin.subcategory',['Category'=>$select,'info'=>$subselect]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $db = subcategoryModel::orderBy('id','DESC')->paginate(20);
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
        $db = new subcategoryModel();

        $valid = Validator::make($request->all(),['category'=>'required','subcategory'=>'required']);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $position = $request->input('position');
     
      
        $db->category_id=$category;
        $db->subcategory_name=$subcategory;
        $db->position=$position;
       

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
         $db = subcategoryModel::find($id);

         $db->delete();
       return redirect()->back()->with('success','SubCategory Delete !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = subcategoryModel::find($id);
         $category = productCategoryModel::orderBy('id','ASC')->get();
        return view('admin.subcategoryEdit',['view'=>$db,'Category'=>$category]);
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
        $db = subcategoryModel::find($id);

        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
         $position = $request->input('position');


        $db->category_id=$category;
        $db->subcategory_name=$subcategory;
        $db->position=$position;


        $db->update();

        return redirect()->route('subCategory.index')->with('success','Category Update !');
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
