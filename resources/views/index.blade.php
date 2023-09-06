@extends('layouts.header')
@section('main-contain')

<div class="container-fluid" style="background: #0e0e0e;">
    <div class="container-fluid padding" id="" tabindex="-1">
        <div class="row padding">

<div class="col-lg-12 col-md-12 col-sm-12 padding">
<div class="col-md-2 hidden-xs hidden-sm">
<!--<div class="col-md-12 category-menu padding">-->
<!--<div class="col-md-12 category-title padding">-->
<!--    <h3>Product Category</h3>-->
<!-- </div>-->
 <!--<div class="col-md-12 category-menu-left">-->
 <!--   <ul>-->
 <!--      @foreach($cat_view = App\productCategoryModel::orderBy('id','ASC')->get() AS $category)-->
 <!--     <li><a href="{{route('Home.show',$category->id)}}">{{str_limit($category->title,23)}} -->
 <!--        <span class="glyphicon">&#xe080;</span></a>-->
 <!--         <ul>-->
 <!--          @foreach($selectSub = App\subcategoryModel::where('category_id','=',$category->id)->orderBy('position','ASC')->limit(20)->get() AS $subShow)-->
 <!--          <li> <a href="{{route('ThirdCategory.thirdCategoryVeiew',$subShow->id)}}">  {{str_limit($subShow->subcategory_name,30)}} </a> </li>-->
 <!--           @endforeach-->
 <!--        </ul>-->
 <!--     </li>-->
 <!--    @endforeach-->
 <!--   </ul>-->
 <!--</div>-->
 
 <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding"> -->
      
 <!--       <div class="col-lg-12 col-mg-12 padding">-->
 <!--         <h4 class="text-left" style="padding: 8px 0px;border-bottom:1px solid gray;background:#444;color:white;"> &nbsp; Notice board </h4> -->
 <!--       </div>-->
 <!--         <div class="col-lg-12 col-mg-12 padding">-->
 <!--           @foreach($notice as $nview)-->
 <!--           <div class="col-sm-12 col-xs-6 padding"> <a href="{{route('NoticePage.show',$nview->id)}}" style="text-decoration: none;color:#2E3092;padding-top: 10px;font-weight: bold;"> <span class="glyphicon">&#xe080;</span> {{str_limit($nview->title,80)}} </a></div>-->
 <!--           @endforeach-->
 <!--          </div>-->
 <!--     </div>-->
    
</div>





</div>


        <div class="col-md-12 col-xs-12 padding" >


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
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

          <div class="container-fluid" style="background-color:black;color: white;margin-top: 1px;padding-top:5px;">
              <div class="container">
                  <marquee>  
                  
                  <p style="color: white; font-size: 22px; line-height: 30px;margin-bottom: 0px;float: left;">
                      
                      
                      <font style="">
                          @foreach($headContain as $headline)
                        <span> {{$headline->contain}} |</span>
                     @endforeach
                    </font>
                      </p>
                     
                  <!-- <p style="color: white; font-size: 15px; line-height: 20px; "></p> -->
                  </marquee>
              </div>
          </div>

  <!-- ---------Marquee company title------------- -->

<div class="col-md-12 col-sm-12" style="height:100px; background-color:#4e3629;">
    <div class="col-md-3 col-sm-3"></div>
    <div class="col-md-8 col-sm-8 col-xs-12" style="font-size:40px;
    font-family: addington cf regular italic!important;
    font-style: italic;
    line-height: 30px;
  
    color:white;
    margin-top:25px;
    "><p><b style="font-size: 32px;margin-left:35px;">Best Product's At Affordable Price</b></p></div>
</div>

<div class="col-md-12 col-sm-12" style="min-height:70px; background-color:white;overflow:hidden;">
     <div class="col-md-3 col-sm-3"></div>
    <div class="col-md-8 col-sm-8 col-xs-12" style="font-size:40px;
    font-family: addington cf regular italic!important;
    font-style: italic;
    line-height: 30px;

    color:black;
    margin-top:20px;
    "><p><b style="margin-left:35px;">Get your Natural Color Back in as Little as 5 Minutes</b></p></div>
</div>




            </div>
        </div>
        </div>
    </div>
</div>






