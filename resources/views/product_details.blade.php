@extends('layouts.header',$detailsInfo)
@section('main-contain')



        
  
<!--      <title> {{$detailsInfo->product_name}} , {{$detailsInfo->price}} tk - Easylifebd.asia </title>-->
    
        
        



<div class="row">
   <!--  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-title">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding">
            <h3> Product Details Information </h3>
        </div>
    </div> -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-area">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding" style="min-height: 480px;">
           <br>
            
             <div class="col-xs-12 hidden-lg hidden-md hidden-sm padding">
             
                   <img  src="{{url('photo/'.$detailsInfo->image)}}">

             </div>
             <div class="col-lg-5 col-md-5 hidden-xs  padding">
             
                  <img id="zoom_mw" src="{{url('photo/'.$detailsInfo->image)}}" data-zoom-image="{{url('photo/'.$detailsInfo->image)}}" style="width:100%;">

             </div>
                  <script>
                   $("#zoom_mw").elevateZoom({scrollZoom : true});
                </script>
             <form action="{{route('Cart.store')}}" method="post">
                            {{csrf_field()}}
            <div class="details col-md-6 col-md-offset-1">
                        <h3 class="product-title">{{$detailsInfo->product_name}}</h3>
                        <!--<div class="rating">-->
                        <!--    <div class="stars">-->
                        <!--        <span class="fa fa-star checked"></span>-->
                        <!--        <span class="fa fa-star checked"></span>-->
                        <!--        <span class="fa fa-star checked"></span>-->
                        <!--        <span class="fa fa-star"></span>-->
                        <!--        <span class="fa fa-star"></span>-->
                        <!--    </div>-->
                          
                        <!--</div>-->
                      
                        <!--<p class="price" style="">current price: &nbsp;&nbsp;&nbsp;&nbsp; <span>{{$detailsInfo->price}} Tk</span></p>-->
                      
                      
                        <!--<p class="price" style="">Product Code:  &nbsp;&nbsp;&nbsp;&nbsp;<span>{{$detailsInfo->serial_number}}</span>-->
                           
                        <!--</p>-->
                       <!--  <p>Quantity : <input type="number" name="quantity" style="width: 90px; height: 35px;"min="1" value="1"></p>    -->
                    
                        <p style="font-size: 21px;">Quantity : <input type="number" name="quantity" style="width: 90px; height: 35px; padding-left: 20px; color: #ff9f1a; margin-left: 90px; font-size: 25px" min="1" value="1"></h4>
                       
                          
                        </p>
                        <div class="action">
                         
                      <input type="hidden" name="product_id" value="{{$detailsInfo->id}}">
                      <input type="hidden" name="price" value="{{$detailsInfo->price}}">
                      <input type="hidden" name="buyNow" class="buyNow" value="0"> <br>
                      <?php      
                      $checkCart = App\cartModel::where('user_id','=',$UserId)->where('product_id','=',$detailsInfo->id)->where('active','=',0)->get()->count();
                      ?>
                      
                      @if($checkCart !=0 )
                      <button type="button" class="btn btn-success add2cart" style="width:150px; height: 40px;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        Added
                       </button> 

                      @else
                       <button class="btn btn-primary add2cart pull-left" style="width:150px; height: 40px; background:#2e3092;color:white;border:1px solid transparent;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                         Add to cart </button> 
                      @endif
                   

                          <a href="">  <button class="btn btn-success add2cart pull-right" style="width:150px; height: 40px;background:#e84d1c;color:white;border:1px solid transparent;" onclick="changeOrder()"> Buy Now</button> </a>
                        
                        
                        
                        @if($detailsInfo->id==246)
                        <a href="http://smdidar.com" target='_blank' class="btn btn-primary add2cart" style="width:150px; height: 40px;background:#2e3092;color:white;border:1px solid transparent;" > Live Demo </a>
                        @endif
                        
                        
                        @if($detailsInfo->id==247)
                        <a href="http://smdidar.com" target='_blank' class="btn btn-primary add2cart" style="width:150px; height: 40px;background:#2e3092;color:white;border:1px solid transparent;" > Live Demo </a>
                        @endif
                        
                        
                        
                     </form>
                    <script type="text/javascript">
                        function changeOrder(){
                            $('.buyNow').val(2);
                        }
                    </script>
                    
                    
                    
                
                          
                            <!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> --><br>




                        <!--  <div class="col-md-12 methodName">-->
                        <!--         <h4>Pay with</h4>-->

                        <!--  </div>-->

                        <!--<div class="col-md-12 bank_area padding">-->
                         
                        
                        <!--  <div class="col-md-3 bank_image">-->
                        <!--      <img src="{{url('img/rocket.jpg')}}" class="img-responsive img-thumbanail">-->
                        <!--   </div>-->

                        <!--  <div class="col-md-3 bank_image ">-->
                        <!--    <img src="{{url('img/bkach.png')}}" class="img-responsive img-thumbanail">-->
                        <!--  </div>-->

                        <!--  <div class="col-md-3 bank_image ">-->
                        <!--    <img src="{{url('img/visa.jpg')}}" class="img-responsive img-thumbanail">-->
                        <!--  </div>-->

                        <!--  <div class="col-md-3 bank_image ">-->
                        <!--    <img src="{{url('img/mastercard.png')}}" class="img-responsive img-thumbanail">-->
                        <!--  </div>-->


                        <!--</div>-->

                        <!--<div class="col-md-12 hotline-invest">-->

                        <!--  <div class="col-md-12 hotline padding"></div>-->
                           <!-- <div class="col-md-7"><img src="{{url('img/hotline-invest.png')}}"></div> -->
                        <!--</div>-->
                           

                    </div>
             <br>
             <br>
              <p> &nbsp; </p>
        </div>
        
        
          
        
        
        <div class="row">
            <div class="col-md-12">
                <div class="container" style="background:#fff; margin-top: 20px;">
                  <div class="col-md-12 productDetail_informationTitle">
                    <h3 style="color: #2e3092;margin-top: 5px;" class="text-center"> Product Details </h3></div>
                  <div class="col-md-12">
                     <p class="product-description"> {!!$detailsInfo->description!!} </p>
                  </div>
                
             
                
                </div>
            </div>
        </div>
          <!-- fb share code -->
