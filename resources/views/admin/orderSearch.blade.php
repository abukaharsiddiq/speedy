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
					
									<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12">
										<h3 class="header smaller lighter blue"> Search information </h3>

									
									
										<div>

										<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12 padding">
										<!-- <h3 class="header smaller lighter blue"> Show information </h3> -->
											<form action="{{route('OrderInfo.store')}}" method="post">
											{{csrf_field()}}
										<div class="col-md-12 padding" style="margin-top: 10px;">
											<div class="form-group col-md-2">
											  <input type="text" name="form_date" id="nav-search-input" class="nav-search-input" placeholder="Form: Y-M-D">
											</div>
											<div class="form-group col-md-2">
											  <input type="text" name="to_date" id="nav-search-input" class="nav-search-input " placeholder="To: Y-M-D">
											</div>
											<div class="form-group col-md-2">
											  <input type="Submit" name="Search_btn" class="btn btn-primary" value="Search Now">
											</div>
											<div class="form-group col-md-4">
											@if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            	</div>
                                            	@endif
                                            </div>

										</div>
											
										
										</form>


										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
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

