@extends('layouts.header')
@section('main-contain')

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-head">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 padding">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 feature-title padding">
                <h3> All Product </h3>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 feature-page">
               
            </div>
        </div>
    </div>


<!-- content -->

<div class="container-fluid" style="background: #fff;padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-12 ">
            <h1 style="color: green;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
            <p>
               
            </p>
            
<div class="col-xs-12">
                
  <div class="container-fluid">
    <div class="row">
    @foreach($categoryProduct = App\ProductModel::where('subcategory_id','=',$sub_id->id)->orderBy('id','DESC')->paginate(32) AS $value)
        <div class="col-md-3">
           
            <div class="col-xs-12 product-item padding">
                    <div class="col-sm-12 col-xs-6 padding">
                    <a href="{{route('Home.edit',$value->id)}}">
                      <div class="col-sm-12 col-xs-6 pi-img-wrapper ">
                        <img src="{{url('photo/'.$value->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-6">
                     <h3 style="font-size: 12px;min-height: 40px;line-height: 15px;">
                      <a href="{{route('Home.edit',$value->id)}}"> 
                        {{str_limit($value->product_name,50)}}
                       
                      </a>
                    </h3>
                    
                         <form action="{{route('Cart.store')}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="product_id" value="{{$value->id}}">
                      <input type="hidden" name="price" value="{{$value->price}}">
                        <?php      
                      $checkCart = App\cartModel::where('user_id','=',$UserId)->where('product_id','=',$value->id)->where('active','=',0)->get()->count();
                      ?>
                      
                      @if($checkCart !=0 )
                      <button class="btn btn-primary add2cart disabled pull-left">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        Already Cart
                       </button> 

                      @else
                       <button class="btn btn-primary add2cart  pull-left" style="background:#2E3092;color:white;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                         Add to cart </button> 
                      @endif
                      </form>
                       <div class="pi-price pull-right" style="font-size: 1em;"><p> {{$value->price}} Tk</p></div>
                     </div>




               </div>
        </div>
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
    </div>
</div> 




            </div>
        </div>
    </div>
</div>


@endsection