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
                <h3 class="text-center"> Sub Category Information </h3>

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


    <form action="{{route('subCategory.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
        {{ csrf_field()}}
        <div class="col-md-12">
            <div class="form-group">
                <label for="title"> Category name </label>

                <div class="col-xs-12 col-sm-12 col-md-12 padding">
                    <span class="block input-icon input-icon-right">
                       <select id="title" class="form-control" name="category">
                           <option value="">Select Category </option>
                           @foreach($Category AS $value)
                           <option value="{{$value->id}}">{{$value->title}}</option>
                           @endforeach
                        </select>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sub"> Sub category </label>

                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                            <span class="block input-icon input-icon-right">
                               <input type="text" name="subcategory" id="sub" placeholder="Sub Category" class="form-control">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="posi"> Position </label>

                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                            <span class="block input-icon input-icon-right">
                               <input type="text" name="position" id="posi" placeholder="1,2,3,4" class="form-control">
                            </span>
                        </div>
                    </div>

                    <div class="form-group">


                        <div class="col-xs-12 col-sm-12 col-md-12 padding">

                            <input type="submit" value="Submit" name="subcategory_submit" class="btn btn-success" />


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
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
          </div>


                <div class="row">
                    <div class="col-md-10  col-lg-10 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1">
                        <h3 class="header smaller lighter blue"> Show information </h3>

                        <div class="clearfix">
                            <div class="pull-right tableTools-container"></div>
                        </div>
                        <div class="table-header">
                            View Information
                        </div>

                        <!-- div.table-responsive -->

                        <!-- div.dataTables_borderWrap -->
                        <div>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                       
                                        <th>Category name</th>
                                        <th>Sub Category</th>
                                        <th>Position</th>

                                        <th>Edit / Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($info AS $value)
                                    <tr>
                                        <td class="center">
                                           {{$value->id}} 
 
                                        </td>
                                        @if($cat = App\productCategoryModel::find($value->category_id))
                                        <td>
                                           {{$cat->title}}
                                        </td> 
                                        @endif
                                        <td>
                                            {{$value->subcategory_name}} 
                                        </td> 
                                        <td>
                                            {{$value->position}} 
                                        </td>
                                       


                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <!-- <a class="blue" href="#">
                                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                </a> -->

                                                <a class="green" href="{{route('subCategory.edit',$value->id)}}">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>

                                                <a class="red" href="{{route('subCategory.show',$value->id)}}">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </div>


                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>


                            </table>
                            {{$info->links()}}
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