<div class="container-fluid">
    <div class="row">
       
 @foreach($category = App\productCategoryModel::orderBy('id','ASC')->get() AS $viewCat)
<div class="col-lg-12 col-md-12 padding" style="background:black; margin-top:5px;">
   
 
<div class="col-lg-12 col-md-12" style="background: #fff;">
    
    <div class="col-lg-12 col-md-12 padding">

      <div class="col-md-12 subcategory-title" style="background-color:black;"> <div class="col-md-11 padding"><h4> <span style="color: #fff;"><marquee> {{$viewCat->image}} </marquee></span> </h4></div>  </div>

      <div id="carousel-example-product{{$viewCat->id}}" class="carousel slide" data-interval="false">
     <?php
       $totalCount = App\ProductModel::where('category','=',$viewCat->id)->get()->count(); 
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

        <div class="item @if($i==1){{'active'}}@endif" style="background: #fff;width: 100%;height: 291px;">
          @foreach($selectPro = App\ProductModel::where('category','=',$viewCat->id)->orderBY('id','ASC')->offset($limit)->limit(4)->get() AS $product)

              <div class="col-md-3 col-xs-12">
                    <div class="col-xs-12 product-item padding">
                    <div class="col-sm-12 col-xs-12 padding">
                    <a href="{{route('Home.edit',$product->id)}}">
                      <div class="col-sm-12 col-xs-12 pi-img-wrapper ">
                          
                          <!--{{url('photo/'.$product->image)}}-->
                          
                        <img src="{{url('photo/'.$product->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-12">
                     <h3 style="font-size: 13px; font-weight: bold;">
                      <a href="{{route('Home.edit',$product->id)}}"> {{str_limit($product->product_name,40)}} </a></h3>
                    
                     
                        </div>

                      </div>
                </div>
            @endforeach
           
        </div>

        @endfor

      </div>

  <!-- Controls -->
      <div class="hidden-xs" style="position: absolute;right:90px;margin-left: -100px;top:8px;" >
      <a class=" carousel-control btn btn-primary" href="#carousel-example-product{{$viewCat->id}}" role="button" data-slide="prev"  style="position: absolute;width: 20px;height: 25px;top: 0;right: 0;">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="top:13px; font-size:16px; text-align: center; padding: 0px 10px 0px 0px;"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control btn btn-primary" href="#carousel-example-product{{$viewCat->id}}" role="button" data-slide="next" style="position: absolute;width: 20px;height: 25px;top: 0;margin-left: 54px;">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="top:13px; font-size:16px; text-align: center; padding: 0px 10px;"></span>
            <span class="sr-only">Next</span>
          </a>
           </div>



           
      <div class="hidden-md hidden-sm hidden-lg" style="position: absolute;right:58px;margin-left: -100px;top:-8px;" >
      <a class=" carousel-control btn btn-primary" href="#carousel-example-product{{$viewCat->id}}" role="button" data-slide="prev"  style="position: absolute;width: 20px;height: 25px;top: 0;right: 0;">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="top:13px; font-size:16px; text-align: center; padding: 0px 10px 0px 0px;"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control btn btn-primary" href="#carousel-example-product{{$viewCat->id}}" role="button" data-slide="next" style="position: absolute;width: 20px;height: 25px;top: 0;margin-left: 32px;">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="top:13px; font-size:16px; text-align: center; padding: 0px 3px;"></span>
            <span class="sr-only">Next</span>
          </a>
           </div>




        </div>
</div>
</div>

        @endforeach
  


    
    <!--<div class="container">-->
    <!--  <center>-->
    <!--    <h3> Islamic Book </h3>-->
    <!--  </center>-->

      <!--<div class="col-xs-12 padding">-->

      <!--  <style type="text/css">-->
      <!--    .client img{-->
      <!--      border: 1px solid #ddd;-->
      <!--      padding: 2px;-->
      <!--    }-->
      <!--  </style>-->

        <!--<div class="col-sm-3 col-xs-6 padding client">-->
        <!--  <img src="img/3.png" class="img-responsive">-->
        <!--</div>-->
        
        <!--<div class="col-sm-3 col-xs-6 padding client">-->
        <!--  <img src="img/5.jpg" class="img-responsive">-->
        <!--</div>-->

        <!--<div class="col-sm-3 col-xs-6 padding client">-->
        <!--  <img src="img/6.jpg" class="img-responsive">-->
        <!--</div>-->
        
        <!--<div class="col-sm-3 col-xs-6 padding client">-->
        <!--  <img src="img/7.jpg" class="img-responsive">-->
        <!--</div>-->
        </div>
        </div>
        </div>
     <div class="row">   
