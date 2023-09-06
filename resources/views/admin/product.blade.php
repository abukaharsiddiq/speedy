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
                        <h3 class="text-center"> Product Information  </h3>

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


                                            <form action="{{route('Product.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                                                {{ csrf_field()}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title"> Product name </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="product_name" placeholder="Product name" id="title" class="width-100 product_name" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <label for="title">  Category </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                    <select name="category" class="form-control category">
                                                        <option value=""> Select category </option>
                                                        @foreach($cat AS $category)
                                                        <option value="{{$category->id}}"> {{$category->title}} </option>
                                                        @endforeach
                                                    </select>
                                                                
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="display:none;">
                                                    <label for="title"> Sub Category </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                    <select name="subcategory" class="form-control sub_category">
                                                        <option value=""> Select Sub category </option>
                                                        @foreach($subCategory AS $subcat)
                                                        <option value="{{$subcat->id}}"> {{$subcat->subcategory_name}} </option>
                                                        @endforeach
                                                    </select>
                                                                
                                                    </span>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="subcategory" value="0">
                                                <input type="hidden" name="thirdcategory_id" value="0">
                                             
                                                <div class="form-group" style="display:none;">
                                                    <label for="check"> Special product position </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                      <input type="radio" id="check" name="special" value="1" class=""> Special

                                                     &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" checked name="special" value="2"  class=""> Offser
                                                    </div>
                                                </div>

                                                <div class="form-group" style="display:none">
                                                        <label for="code"> Product Serial Number </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="0" name="product_serial" placeholder="Product Serial Number" id="code" class="width-100 product_code" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group" style="display:none;">
                                                    <label for="quantity"> Product quantity </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="text" value="0" name="product_quantity" placeholder="Product quantity" id="quantity" class="width-100 quantity" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>
                                                
                                                <div class="form-group" style="display:none">
                                                        <label for="price"> Product description </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <textarea class="form-control" placeholder="Product description" name="description"></textarea>
                                                            </span>
                                                        </div>
                                                </div>
                                                 <div class="form-group">
                                                        <label for="price"> Product description </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <textarea type="text" name="description" class="form-control" id="richTextBody1" rows="6" ></textarea>

                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group" style="display:none">
                                                        <label for="price">Buy Price </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="sell_price" value="0"  id="num2" placeholder="Buy Price" class="width-100 buy_price" />
                                                               
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group" style="display:none">
                                                        <label for="sell_price">Sell Price </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="0" onkeyup="priceCalculation(this.value)" name="price" placeholder="Sell Price" id="num1" class="sale_price width-100" />
                                                             
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group" style="display:none">
                                                        <label for="profit">Profit</label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="profit" value="0"placeholder="Profit" id="subt" class="width-100 profit" />
                                                               
                                                            </span>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="title"> Image </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                     <span class="block input-icon input-icon-right">
                                                        <input type="file" name="image"/>
                                                       
                                                     </span>
                                                    </div>
                                                </div>

                                                    <div class="form-group">


                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                                            <input type="submit" value="Submit" name="notice_submit" onclick="add_product()" class="btn btn-danger" />


                                                        </div>
                                                    </div>
                                                </div>


                                            </form>
                                            
                                            
                                            
                                            
<script>
    
              function add_product(){
                  
                  var product_name = $('.product_name').val();
                  var category = $('.category').val();
                  var sub_category = $('.sub_category').val();
                  var product_code = $('.product_code').val();
                  var quantity = $('.quantity').val();
                  var buy_price = $('.buy_price').val();
                  var sale_price = $('.sale_price').val();
                  var profit = $('.profit').val();
                  
                  //alert(id);
                  
                  
                   var dataString = 'product_name='+product_name+
                                    '&category='+category+
                                    '&sub_category='+sub_category+
                                    '&product_code='+product_code+
                                    '&quantity='+quantity+
                                    '&buy_price='+buy_price+
                                    '&sale_price='+sale_price+
                                    '&profit='+profit
                                    ;
                                
                                //alert(dataString);
                                //AJAX code to submit form.
                                $.ajax({
                                    type: "POST",
                                    url: "../../../app1/ajax/add_new_product.php",
                                    data: dataString,
                                    cache: false,
                                    success: function (result) {
                                         //alert(result);
                                    }
                                });

                                return false;
              }
</script>





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

