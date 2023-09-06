@extends('layouts.header')
@section('main-contain')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-head">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 padding">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 feature-title padding">
              @if($cat = App\productCategoryModel::find($CategoryId))
                <h3 class="text-center"> {{$cat->title}} </h3>
              @endif
            </div>
          
        </div>
    </div>



                
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 container_area padding" style="min-height: 800px;">
         <div class="col-lg-12 col-md-12 col-sm-12 padding">
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
    @foreach($product = App\ProductModel::where('id','=',$ProductId)->orderBy('id','DESC')->get() AS $valueSel)
        <div class="col-md-3  animated zoomIn" >
           
            <div class="col-xs-12 product-item padding">
                    <div class="col-sm-12 col-xs-6 padding">
                    <a href="{{route('Home.edit',$valueSel->id)}}">
                      <div class="col-sm-12 col-xs-6pi-img-wrapper ">
                        <img src="{{url('photo/'.$valueSel->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-6">
                     <h3 style="font-size: 13px; font-weight: bold;">
                      <a href="{{route('Home.edit',$valueSel->id)}}"> 
                        {{str_limit($valueSel->product_name,40)}}
                       
                      </a>
                    </h3>
                    
                       <form action="{{route('Cart.store')}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="product_id" value="{{$valueSel->id}}">
                      <input type="hidden" name="price" value="{{$valueSel->price}}">
                      <?php      
                      $checkCart = App\cartModel::where('user_id','=',$UserId)->where('product_id','=',$valueSel->id)->get()->count();
                      ?>
                      
                      @if($checkCart !=0 )
                      <button type="button" class="btn-sm btn-success add2cart pull-left">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        Added
                       </button> 

                      @else
                       <button class="btn-sm btn-primary add2cart pull-left" style="background:#2E3092;color:white;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                         Add to cart </button> 
                      @endif
                      </form>
                       <div class="pi-price pull-right"><p style="font-size: 15px;"> {{$valueSel->price}} Tk</p></div>
                     </div>




               </div>
        </div>
    @endforeach

    @foreach($categoryProduct AS $value)

      @if($value->id !=$ProductId)
        <div class="col-md-3  animated zoomIn" >
           
            <div class="col-xs-12 product-item padding">
                    <div class="col-sm-12 col-xs-6 padding">
                    <a href="{{route('Home.edit',$value->id)}}">
                      <div class="col-sm-12 col-xs-6pi-img-wrapper ">
                        <img src="{{url('photo/'.$value->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-6">
                     <h3 style="font-size: 13px; font-weight: bold;">
                      <a href="{{route('Home.edit',$value->id)}}">
                        {{str_limit($value->product_name,40)}}
                       
                      </a>
                    </h3>
                    
                       <form action="{{route('Cart.store')}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="product_id" value="{{$value->id}}">
                      <input type="hidden" name="price" value="{{$value->price}}">
                      <?php      
                      $checkCart = App\cartModel::where('user_id','=',$UserId)->where('product_id','=',$value->id)->get()->count();
                      ?>
                      
                      @if($checkCart !=0 )
                      <button type="button" class="btn-sm btn-success add2cart pull-left">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        Added
                       </button> 

                      @else
                       <button class="btn-sm btn-primary add2cart pull-left" style="background:#2E3092;color:white;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                         Add to cart </button> 
                      @endif
                      </form>
                       <div class="pi-price pull-right"><p style="font-size: 15px;"> {{$value->price}} Tk</p></div>
                     </div>




               </div>
        </div>
        @endif
    @endforeach


     <div class="col-lg-12 pull-right"> {{$categoryProduct->links()}} </div>
  </div>
         
    </div>
</div>
</div>


 



            </div>
        </div>
    </div>
</div>


@endsection