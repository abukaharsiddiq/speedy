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
                        <h3 class="text-center">Update Third Category </h3>

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

                            <form action="{{route('ThirdCategoryAdmin.update',$view->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                                {{ csrf_field()}}
                                {{ method_field('PUT')}}
                                <div class="col-md-12">

                                 <div class="form-group">
                                        <label for="cat"> Category name </label>

                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                        <span class="block input-icon input-icon-right">
                                           <select id="cat" class="form-control" name="category">
                                               <option value=""> Select Category </option>
                                               @foreach($Category AS $value)
                                                   @if($view->category_id == $value->id)
                                                   <option selected="" value="{{$value->id}}">{{$value->title}}</option>
                                                   @else
                                                   <option value="{{$value->id}}">{{$value->title}}</option>
                                                   @endif
                                               @endforeach
                                            </select>
                                                </span>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                    <label for="sub">Sub Category </label>

                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                    <span class="block input-icon input-icon-right">
                       <select id="sub" class="form-control" name="subcategory">
                           <option value="">Select Category </option>
                           @foreach($SubCategory AS $subCat)
                          
                            @if($subCat->id == $view->subcategory_id)
                             <option selected="" value="{{$subCat->id}}">{{$subCat->subcategory_name}}</option>
                               @else
                               <option value="{{$subCat->id}}">{{$subCat->subcategory_name}}</option>
                               @endif
                           @endforeach
                        </select>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="third"> Third category </label>

                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                            <span class="block input-icon input-icon-right">
                               <input type="text" name="third_category" id="sub" value="{{$view->third_category_name}}" class="form-control">
                            </span>
                        </div>
                    </div>
                                                               
                                    <div class="form-group">


                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                                            <input type="submit" value="Update" name="notice_submit" class="btn btn-success" />


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




            </div>


        </div>
    </div>
</div>
</div>
</div>
@endsection

