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
							All New Order view
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
											SL
										</th>
										<th>User name</th>
										<th>Email</th>
										<th>Mobile</th>
										
										<th>Distrct</th>
										
										<th>Address</th>
										<th>Image</th>
										
										<th>Cancel / Conform /Delails</th>
									</tr>
								</thead>

								<tbody>
									<?php $s=1; ?>
								    @foreach($order AS $value)
									<tr>
										<td class="center">
											<label class="pos-rel">
												{{$value->id}}
											</label>
										</td>

										<td>
											 {{$value->name}}
										</td>
										<td>
											{{$value->email}} 
										</td>
										<td>
										{{$value->mobile}} 
										</td>
										<td>
										{{$value->district}} 
										</td>
										
										<td>
											{{$value->address}} 
										</td>
									
										<td> <img class="img-responsive img-thumbnail" src="{{asset('photo/'.$value->image)}}" style="height: 100px;">  </td>
										

										<td>
											<div class="hidden-sm hidden-xs action-buttons">
										
												<!-- <a class="green" href="{{route('Product.edit',$value->id)}}">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a> -->

												<a class="red" href="{{route('OrderCencel.orderCancel_method',$value->id)}}">
													<i class="ace-icon fa fa-2x fa-trash-o "></i>
												
												</a>

												<a href="{{route('OrderInfo.edit',$value->id)}}" class="btn btn-success btn-lg">
													<span class="glyphicon glyphicon-saved"></span> 
												</a>

												<a href="{{route('OrderInfo.show',$value->id)}}" class="btn btn-info btn-lg">
													<span class="glyphicon glyphicon-eye-open"></span> More

												</a>


											</div>

											
										</td>
									</tr>
									@endforeach

						
									
								</tbody>


							</table>
							{{$order->links()}}
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

