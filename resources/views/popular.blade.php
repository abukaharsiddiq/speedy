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


                                            <form action="{{route('Populer.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                                                {{ csrf_field()}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title"> Product name </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="product_name" placeholder="Product name" id="title" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <label for="title"> Product Category </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                    <select name="category" class="form-control">
                                                        <option value=""> Select category </option>
                                                        @foreach($cat AS $category)
                                                        <option value="{{$category->id}}"> {{$category->title}} </option>
                                                        @endforeach
                                                    </select>
                                                                
                                                    </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                        <label for="code"> Product Serial Number </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="product_serial" placeholder="Product Serial Number" id="code" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="quantity"> Product quantity </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="text" name="product_quantity" placeholder="Product quantity" id="quantity" class="width-100" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                        <label for="price"> Product description </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <textarea class="form-control" placeholder="Product description" name="description"></textarea>
                                                            </span>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <label for="price"> Price </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" name="price" placeholder="Price" id="price" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
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

                                                            <input type="submit" value="Submit" name="notice_submit" class="btn btn-danger" />


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


                


         </div>


       </div>


    </div>
   </div>
  </div>
 </div>
</div>
@endsection

