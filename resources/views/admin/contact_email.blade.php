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
										<h3 class="header smaller lighter blue"> Show information </h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>

										


										<div class="table-header">
											User Message show
										</div>

										<div class="col-md-8 col-md-offset-2">
         									 @if (session('success'))
              									<div class="alert alert-success text-center">
                 									 {{ session('success') }}
              									</div>
         									 @endif
          								</div>
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
														<th>User name</th>
														<th>Email</th>
														<th>Subject</th>
														<th>Message</th>
														
														
														<th> Conform /Delete</th>
													</tr>
												</thead>

												<tbody>
												    @foreach($Contact AS $value)
													<tr>
														<td class="center">
															<label class="pos-rel">
																{{$value->id}} <!-- <input type="checkbox" value="" class="ace" />
																<span class="lbl"></span>  -->
															</label>
														</td>

														<td>
															<a href="#"> {{$value->name}} </a>
														</td>
														<td>
															<a href="#"> {{$value->email}} </a>
														</td>
													
														
														
														<td>
															<a href="#"> {{$value->subject}} </a>
														</td>	
														<td>
															<a href="#"> {{$value->message}} </a>
														</td>
													
														
														

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
														
																<!-- <a class="green" href="{{route('Product.edit',$value->id)}}">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a> -->

															

																<a href="{{route('ContactEmail.edit',$value->id)}}" class="btn btn-success btn-lg">
          														<span class="glyphicon glyphicon-saved"></span> 
        														</a>

        															<a class="red" href="{{route('ContactEmail.show',$value->id)}}">
																	<i class="ace-icon fa fa-2x fa-trash-o "></i>
																
																</a>


															</div>

															
														</td>
													</tr>
													@endforeach

										
													
												</tbody>


											</table>
											{{$Contact->links()}}
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

