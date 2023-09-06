@extends('layouts.header')
@section('main-contain')

<div class="container-fluid" style="background: #fff;">
    <div class="container-fluid padding" id="" tabindex="-1">
        <div class="row padding">

<div class="col-lg-12 col-md-12 col-sm-12 padding">
        <div class="col-md-3 col-xs-12 category-area">
          <div class="col-md-12 category-title">
             <h3>Category name</h3>
          </div>
          <div class="col-md-12 category-menu padding">
            <ul>
              <li><a href=""> হলুদের গুঁড়া</a></li>
              <li><a href=""> মরিচের গুঁড়া</a></li>
              <li><a href=""> ধনিয়ার গুঁড়া </a></li>
              <li><a href=""> জিরার গুঁড়া</a></li>
              <li><a href=""> রসুনের গুঁড়া</a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
              <li><a href=""> গরম মশলা </a></li>
            </ul>

          </div>
           
        </div>

        <div class="col-md-9 col-xs-12 padding">


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <?php $s=1; ?>
              @foreach($slide AS $one=>$view1)
                <li @if($s==1) data-target="#carousel-example-generic" data-slide-to="{{$s}}" class="active"> @endif</li>
                <?php $s++; ?>
              @endforeach
                <!-- <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li> -->
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <?php $sk=1; ?>
            @foreach($slide AS $key=>$view)
                <div class="item @if($sk==1) active @endif">
                    <img src="{{url('photo/'.$view->image)}}" alt="..." style="width: 100%;">
                    <div class="carousel-caption">

                    </div>
                </div>
                <?php $sk++; ?>
            @endforeach
                        <!-- <div class="item">
                            <img src="img/s1.png" alt="..." style="width: 100%;">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <img src="img/s3.png" alt="..." style="width: 100%;">
                            <div class="carousel-caption">

                            </div>
                        </div> -->

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

<!-- ---------Marquee company title------------- -->

          <div class="container-fluid" style="background: #3b579d;color: white;margin-top: 1px;">
              <div class="container">
                  <marquee>  
                  <p style="color: white; font-size: 22px; line-height: 30px;margin-bottom: 0px; ">Welcome to Easy life E-commerce Limited. You will shop Easy Life all product form this E-commerce website. Have any query please contact with us. </p>
                  <!-- <p style="color: white; font-size: 15px; line-height: 20px; "></p> -->
                  </marquee>
              </div>
          </div>

  <!-- ---------Marquee company title------------- -->

  <!-- ------------upcomming or Rcent product -->




   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding">
      <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
         <!--========= Wrapper for slides =========-->
         <div class="carousel-inner" role="listbox">
            <!--========= 1st slide =========-->

      <?php $a=1; 
        $totalCount = App\ProductModel::where('special','=',1)->get()->count(); 
        $division = $totalCount/3;

      ?>
       @for($i=1; $i<=$division;$i++)
        <?php 
          if($i==1){
            $slimit = 0;
          }else{
            $s = $i-1;
            $slimit = $s*4;
          }
         ?>

            <div class="item @if($a==1){{'active'}}@endif">
             @foreach($sePro = App\ProductModel::where('special','=',1)->orderBy('id','DESC')->offset($slimit)->limit(4)->get() AS $slideP)
               <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 team_columns_item_image padding">
                  <!-- <img src="{{url('photo/'.$slideP->image)}}" alt="" style="height: 250px;">
                  <div class="team_columns_item_caption">
                     <h4>{{str_limit($slideP->product_name,20)}}</h4>
                   
                     <h5>{{$slideP->price}}</h5>
                  </div> -->

                   <div class="col-xs-12 product-item padding animated zoomIn animated">
                    <div class="col-sm-12 col-xs-6 padding">
                    <a href="{{route('Home.edit',$slideP->id)}}">
                      <div class="col-sm-12 col-xs-6 pi-img-wrapper ">
                        <img src="{{url('photo/'.$slideP->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-6">
                     <h3 style="font-size: 15px;min-height: 30px;line-height: 15px;">
                      <a href=""> 
                        {{str_limit($slideP->product_name,25)}}
                       
                      </a>
                    </h3>
                     <div class="pi-price" style="font-size: 1em;"><p> {{$slideP->price}} Tk</p></div>
                     <form action="{{route('Cart.store')}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="product_id" value="{{$slideP->id}}">
                      <input type="hidden" name="price" value="{{$slideP->price}}">
                      <?php 
                       $checkCart = App\cartModel::where('user_id','=',$UserId)->where('product_id','=',$slideP->id)->get()->count();
                       ?>
                         @if($checkCart !=0 )
                      <button type="button" class="btn btn-success pull-right"  style="height: 30px;">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      Added </button>
                        @else
                      <button class="btn btn-primary add2cart pull-right"  style="background:#e84d1c;color:white;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                         Add to cart </button> 
                         @endif
                      </form>
                     </div>




               </div>
               </div>
               @endforeach

            </div>
            <?php $a++; ?>
            @endfor
        
        
         </div>
        

         <a class="left carousel-control team_columns_carousel_control_left adv_left" href="#adv_team_4_columns_carousel" role="button" data-slide="prev" style="float: left;margin-left: -26px;">
         <span class="fa fa-angle-left team_columns_carousel_control_icons" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a >
         <!--======= Right Button =========-->
         <a class="right carousel-control team_columns_carousel_control_right adv_right" href="#adv_team_4_columns_carousel" role="button" data-slide="next" style="float: left;margin-left: -26px;">
         <span class="fa fa-angle-right team_columns_carousel_control_icons" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>

      </div>
   </div>





  <!-- ------------upcomming or Rcent product end -->




            </div>
        </div>
        </div>
    </div>
