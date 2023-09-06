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

										


										<div class="table-header">
											All Search Result Information view
										</div>

									<!-- 	<div class="col-md-8 col-md-offset-2">
         									 @if (session('success'))
              									<div class="alert alert-success text-center">
                 									 {{ session('success') }}
              									</div>
         									 @endif
          								</div> -->
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
														<th>Moible</th>
														<th>Product name</th>
														<th>Price</th>
														<th>Quantity</th>
														
														<th>Image</th>
														
														<th>Cancel / Conform /Delails</th>
													</tr>
												</thead>

												<tbody>
												    @foreach($order AS $value)
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
															<a href="#"> {{$value->mobile}} </a>
														</td>
														<td>
														@if($product_name = App\ProductModel::find($value->product_id))
															<a href="#"> {{$product_name->product_name}} </a>
													    @endif
														</td>
														<td>
														@if($dam = App\ProductModel::find($value->product_id))
															<a href="#"> {{$dam->price}} Tk</a>
													    @endif
														</td>
														
														<td>
															<a href="#"> {{$value->quantity}} </a>
														</td>
													
														<td> <img class="img-responsive img-thumbnail" src="{{url('photo/'.$value->image)}}" style="height: 100px;">  </td>
														

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
														
																<!-- <a class="green" href="{{route('Product.edit',$value->id)}}">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a> -->

																<a class="red" href="{{route('OrderCencel.orderCancel_method',$value->id)}}">
																	<i class="ace-icon fa fa-2x fa-trash-o "></i>
																
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