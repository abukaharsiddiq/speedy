@extends('layouts.header')
@section('main-contain')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-title">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding">
            <h3> &nbsp; </h3>
        </div>
    </div>
 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-area">
    	 <form action="{{route('Home.store')}}" method="post" enctype="multipart/form-data">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding" style="min-height: 750px;">
          <div class="col-md-12">
             <h3 style="margin-bottom: 25px; text-align: center;"> Order Information </h3>
          </div>
      <br>
        <div class="preview col-md-6">
             @if (count($errors) > 0)
             <div class="alert alert-danger">
                <ul>
                     @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                     @endforeach
               </ul>
            </div>
           @endif
         
          {{ csrf_field()}}
          
          
          <input type="hidden" class="invoice" value="{{time()}}">
         @if(!empty($_SESSION['ptc_user_id']))
          <input type="hidden" name='login_user_id' class="login_user" value="{{$_SESSION['ptc_user_id']}}">
          @endif
          
          
          
          @if(!empty($_SESSION['ptc_user_id']))
          <input type="hidden" name='login_user_id' class="login_user" value="0">
          @endif
          
          
          
          <script>
              function getUserInfo(){
                  var id = $('.login_user').val();
                  //alert(id);
                  
                  
                   var dataString ='user_id='+id;
                                
                                //alert(dataString);
                                //AJAX code to submit form.
                                $.ajax({
                                    type: "POST",
                                    url: "../../app1/ajax/check_user_info_ecommerce.php",
                                    data: dataString,
                                    cache: false,
                                    success: function (result) {
                                         //alert(result);
                                        var ex = result.split(',');
                                        $('.full_name').val(ex[0]);
                                        $('.email').val(ex[1]);
                                        $('.mobile').val(ex[2]);
                                        $('.dis').val(ex[3]);
                                        $('.address').val(ex[4]);
                                    }
                                });

                                return false;
              }
              getUserInfo();
              
              
              
          </script>
          
          
          <div class="form-group">
          
              <div class="form-group">
                <input type="text" class="form-control full_name" id="name" name="name" placeholder="Name" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control email" id="email" name="email" placeholder="Email" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control mobile" id="mobile" name="mobile" placeholder="Mobile Number" required="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control dis" id="district" name="district" placeholder="District name" required="">
              </div>
             
              <div class="form-group">
              <textarea class="form-control address" name="address" type="textarea" id="message" placeholder="Address" maxlength="500" rows="4" required=""></textarea>
             
                                              
              </div>
                
        

           </div>
         

    <div class="col-md-8 col-md-offset-1">
       @if (session('success'))
            <!-- <div class="alert alert-success text-center"> -->
            <script type="text/javascript">
              alert("{{ session('success') }}");
              window.location.replace('{{url("/")}}');
            </script>
                
             <!-- </div> -->
       @endif
    </div>
  
                        
 </div>
<div class="col-md-6 padding">
<table class="table table-bordered table-responsive">
  <tr>
    <th>SL </th>  <th>Product name </th> <th>Quantity </th>
    <!--<th>Price </th>-->
    <th> Picture </th> <th> Delete </th>
  </tr>
  <?php 
   $s=1; 
   $sum=0;
   ?>
   @foreach($CartProduct AS $info)
   @if ($data = App\ProductModel::find($info->product_id))
  <tr>
    <td>{{$s++}}</td> <td>{{$data->product_name}}</td> <td>{{$quan = $info->quantity}}</td> 
    <!--<td>{{$price = $quan * $info->price}}</td> -->
    <td><img src="{{url('photo/'.$data->image)}}" class="img-responsive img-thumbnail" style="height: 80px;"></td>
    <td><a href="{{route('Cart.edit',$info->id)}}"><span class="fa-2x glyphicon glyphicon-remove" style="color: red;"></span></a> </td>
  </tr>
   <input type="hidden" name="user_id" class="user_id" value="{{$info->user_id}}">

   @endif
   <?php $sum = $sum+$price; ?>
  @endforeach
  <tr>
    <td>Total </td> <td colspan="4" class="text-center"> <b> &nbsp;&nbsp;&nbsp;&nbsp;= {{$sum}} </b>
    <input type="hidden" class='price' value="{{$sum}}"
    </td>
  </tr>
  