<!--<div class="container-fluid" style="padding:0px; margin-top:20px;">-->
<!--    <div class="col-md-12" style="    background: #eeeeef;-->
<!--    border-color: #eeeeef; color:black; height:206px;-->
<!--    letter-spacing: -.5px;">-->
<!--        <div class="col-md-8" style="margin-left:100px; margin-top:50px;"><p><font size="6">Not sure which product is best for you? Let us help you choose.</font></p></div>-->
<!--        <div class="col-md-2" style="    background: #775c50;-->
<!--    border-color: #775c50!important;-->
<!--    color: #fff!important;-->
<!--    padding-bottom: 5px;-->
<!--    width: auto!important; margin-top:100px; color:white;"><a href="#" style="color:white;"data-bind="click: openModal, i18n: 'Get Started'" class="btn btn-blue jfm-gtm">Get Started</a></div>-->
<!--        </div>-->
<!--</div>-->
</div>
<div class="row">
    <div class="container-fluid" style="background-image: url(img/logo/fa.jpg); min-height:400px;">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-xs-12">
             <div class="col-md-6 col-xs-12" style="margin-top:50px;line-height:30px;"><p></p></div>
       <div class="col-md-12 col-xs-12" style="margin-top:10px; font-size:20px; color:black; text-align:center;"><p style="font-size:50px;"><i>Great hair.  <br><br>Great service. <br><br>
Great savings.</i></p></div>
        </div>
        <div class="col-md-2"></div>
      
        
    </div>
</div>


<div class="row" >
    <div class="container-fluid" style="background-image:url(img/logo/ad1.jpg); height:200px; background-size:100% 100%;">
      
        
    </div>
</div>


<div class="row" >
    <div class="container-fluid" style="background-color:white; min-height:147px; margin-top:2px;">
        <div class="col-md-6 col-sm-6 col-xs-12" style="background-color:white;min-height:147px">
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:white;min-height:150px; margin-top:20px;">
                <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7R_-VEgTcEo" allowfullscreen></iframe>
</div>
</div>
            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color:white;">
                <div class="col-md-4 col-sm-4" style="background-color:white;min-height:147px; margin-top:5px;">
                    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a0CJjKXbmR4" frameborder="0" allow" allowfullscreen></iframe>
</div>
                    
                    
                </div>
                <div class="col-md-4 col-sm-4" style="background-color:white;min-height:147px; margin-top:5px;">
                    
                    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a0CJjKXbmR4" frameborder="0" allow" allowfullscreen></iframe>
</div>
                    
                </div>
                <div class="col-md-4 col-sm-4" style="background-color:white;min-height:147px; margin-top:5px;">
                    
                    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CDRV_VcS8AM" allowfullscreen></iframe>
</div>
                    
                </div>
            </div>
            
            
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12" style="background-color:white;min-height:200px">
            <div class="col-md-3"></div>
            <div class="col-md-7 col-xs-12" style="margin-top:50px;font-size: 60px;
    color: #2d2926;
    font-family: addington cf regular italic!important;
    text-transform: lowercase;

    font-style: italic;
}"><h2>this stuff works</h2></div>

<div class="col-md-3"></div>
 <div class="col-md-7 col-xs-12" style="margin-top:50px;font-size: 30px;
    color: #2d2926;
    font-family: addington cf regular italic!important;
    text-transform: lowercase;
    font-style: italic;
}"><p>Don't take our word for it. Find out 
why these men feel a little better 
thanks to Super Speedy Hair Care.</p></div>


<div class="col-md-7 stuff-action" style="margin-top:50px;font-size: 30px;
    color: #2d2926;
    font-family: addington cf regular italic!important;
    text-transform: lowercase;
    margin-left:100px;
    font-style: italic;
        <!--background: #775c50;-->
    border-color: #775c50;
}">
    <!--<button class="btn btn-success">more reviews</button>-->
    </div>
        </div>
      
        
    </div>
</div>



@endsection

