@extends('admin.layout.head')
@section('admin-contain')
<script>
function myFunction() {
    window.print();
}
</script>
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
					
									<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" style="min-height: 650px;position: relative;">
									<!-- 	<h3 class="header smaller lighter blue">Information Details</h3> -->
										<button onclick="myFunction()" class="pull-right btn btn-success">Print invoice</button>

										

										<div class="col-md-6 col-lg-6 col-sm-6 col-xins-12 col-md-offset-3 col-lg-offset-3 col-sm-offset-3">
											<img src="{{url('img/logo.png')}}" class="img-responsive" style="height: 100px;">
												<h4 class="text-center text-success"> <b>F. S. Cosmetics Co. Ltd.</b> </h4>
													<h4 class="text-center text-success">   128, Crescent Road, Kathal Bagan, Dhanmondi, Dhaka-1205.
 </h4>
														<h4 class="text-center text-success"> Telephone: +88-02-9640230
   Mobile :+88-02-9640230</h4>
											<h4 class="text-center text-success">www.superspeedybd.com / Mail:fstrade@dhaka.net</h4>
										
									
											<h3 class="text-center text-success"> Invoice</h3>
											
										
										</div>
										
										<div>

										<div class="col-md-5 col-lg-5 col-sm-6 col-xs-12 ">
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
												    <tr>
												    	<th colspan="8" class="text-center">
												    	   User Details
												    	</th>
												    </tr>
													<!--<tr>-->
													<!--	<th style="width: 30%">Photo :</th>-->
													<!--	<td> <img src="{{url('photo/'.$order->image)}}" class="img-responsive img-thumbnail" style="height:80px;"></td>-->
													<!--</tr>-->
													<tr>
														<th style="width: 30%">Customer name :</th>
														<td> {{$order->name}}</td>
													</tr>

													<tr>
														<th style="width: 30%">Email :</th>
														<td> {{$order->email}}</td>
													</tr>
													<tr>
														<th style="width: 30%">Mobile :</th>
														<td> {{$order->mobile}}</td>
													</tr>
													<tr>
														<th style="width: 30%">District :</th>
														<td> {{$order->district}}</td>
													</tr>
													<tr>
														<th style="width: 30%">Address :</th>
														<td> {{$order->address}}</td>
													</tr>

												</thead>

												


											</table>
											
										   </div>

										   <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12 ">
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
						    <tr>
						    	<th>Sl</th><th>Product</th><th>Image</th> <th>Quantity</th> <th>Price</th>
						    </tr>
						   
						    
            <input type="hidden"  class="user_id" id="user_id" value="{{$order->user_id}}">
            <input type="hidden" class="date" id="date" value="{{substr($order->created_at,0,16)}}">
						   
						   
						   <script type="text/javascript">
						  // var user_id = 0;
						  // user_id = $('#user_id').val();
						  // function comilla(){
						       
						  //     alert(user_id);
						  // }
						  // comilla();
						   
    function feni(){

        var user_id = $('.user_id').val();
        var date = $('.date').val();

alert('a;sldfkja;d');
         var dataString = 'user_id='+user_id+'&date='+date;
                      alert(dataString);


                                $.ajax({
                                    type: "POST",
                                    url: "http://easylifebd.asia/app1/ajax/ecom_admin_invoice_table.php",
                                    data: dataString,
                                    cache: false,
                                    success: function (result) {
                                        // alert(result);
                                     // $('.voucher_information').show();

                                     $('.table_for_order_invoice').html(result);

                                    }
                                });

                                return false;

    }
    
    //feni();
    
