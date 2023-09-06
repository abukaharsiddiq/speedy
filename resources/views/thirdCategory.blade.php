@extends('layouts.header')
@section('main-contain')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-head">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 padding">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 feature-title padding">
              @foreach($select = App\subcategoryModel::where('id','=',$third_id->id)->get() AS $subCate)
                <h3 class="text-center"> {{$subCate->subcategory_name}} </h3>
              @endforeach
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 feature-page">
               
            </div>
        </div>
    </div>


             
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 container_area padding" style="min-height: 800px;">
            <div class="col-md-2 hidden-xs hidden-sm" style="margin-top: 20px;">
              <div class="col-md-12 category-menu padding">
              <div class="col-md-12 category-title padding">
              <h3>Product Category</h3>
              </div>
              <div class="col-md-12 category-menu-left">
              <ul>
              @foreach($cat_view = App\productCategoryModel::orderBy('id','ASC')->get() AS $category)
              <li><a href="{{route('Home.show',$category->id)}}">{{str_limit($category->title,25)}} 
              <span class="glyphicon">&#xe080;</span></a>
              <ul>
              @foreach($selectSub = App\subcategoryModel::where('category_id','=',$category->id)->orderBy('position','ASC')->limit(20)->get() AS $subShow)
              <li> <a href="{{route('ThirdCategory.thirdCategoryVeiew',$subShow->id)}}">  {{str_limit($subShow->subcategory_name,30)}} </a> </li>
              @endforeach
              </ul>
              </li>
              @endforeach
              </ul>
              </div>

              </div>


            </div>

 <div class="col-md-10 padding">
   @foreach($selectPro = App\ProductModel::where('subcategory_id','=',$third_id->id)->get() AS $product)
        <!-- <div class="col-md-3  animated zoomIn"> -->
           <div class="col-md-3 col-xs-12 animated zoomIn">
                    <div class="col-xs-12 product-item padding">
                    <div class="col-sm-12 col-xs-6 padding">
                    <a href="{{route('Home.edit',$product->id)}}">
                      <div class="col-sm-12 col-xs-6 pi-img-wrapper ">
                        <img src="{{url('photo/'.$product->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-6">
                     <h3 style="font-size: 13px; font-weight: bold;">
                      <a href="{{route('Home.edit',$product->id)}}"> {{str_limit($product->product_name,40)}} </a></h3>
                    
                     <form action="{{route('Cart.store')}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <?php 
                       $checkCart = App\cartModel::where('user_id','=',$UserId)->where('product_id','=',$product->id)->where('active','=',0)->get()->count();
                       ?>
                         @if($checkCart !=0 )
                      <button type="button" class="btn-sm btn-success add2cart pull-left">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                      Added </button>
                        @else
                      <button class="btn-sm btn-danger add2cart  pull-left"  style="background:#2E3092;color:white;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                         Add to cart </button> 
                         @endif
                      </form>
                       <div class="pi-price pull-right"><p style="font-size: 15px;"> {{$product->price}} Tk</p></div>
                        </div>

                      </div>
                </div>
    @endforeach
       
    </div>
    </div>
</div>
</div>





            </div>
        </div>
    </div>
</div>


@endsection