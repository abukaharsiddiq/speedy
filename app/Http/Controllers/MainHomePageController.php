<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\slideModel;
use App\CustomerModel;
use App\PopulerProductModel;
use App\productCategoryModel;
use App\ProductModel;
use App\OrderModel;
use App\galleryModel;
use App\third_categoryModel;
use App\subcategoryModel;
use App\cartModel;
use App\noticeModel;
use App\headlineModel;

class MainHomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $db = new noticeModel();
        $notice = $db->orderBy('id','DESC')->limit(3)->get();
        $headline = headlineModel::orderBy('id','DESC')->get();
        $slide = slideModel::orderBy('id','DESC')->get();
        $category = productCategoryModel::orderBy('id','ASC')->get();
        $new = ProductModel::orderBy('id','DESC')->paginate(100);
        return view('index',['slide'=>$slide,'cat_view'=>$category,'newProduct'=>$new,'notice'=>$notice,'headContain'=>$headline]);
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
        $Cdb = new cartModel();

        $db = new OrderModel();
        $valid = Validator::make($request->all(),['name'=>'required','email'=>'email','mobile'=>'required','address'=>'required']);
        if($valid->fails()){
            return redirect()->back()->withErrors($valid)->withInput();
        }

        $user = $request->input('name');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $district = $request->input('district');
        $address = $request->input('address');
        $user_id = $request->input('user_id');
        
        $unique_time = time();

        $image_name = $request->file('image');
        if($image_name){
            $image_conver = md5(time()).'.'.$image_name->getClientOriginalExtension();
            $image_name->move('photo',$image_conver);
        }
        else{
            $image_conver = 'noimage.jpg';
        }

        $Cart = cartModel::where('user_id','=',$user_id)->where('active','=',0)->get();
        // ----update-cart-model--
        foreach($Cart AS $catch){
        $cup = cartModel::find($catch->id);
        $cup->active=1;
        $cup->unique_id=$unique_time;
        $cup->update();

        }

// ---order request----
        $db->name=$user;
        $db->email=$email;
        $db->mobile=$mobile;
        $db->district=$district;
        $db->address=$address;
        $db->image=$image_conver;
        $db->user_id=$user_id;
        $db->active=0;
        $db->unactive=0;
        $db->unique_id=$unique_time;

        $db->save();

              





        return redirect()->back()->with('success','Order Request Successful !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product = ProductModel::where('category','=',$id)->orderBy('id','DESC')->paginate(32);
        return view('category',['categoryProduct'=>$product,'CategoryId'=>$id]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = ProductModel::find($id);
       return view('product_details',['detailsInfo'=>$details]);
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
       
    }

// ----------------home font page method crate- by OLiullah ---
    public function orderconform($id){
         $product = ProductModel::find($id);
         return view('orderConform',['product_id'=>$product]);
    }
    // ---third category page method--
   public function thirdCategoryVeiew($id){
         $thirdCategory = subcategoryModel::find($id);
         return view('thirdCategory',['third_id'=>$thirdCategory]);
    } 

     // ---fb link category page method--
   public function facebookCategoryView($id){
         $productSelect = ProductModel::find($id);

         $categoryId = $productSelect['category'];



       $product = ProductModel::where('category','=',$categoryId)->orderBy('id','DESC')->paginate(32);

         return view('fbCategory',['categoryProduct'=>$product,'CategoryId'=>$categoryId,'ProductId'=>$id]);

    }

    public function about_page(){
         return view('about');
    } 
    public function pressRoom_page(){
         return view('press_room');
    }
    public function beApart_page(){
         return view('beApart');
    }
    public function rulesRegulation_page(){
         return view('ruleRegualation');
    }
     public function frequent(){
         return view('frequent');
    }
    public function discountPlan_page(){
         return view('discount_plan');
    }
    public function gallery_page(){
         $db = galleryModel::orderBy('id','DESC')->paginate(12);
         return view('gallery',['gallery'=>$db]);
    }
    public function contact_page(){
         return view('contact');
    }

     public function productList_info(){
         $select = ProductModel::orderBy('id','DESC')->paginate(20);
         return view('product_list');
    }

   public function agent_list(){
         // $select = ProductModel::orderBy('id','DESC')->paginate(20);
         return view('agrent_list');
    }

}