</script>


						     <?php $s=1;
 								$sum = 0;
						     ?>
						    @foreach($product_info = App\cartModel::where('user_id','=',$order->user_id)->where('unique_id','=',$order->unique_id)->get() AS $viewInfo)
						    <tr>
						    	<td>{{$s++}}</td>
						    	@if($pro = App\ProductModel::find($viewInfo->product_id))
						    	 <td>{{$pro->product_name}}</td>
						    	 @endif
						    	 @if($image = App\ProductModel::find($viewInfo->product_id))
						    	 <td><img src="{{url('photo/'.$image->image)}}" style="height: 60px;"></td>
						    	 @endif
						    	 <td>
						    	 	{{$quan=$viewInfo->quantity}}
						    	 </td>
						    	  <td>
						    	 	{{$price = $quan * $viewInfo->price}}
						    	  </td>

						    	  <?php 
						    	     $sum = $sum + $price;
						    	   ?>
						    </tr>

						    @endforeach

						    <tr>
						    	  <th></th><th colspan="3" class="text-right"></th> <th>Total=  {{$sum}}/-</th>
						    </tr>

						</thead>

												


											</table><br><br>
											<p class="pull-right">
											......................................<br>
									                    Manager signature
											</p>
											
										   </div>
										</div>
									</div>


						<div class="col-md-12  col-lg-12 col-sm-12 col-xs-12" style="min-height: 650px;position: relative;">
									<!-- 	<h3 class="header smaller lighter blue">Information Details</h3> -->
								

										

										<div class="col-md-6 col-lg-6 col-sm-6 col-xins-12 col-md-offset-3 col-lg-offset-3 col-sm-offset-3">
											<img src="{{url('img/logo.png')}}" class="img-responsive" style="height: 100px;">
												<h4 class="text-center text-success"> <b>F. S. Cosmetics Co. Ltd.</b> </h4>
													<h4 class="text-center text-success">   128, Crescent Road, Kathal Bagan, Dhanmondi, Dhaka-1205.
 </h4>
														<h4 class="text-center text-success"> Telephone: +88-02-9640230
   Mobile :+88-02-9640230</h4>
											<h4 class="text-center text-success">www.superspeedybd.com / Mail:fstrade@dhaka.net</h4>
										
									
											<h3 class="text-center text-success"> Invoice</h3>
											
										
										</div>
										
										<div>

										<div class="col-md-5 col-lg-5 col-sm-6 col-xs-12 ">
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
												    <tr>
												    	<th colspan="8" class="text-center">
												    	   User Details
												    	</th>
												    </tr>
													<!--<tr>-->
													<!--	<th style="width: 30%">Photo :</th>-->
													<!--	<td> <img src="{{url('photo/'.$order->image)}}" class="img-responsive img-thumbnail" style="height:80px;"></td>-->
													<!--</tr>-->
													<tr>
														<th style="width: 30%">Customer name :</th>
														<td> {{$order->name}}</td>
													</tr>

													<tr>
														<th style="width: 30%">Email :</th>
														<td> {{$order->email}}</td>
													</tr>
													<tr>
														<th style="width: 30%">Mobile :</th>
														<td> {{$order->mobile}}</td>
													</tr>
													<tr>
														<th style="width: 30%">District :</th>
														<td> {{$order->district}}</td>
													</tr>
													<tr>
														<th style="width: 30%">Address :</th>
														<td> {{$order->address}}</td>
													</tr>

												</thead>

												


											</table>
											
										   </div>

										   <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12 ">
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
						    <tr>
						    	<th>Sl</th><th>Product</th><th>Image</th> <th>Quantity</th> <th>Price</th>
						    </tr>
						   
						    
            <input type="hidden"  class="user_id" id="user_id" value="{{$order->user_id}}">
            <input type="hidden" class="date" id="date" value="{{substr($order->created_at,0,16)}}">
						   
						   
						   <script type="text/javascript">
						  // var user_id = 0;
						  // user_id = $('#user_id').val();
						  // function comilla(){
						       
						  //     alert(user_id);
						  // }
						  // comilla();
						   
    function feni(){

        var user_id = $('.user_id').val();
        var date = $('.date').val();

alert('a;sldfkja;d');
         var dataString = 'user_id='+user_id+'&date='+date;
                      alert(dataString);


                                $.ajax({
                                    type: "POST",
                                    url: "http://easylifebd.asia/app1/ajax/ecom_admin_invoice_table.php",
                                    data: dataString,
                                    cache: false,
                                    success: function (result) {
                                        // alert(result);
                                     // $('.voucher_information').show();

                                     $('.table_for_order_invoice').html(result);

                                    }
                                });

                                return false;

    }
    
    //feni();
    
</script>


						     <?php $s=1;
 								$sum = 0;
						     ?>
						    @foreach($product_info = App\cartModel::where('user_id','=',$order->user_id)->where('unique_id','=',$order->unique_id)->get() AS $viewInfo)
						    <tr>
						    	<td>{{$s++}}</td>
						    	@if($pro = App\ProductModel::find($viewInfo->product_id))
						    	 <td>{{$pro->product_name}}</td>
						    	 @endif
						    	 @if($image = App\ProductModel::find($viewInfo->product_id))
						    	 <td><img src="{{url('photo/'.$image->image)}}" style="height: 60px;"></td>
						    	 @endif
						    	 <td>
						    	 	{{$quan=$viewInfo->quantity}}
						    	 </td>
						    	  <td>
						    	 	{{$price = $quan * $viewInfo->price}}
						    	  </td>

						    	  <?php 
						    	     $sum = $sum + $price;
						    	   ?>
						    </tr>

						    @endforeach

						    <tr>
						    	  <th></th><th colspan="3" class="text-right"></th> <th>Total=  {{$sum}}/-</th>
						    </tr>

						</thead>

												


											</table><br><br>
											<p class="pull-right">
											......................................<br>
									                    Manager signature
											</p>
											
										   </div>
										</div>
									</div>
<!--------------- end  -------------------->

	


				
					
				</div>
			</div>
		</div>
	</div>
</div>



@endsection