<div class="row">
<div class="col-md-12">
     <center>
         <p> &nbsp; </p>

            <!--<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a78b3d587331000110e4b9d&product=inline-share-buttons"></script>-->
            <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a7e8b47d4d59e0012e896fe&product=inline-share-buttons"></script>
            <!--<div class="sharethis-inline-share-buttons"></div>-->
            <div class="sharethis-inline-share-buttons"></div>

            <p> &nbsp; </p><hr>
     </center>

</div>
</div>




                    <!-- fb share code -->

        <div class="ol-md-12 col-lg-12 col-sm-12 col-xs-12  padding details-bottom-page" style="background:#fff; ">
              <h3 style="color: #fff; height: 35px; background: #2e3092; line-height: 35px;" class="text-center">Similar Product</h3>
              @foreach($semilar = App\ProductModel::where('category','=',$detailsInfo->category)->orderBy('id','DESC')->paginate(12) AS $value)
                 <div class="col-md-3">
           
            <div class="col-xs-12 product-item padding">
                    <div class="col-sm-12 col-xs-12 padding">
                    <a href="{{route('Home.edit',$value->id)}}">
                      <div class="col-sm-12 col-xs-12 pi-img-wrapper ">
                        <img src="{{url('photo/'.$value->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-12">
                     <h3 style="font-size: 13px; font-weight: bold;">
                      <a href="{{route('Home.edit',$value->id)}}">
                        {{str_limit($value->product_name,50)}}
                       
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
                      Already Cart </button>
                        @else
                      <button class="btn-sm btn-primary add2cart pull-left"  style="background:#2e3092;;color:white;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                         Add to cart </button> 
                         @endif
                      </form>
                        <div class="pi-price pull-right" ><p style="font-size: 15px;"> {{$value->price}} Tk</p></div>
                     </div>




               </div>
        </div>

               @endforeach
             <div class="col-lg-12 pull-right"> {{$semilar->links()}} </div>
        </div>

     
    </div>

</div>
@endsection