</table>
<input type="submit" id="submit" name="submit" class="btn btn-success pull-right" onclick="customerOrderInfo()" value="Order submit">
</div>

</form>
            
<!--<div class="details col-md-12 col-sm-12 col-xs-12">-->
<!--<hr>-->
<!--     <h3 class="product-title" style="margin-top: 20px;"> নিয়মনীতি </h3>-->
<!--      <b>যেভাবে Easylife  কাজ করে (How Easy life Works)</b><br>-->
       

<!--সবচেয়ে বড় অনলাইন শপিং easylifebd.asia আপনার নিত্যদিনের প্রয়োজনীয় বিভিন্ন পন্যসামগ্রী যেমন, কনজ্যুমার, ইলেকট্রনিক্স, লাইফস্টাইল , মেডিকেল ইন্সটুমেন্ট , ফ্যাশন ইত্যাদি পন্যের উপরে নানা অফার ও আকর্ষনীয় ডিসকাউন্ট প্রদান করে থাকে। বেশিরভাগ পন্যের ক্ষেত্রে ক্রেতারা বাসায় বসে মুল্য পরিশোধ করে বাসায় পন্য গ্রহন করতে পারে।-->
<!--      <b> যেভাবে আপনি পন্য কিনবেনঃ</b><br>-->
<!--      ১। আপনার নির্বাচিত পন্যটি কেনার জন্য পণ্যের ছবির উপরে ক্লিক করে অফারটির বিস্তারিত পাতার পাশে Buy Now’ এই ক্লিক  করুন।<br>-->
<!--      ২। অনুগ্রহ করে ‘ডেলিভারী ও মুল্য পরিশোধ প্রক্রিয়া’ অংশে যে যে তথ্য চাওয়া হয়েছে সেগুলো সঠিকভাবে প্রদান করুন। মনে রাখবেন আপনার প্রদানকৃত সঠিক তথ্য আপনার পন্যের ডেলিভারী প্রক্রিয়াকে ত্বরান্বিত করবে।<br>-->
<!--      ৩। এরপরে আপনি পরবর্তী ধাপে যেতে ‘Order Submit’ বাটনে ক্লিক করুন।<br>-->
    
<!--      ৪। ২৪ ঘণ্টার মধ্যে আমাদের প্রতিনিধি আপনার সাথে ফোনে যোগাযোগ করবে।         <br>-->
<!--      ৫। যেকোন তথ্য সহায়তার জন্য ফোন করুন – +88-02-9354701,  01718-316117 (সকাল ৯টা থেকে রাত <br>-->
<!--      ১১ টার মধ্যে)।   <br>-->
<!--      ৬। এছাড়াও সরাসরি ফোনে অর্ডার দিন –  01718-316117    <br>-->



                    
<!--                </div>-->
   <br>
   <br>
    </div>
</div>

</div>



<script>
    
              function customerOrderInfo(){
                  var invoice = $('.invoice').val();
                  var pro_price = $('.price').val();
                  var login_user_id = $('.login_user').val();
                  var user_id = $('.user_id').val();
                  var full_name = $('.full_name').val();
                  var email = $('.email').val();
                  var mobile = $('.mobile').val();
                  var dis = $('.dis').val();
                  var address = $('.address').val();
                  
                  //alert(id);
                  
                  
                   var dataString = 'user_id='+user_id+
                                    '&invoice='+invoice+
                                    '&pro_price='+pro_price+
                                    '&login_user_id='+login_user_id+
                                    '&full_name='+full_name+
                                    '&email='+email+
                                    '&mobile='+mobile+
                                    '&dis='+dis+
                                    '&address='+address
                                    ;
                                if(full_name && email){
                                    
                                
                                //alert(dataString);
                                //AJAX code to submit form.
                                $.ajax({
                                    type: "POST",
                                    url: "../../app1/ajax/customer_order_form_ecommerce.php",
                                    data: dataString,
                                    cache: false,
                                    success: function (result) {
                                         //alert(result);
                                    }
                                });

                                return false;
                                }else{
                                    //alert('have');
                                }
              }
</script>





@endsection