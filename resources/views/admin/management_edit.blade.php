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
							<li class="active">Dashboard</li>
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
								 <h3 class="text-center">Update Management information </h3>

						<hr/>
						<div class="col-md-12">

						  <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-offset-2 col-lg-offset-2">
							
							<div class="step-content pos-rel">
								<div class="step-pane active" data-step="1">
									<!-- <h3 class="lighter block green"> Enter the following information</h3> -->
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

								<form action="{{route('Management_admin.update',$view->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
								{{ csrf_field()}}
							    {{ method_field('PUT')}}
								  <div class="col-md-12">
									<div class="form-group">
										<label for="title"> Title</label>

										<div class="col-xs-12 col-sm-12 col-md-12 padding">
											<span class="block input-icon input-icon-right">
												<input type="text" value="{{$view->title}}" name="title" placeholder=" Title" id="title" class="width-100" />
												<i class="ace-icon fa fa-leaf"></i>
											</span> 
										</div>
									</div>
									<div class="form-group">
										<label for="title"> Designation  </label>

										<div class="col-xs-12 col-sm-12 col-md-12 padding">
											<span class="block input-icon input-icon-right">
												<input type="text" value="{{$view->post}}"  name="designation" placeholder=" Designation" id="title" class="width-100" />
												<i class="ace-icon fa fa-leaf"></i>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label for="pdf"> image </label>

										<div class="col-xs-12 col-sm-12 col-md-12 padding">
											<span class="block input-icon input-icon-right">
												<input type="file" id="pdf" name="image" />
												
											</span>
											<span> <img src="{{url('photo/'.$view->image)}}" style="height: 120px;width:82px;"></span>
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

