@extends('admin.layout.head')
@section('admin-contain')

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
</div>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
               
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div>
        </div>


        <div class="col-md-12">

            <div class="widget-body">
                <div class="widget-main">
                    <div id="fuelux-wizard-container">
                        <h3 class="text-center"> Product Information Update  </h3>

                        <hr/>
                        <div class="col-md-12">

                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-offset-2 col-lg-offset-2">

                                <div class="step-content pos-rel">
                                    <div class="step-pane active" data-step="1">

                                        <div class="col-md-12 ">
                                            @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif


                                            <form action="{{route('Product.update',$view->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                                               {{ csrf_field()}}
                                                 {{ method_field('PUT')}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title"> Product name </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="{{$view->product_name}}" name="product_name" placeholder="Product name" id="title" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <label for="title">  Category </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                    <select name="category" class="form-control">
                                                        <option value=""> Select category </option>
                                                        @foreach($cat AS $category)
                                                        @if($category->id == $view->category)
                                                        <option selected="" value="{{$category->id}}"> {{$category->title}} </option>
                                                        @else
                                                        <option value="{{$category->id}}"> {{$category->title}} </option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                                
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="title"> Sub Category </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                    <select name="subcategory" class="form-control">
                                                        <option value=""> Select Sub category </option>
                                                        @foreach($subCategory AS $subcat)
                                                           @if($subcat->id == $view->subcategory_id)
                                                        <option selected="" value="{{$subcat->id}}"> {{$subcat->subcategory_name}} </option>
                                                        @else
                                                        <option value="{{$subcat->id}}"> {{$subcat->subcategory_name}} </option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                                
                                                    </span>
                                                    </div>
                                                </div>
                                                   <input type="hidden" name="subcategory" value="0">
                                                   <input type="hidden" name="thirdcategory_id" value="0">
                                                 <!-- <div class="form-group">
                                                    <label for="title"> Third Category </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                    <select name="thirdcategory_id" class="form-control">
                                                        <option value=""> Select Thirdcategory </option>
                                                        @foreach($Third AS $thirdcat)
                                                        @if($thirdcat->id == $view->thirdcategory_id)
                                                        <option selected="" value="{{$thirdcat->id}}"> {{$thirdcat->third_category_name}} </option>
                                                        @else
                                                        <option value="{{$thirdcat->id}}"> {{$thirdcat->third_category_name}} </option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                                
                                                    </span>
                                                    </div>
                                                </div> -->
                                                <div class="form-group">
                                                    <label for="check"> Special product position</label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                      <input type="checkbox" id="check" name="special" value="1" class=""> Special

                                                     &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" checked="" name="special" value="2"  class=""> Offser
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                        <label for="code"> Product Serial Number </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="product_serial" value="{{$view->serial_number}}"  placeholder="Product Serial Number" id="code" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="quantity"> Product quantity </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="text" value="{{$view->quantity}}" name="product_quantity" placeholder="Product quantity" id="quantity" class="width-100" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                        <label for="price"> Product description </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <textarea type="text" name="description" value="{{$view->description}}" placeholder="Product description" class="form-control" id="richTextBody1" rows="6" >{{$view->description}}</textarea>
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="price"> Buy Price </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="sell_price" placeholder="Price"  value="{{$view->sell_price}}" id="num2" class="width-100" />
                                                                
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="sell_price">Sell Price </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="price" onkeyup="priceCalculation(this.value)" placeholder="Sell Price" id="num1" value="{{$view->price}}" class="width-100" />
                                                              
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="profit">Profit</label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="profit" placeholder="Sell Price" id="subt" value="{{$view->profit_money}}" class="width-100" />
                                                              
                                                            </span>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="title"> Image </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                     <span class="block input-icon input-icon-right">
                                                        <input type="file" name="image"/><br>
                                                        <img src="{{url('photo/'.$view->image)}}" style="height: 100px;" class="img-thumbnail">
                                                       
                                                     </span>
                                                    </div>
                                                </div>

                                                    <div class="form-group">


                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Update Product" name="notice_submit" class="btn btn-success" />


                                                        </div>
                                                    </div>
                                                </div>


                                            </form>



                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                    <div class="col-md-8 col-md-offset-2">
          @if (session('success'))
              <div class="alert alert-success text-center">
                  {{ session('success') }}
              </div>
          @endif
          </div>

 <script>

function priceCalculation(v) {
    var num1 = v;
    var num2 = $('#num2').val();

    // alert(num1+' ' + num2);

    var result = parseInt(num1)-parseInt(num2);

    // alert(result);

    $('#subt').val(result);
    }


</script>  


         </div>


       </div>


    </div>
   </div>
  </div>
 </div>
</div>
@endsection