</div>





<!-- our client -->

<!-- <div class="container">
    <div class="row">
        <div class="col-md-12 padding">
            <center><h1> Our Product </h1></center>
            <hr>
            @foreach($cat_view AS $category)
            <div class="col-md-4 col-sm-6 col-xs-12 clientarea"> 
            <a href="{{route('Home.show',$category->id)}}">
            <img src="{{url('photo/'.$category->image)}}" class="img-responsive border">
            <p> {{$category->title}}</p>

            </a>
             </div>
            @endforeach

            
        </div>
    </div>
</div> -->




<!-- content -->

<div class="container-fluid">
    <div class="row">
       
 @foreach($category = App\productCategoryModel::orderBy('id','ASC')->get() AS $viewCat)
<div class="col-lg-12 col-md-12 padding" style="background: #fff; margin-top:5px;">
      <a href="{{route('Home.show',$viewCat->id)}}"> <h2 style="color: green; text-decoration: none;" class="text-center"> {{$viewCat->title}}</h2> </a>
 
  
  @foreach($selectSub = App\subcategoryModel::where('category_id','=',$viewCat->id)->orderBy('position','ASC')->get() AS $subShow)
<div class="col-lg-12 col-md-12" style="background: #fff;">
      <div class="col-lg-2 col-md-2 third-categoryarea padding">
         <div class="col-lg-12 col-mg-12 third-category-title padding">
          <h4 class="text-left" style="padding: 0px 5px;">Product Category</h4>
        </div>
          <div class="col-lg-12 col-mg-12 third-category padding">
            @foreach($third = App\third_categoryModel::where('subcategory_id','=',$subShow->id)->get() AS $thirdCategory)
            <div class="col-sm-12 col-xs-6 third-category-list padding"> <a href="{{route('ThirdCategory.thirdCategoryVeiew',$thirdCategory->id)}}">{{$thirdCategory->third_category_name}} </a></div>
            @endforeach
           
          </div>
      </div>
    <div class="col-lg-10 col-md-10 padding">

      <div class="col-md-12 subcategory-title">  <h4> {{$subShow->subcategory_name}} </h4></div>

      <div id="carousel-example-product{{$subShow->id}}" class="carousel slide" data-ride="carousel">
     <?php
       $totalCount = App\ProductModel::where('subcategory_id','=',$subShow->id)->get()->count(); 
       $divshow = $totalCount/3;

      ?>

      <div class="carousel-inner" role="listbox">
        @for($i=1; $i<=$divshow;$i++)
        <?php 
          if($i==1){
            $limit = 0;
          }else{
            $s = $i-1;
            $limit = $s*4;
          }
         ?>

        <div class="item @if($i==1){{'active'}}@endif" style="background: #fff;width: 100%;height: 430px;">
          @foreach($selectPro = App\ProductModel::where('subcategory_id','=',$subShow->id)->offset($limit)->limit(4)->get() AS $product)

              <div class="col-md-3 col-xs-12">
                    <div class="col-xs-12 product-item padding">
                    <div class="col-sm-12 col-xs-6 padding">
                    <a href="{{route('Home.edit',$product->id)}}">
                      <div class="col-sm-12 col-xs-6pi-img-wrapper ">
                        <img src="{{url('photo/'.$product->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-6">
                     <h3>
                      <a href=""> {{$product->product_name}}</a></h3>
                     <div class="pi-price" style="font-size: 1em;"><p> {{$product->price}} Tk</p></div>
                     <form action="{{route('Cart.store')}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <?php 
                       $checkCart = App\cartModel::where('user_id','=',$UserId)->where('product_id','=',$product->id)->get()->count();
                       ?>
                         @if($checkCart !=0 )
                      <button type="button" class="btn btn-success add2cart pull-right">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                      Added </button>
                        @else
                      <button class="btn btn-danger add2cart"  style="background:#e84d1c;color:white;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                         Add to cart </button> 
                         @endif
                      </form>
                        </div>

                      </div>
                </div>
            @endforeach
           
        </div>

        @endfor

      </div>

  <!-- Controls -->
      <div class="hidden-xs" style="position: absolute;right:90px;margin-left: -100px;top:8px;" >
      <a class=" carousel-control btn btn-primary" href="#carousel-example-product{{$subShow->id}}" role="button" data-slide="prev"  style="position: absolute;width: 20px;height: 25px;top: 0;right: 0;">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="top:13px; font-size:16px; text-align: center; padding: 0px 10px 0px 0px;"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control btn btn-primary" href="#carousel-example-product{{$subShow->id}}" role="button" data-slide="next" style="position: absolute;width: 20px;height: 25px;top: 0;margin-left: 54px;">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="top:13px; font-size:16px; text-align: center; padding: 0px 10px;"></span>
            <span class="sr-only">Next</span>
          </a>
           </div>



           
      <div class="hidden-md hidden-sm hidden-lg" style="position: absolute;right:58px;margin-left: -100px;top:-8px;" >
      <a class=" carousel-control btn btn-primary" href="#carousel-example-product{{$subShow->id}}" role="button" data-slide="prev"  style="position: absolute;width: 20px;height: 25px;top: 0;right: 0;">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="top:13px; font-size:16px; text-align: center; padding: 0px 10px 0px 0px;"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control btn btn-primary" href="#carousel-example-product{{$subShow->id}}" role="button" data-slide="next" style="position: absolute;width: 20px;height: 25px;top: 0;margin-left: 32px;">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="top:13px; font-size:16px; text-align: center; padding: 0px 3px;"></span>
            <span class="sr-only">Next</span>
          </a>
           </div>




        </div>
