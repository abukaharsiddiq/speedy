<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;
use App\productCategoryModel;
use App\subcategoryModel;
use App\third_categoryModel;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $category = productCategoryModel::orderBy('id','ASC')->get();
        $subSeect = subcategoryModel::orderBy('id','ASC')->get();
        $third_category = third_categoryModel::orderBy('id','ASC')->get();
        return view('admin.product',['cat'=>$category,'subCategory'=>$subSeect,'Third'=>$third_category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $db = ProductModel::orderBy('id','DESC')->paginate(20);
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
        $db = new ProductModel();

        $valid = Validator::make($request->all(),['product_name'=>'required','category'=>'required','price'=>'required','product_quantity'=>'required']);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $product_name = $request->input('product_name');
        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $thirdcategory_id = $request->input('thirdcategory_id');
        $special = $request->input('special');
        $product_serial = $request->input('product_serial');
        $product_quantity = $request->input('product_quantity');
        $description = $request->input('description');
        $price = $request->input('price');
        $sell_price = $request->input('sell_price');
        $profit = $request->input('profit');
        $image_name = $request->file('image');
        if($image_name){
            $image_convert = md5(time()).'.'.$image_name->getClientOriginalExtension();
            $image_name->move('photo',$image_convert);
        }
        else{
            $image_convert = 'noimage.jpg';
        }

        $db->product_name=$product_name;
        $db->category=$category;
        $db->subcategory_id=$subcategory;
        $db->thirdcategory_id=$thirdcategory_id;
        $db->special=$special;
        $db->quantity=$product_quantity;
        $db->serial_number=$product_serial;
        $db->description=$description;
        $db->price=$price;
        $db->sell_price=$sell_price;
        $db->profit_money=$profit;
        $db->image=$image_convert;
        $db->admin_id='Doofazit';

        $db->save();

        return redirect()->back()->with('success','Product Uploaded Successful !');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $db = ProductModel::find($id);

         if(file_exists('photo/'.$db->image) AND !empty($db->image)){
            unlink('photo/'.$db->image);
              }
       $db->delete();
       return redirect()->back()->with('success','Product delete Successful !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $db = ProductModel::find($id);
         $category = productCategoryModel::orderBy('id','ASC')->get();
          $subSeect = subcategoryModel::orderBy('id','ASC')->get();
          $third_category = third_categoryModel::orderBy('id','ASC')->get();
        return view('admin.product_edit',['view'=>$db,'cat'=>$category,'subCategory'=>$subSeect,'Third'=>$third_category]);
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
        $db = ProductModel::find($id);

        $product_name = $request->input('product_name');
        $category = $request->input('category');
        $subcategory = $request->input('subcategory');
        $thirdcategory_id = $request->input('thirdcategory_id');
        $special = $request->input('special');
        $product_serial = $request->input('product_serial');
        $product_quantity = $request->input('product_quantity');
        $description = $request->input('description');
        $price = $request->input('price');
         $sell_price = $request->input('sell_price');
        $profit = $request->input('profit');
        $image_name = $request->file('image');
        if($image_name){
            $image_convert = md5(time()).'.'.$image_name->getClientOriginalExtension();
            $image_name->move('photo',$image_convert);

            //  if(file_exists('photo/'.$db->image) AND !empty($db->image)){
            // unlink('photo/'.$db->image);
            //   }
        }
        else{
            $image_convert = $db->image;
        }

        $db->product_name=$product_name;
        $db->category=$category;
         $db->subcategory_id=$subcategory;
         $db->thirdcategory_id=$thirdcategory_id;
         $db->special=$special;
        $db->quantity=$product_quantity;
        $db->serial_number=$product_serial;
        $db->description=$description;
        $db->price=$price;
        $db->sell_price=$sell_price;
        $db->profit_money=$profit;
        $db->image=$image_convert;
        $db->admin_id='easylifebd';

        $db->update();

        return redirect()->route('Product.create')->with('success','Product Update Successful !');
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
