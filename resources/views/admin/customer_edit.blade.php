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
                        <h3 class="text-center"> Customer Information  </h3>

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


                                            <form action="{{route('Customer.update',$view->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
                                                {{ csrf_field()}}
                                                 {{ method_field('PUT')}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="de"> Customer name </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="{{$view->name}}" name="customer" placeholder="Customer name" id="de" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label for="email"> Email </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="{{$view->eamil}}" name="email" placeholder="Email" id="email" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                  <div class="form-group">
                                                        <label for="mobile"> Mobile </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="{{$view->mobile}}" name="mobile" placeholder="Mobile" id="mobile" class="width-100" />
                                                                <i class="ace-icon fa fa-leaf"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                

                                                <div class="form-group">
                                                        <label for="code">Designation </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <input type="text" value="{{$view->designation}}" name="designation" placeholder="Designation" id="code" class="width-100" />
                                                               
                                                            </span>
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="e"> Facebook Link </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="text" value="{{$view->facebook}}" name="facebook" placeholder="Facebook Link" id="e" class="width-100" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>     
                                                <div class="form-group">
                                                    <label for="f"> Twitter Link </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="text" name="twitter" value="{{$view->twitter}}" placeholder="Twitter Link" id="f" class="width-100" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>     
                                                <div class="form-group">
                                                    <label for="d"> Google plaz Link </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="text" name="google" value="{{$view->google_pluz}}" placeholder="Google plaz Link" id="d" class="width-100" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>     
                                                <div class="form-group">
                                                    <label for="quantity"> InLinked Url </label>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                    <span class="block input-icon input-icon-right">
                                                     <input type="text" name="inlinked" value="{{$view->inlink}}" placeholder="InLinked Url" id="quantity" class="width-100" />
                                                                
                                                    </span>
                                                  </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                        <label for="price"> Description </label>

                                                        <div class="col-xs-12 col-sm-12 col-md-12 padding">
                                                            <span class="block input-icon input-icon-right">
                                                                <textarea class="form-control" placeholder="Description" value="{{$view->mobile}}" id="price" name="description">{{$view->description}}</textarea>
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
                                                            <img src="{{url('photo/'.$view->image)}}" style="height: 100px;" class="img-thumbnail">

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