</div>
</div>

        @endforeach
    @endforeach


    <div class="col-md-12" style="height: 50px;"></div>
    <div class="container">
      <center>
        <h3> Our Brand </h3>
      </center>

      <div class="col-xs-12 padding">

        <style type="text/css">
          .client img{
            border: 1px solid #ddd;
            padding: 2px;
          }
        </style>

        <div class="col-sm-3 col-xs-6 padding client">
          <img src="img/1.jpg" class="img-responsive">
        </div>

        <div class="col-sm-3 col-xs-6 padding client">
          <img src="img/2.jpg" class="img-responsive">
        </div>
        

        <div class="col-sm-3 col-xs-6 padding client">
          <img src="img/3.jpg" class="img-responsive">
        </div>
        

        <div class="col-sm-3 col-xs-6 padding client">
          <img src="img/8.jpg" class="img-responsive">
        </div>
        
        <div class="col-sm-3 col-xs-6 padding client">
          <img src="img/5.jpg" class="img-responsive">
        </div>

        <div class="col-sm-3 col-xs-6 padding client">
          <img src="img/6.jpg" class="img-responsive">
        </div>
        

        <div class="col-sm-3 col-xs-6 padding client">
          <img src="img/7.jpg" class="img-responsive">
        </div>
        

        <div class="col-sm-3 col-xs-6 padding client">
          <img src="img/4.jpg" class="img-responsive">
        </div>

      </div>
    </div>


   </div>
</div>




@endsection

