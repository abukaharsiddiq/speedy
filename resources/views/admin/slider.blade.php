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
								 <h3 class="text-center"> Slider information </h3>

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

								<form action="{{route('SlideAdmin.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal" id="sample-form">
								{{ csrf_field()}}
								  <div class="col-md-12">
									<div class="form-group">
										<label for="title"> Title  </label>

										<div class="col-xs-12 col-sm-12 col-md-12 padding">
											<span class="block input-icon input-icon-right">
												<input type="text" name="title" placeholder=" Title" id="title" class="width-100" />
												<i class="ace-icon fa fa-leaf"></i>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label for="pdf"> Image </label>

										<div class="col-xs-12 col-sm-12 col-md-12 padding">
											<span class="block input-icon input-icon-right">
												<input type="file" id="pdf" name="image" />
												
											</span>
										</div>
									</div>
									<div class="form-group">
										

								    <div class="col-xs-12 col-sm-12 col-md-12 padding">
											
									<input type="submit" value="Submit" name="notice_submit" class="btn btn-success" />
												
											
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
											All data view
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
									<th>Title</th>
									<th>Downloa</th>
														
									<th>Edit / Delete</th>
							</tr>
						</thead>

												<tbody>
												    @foreach($view AS $value)
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#"> {{$value->title}} </a>
														</td>
														<td> <img class="img-responsive img-thumbnail" src="{{url('photo/'.$value->image)}}" style="height: 150px;">  </td>
														

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<!-- <a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a> -->

																<a class="green" href="{{route('SlideAdmin.edit',$value->id)}}">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="{{route('SlideAdmin.show',$value->id)}}">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															
														</td>
													</tr>
													@endforeach

										
													
												</tbody>


											</table>
											{{$view->links()}}
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

