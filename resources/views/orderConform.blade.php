@extends('layouts.header')
@section('main-contain')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-title">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding">
            <h3> &nbsp; </h3>
        </div>
    </div>
 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-area">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding" style="min-height: 750px;">
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
           
           
          
           
           
          <form action="{{route('Home.store')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field()}}
          <div class="form-group">
           <h3 style="margin-bottom: 25px; text-align: center;"> Order Information </h3>
                <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="district" name="district" placeholder="District name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
              </div>
              <div class="form-group">
              <textarea class="form-control" name="address" type="textarea" id="message" placeholder="Address" maxlength="500" rows="4"></textarea>
              <input type="hidden" name="product_id" value="{{$product_id->id}}">
                                              
              </div>
                
        

           </div>
         <div class="col-md-12 padding">
          <table class="table table-bordered table-responsive">
            <tr>
              <th>Product name </th> <th>Price </th> <th> Picture </th>
            </tr>
            <tr>
              <td>{{$product_id->product_name}}</td> <td>{{$product_id->price}}</td> <td><img src="{{url('photo/'.$product_id->image)}}" class="img-responsive img-thumbnail" style="height: 80px;"></td>
            </tr>
            
          </table>
           
        </div>
       <input type="submit" id="submit" name="submit" class="btn btn-success pull-right" value="Order submit">
    </form>

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
            
   <div class="details col-md-6 col-sm-12 col-xs-12">

                     
               <h3 class="product-title" style="margin-top: 20px;">নিয়মনীতি </h3>
                         <b>যেভাবে হাটবাজার  লাইভ  কাজ করে (How HatBazar live Works)</b><br>
                        সবচেয়ে বড় অনলাইন শপিং মল হাটবাজার  লাইভ  ডট কম আপনার নিত্যদিনের প্রয়োজনীয় বিভিন্ন পন্যসামগ্রী যেমন, এক্সেসরিজ,ফ্যাশন  ও লাইফস্টাইল পন্য, হেলথকেয়ার পন্য, ছেলেদের শপিং, মেয়েদের শপিং, ইলকট্রনিক্স, হোম অ্যাপ্লায়েন্স ইত্যাদি পন্যের উপরে নানা অফার ও আকর্ষনীয় ডিসকাউন্ট প্রদান করে থাকে। বেশিরভাগ পন্যের ক্ষেত্রে ক্রেতারা বাসায় বসে মুল্য পরিশোধ করে বাসায় পন্য গ্রহন করতে পারে।<br>
                        <b> যেভাবে আপনি পন্য কিনবেনঃ</b><br>
                        ১। আপনার নির্বাচিত পন্যটি কেনার জন্য পণ্যের ছবির উপরে ক্লিক করে অফারটির বিস্তারিত পাতাপাশে ‘Order Now’ এই বার্ডার করুন।<br>
                        ২। অনুগ্রহ করে ‘ডেলিভারী ও মুল্য পরিশোধ প্রক্রিয়া’ অংশে যে যে তথ্য চাওয়া হয়েছে সেগুলো সঠিকভাবে প্রদান করুন। মনে রাখবেন আপনার প্রদানকৃত সঠিক তথ্য আপনার পন্যের ডেলিভারী প্রক্রিয়াকে ত্বরান্বিত করবে।<br>
                        ৩। এরপরে আপনি পরবর্তী ধাপে যেতে ‘Order Submit’ বাটনে ক্লিক করুন।<br>
                      
                        ৪। ২৪ ঘণ্টার মধ্যে আমাদের প্রতিনিধি আপনার সাথে ফোনে যোগাযোগ করবে।         <br>
                        ৫। যেকোন তথ্য সহায়তার জন্য ফোন করুন – +8801768319773, +8801817081885 (সকাল ৯টা থেকে রাত <br>
                        ১১ টার মধ্যে)।   <br>
                        ৬। এছাড়াও সরাসরি ফোনে অর্ডার দিন – +8801768319773  <br>
                        
                    </div>
       <br>
       <br>
        </div>
    </div>

</div>


<div class="col-md-12">
  <div class="ol-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding details-bottom-page">
              <h2 style="color: green;" class="text-center">Similar Product</h2>
              @foreach($semilar = App\ProductModel::where('category','=',$product_id->category)->orderBy('id','DESC')->paginate(12) AS $value)
                 <div class="col-md-3">
           
            <div class="col-xs-12 product-item padding">
                    <div class="col-sm-12 col-xs-6 padding">
                    <a href="{{route('Home.edit',$value->id)}}">
                      <div class="col-sm-12 col-xs-6pi-img-wrapper ">
                        <img src="{{url('photo/'.$value->image)}}" class="img-responsive" alt="" style="padding: 5px 0px;">
                      
                      </div>
                      </a>
                    </div>

                      <div class="col-sm-12 col-xs-6">
                     <h3 style="font-size: 12px;min-height: 40px;line-height: 15px;">
                      <a href=""> 
                        {{str_limit($value->product_name,50)}}
                       
                      </a>
                    </h3>
                     <div class="pi-price" style="font-size: 1em;"><p> {{$value->price}} Tk</p></div>
                        <a href="javascript:;" class="btn btn-primary add2cart" style="color: white;"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart </a>
                     </div>




               </div>
        </div>

               @endforeach
             <div class="col-lg-12 pull-right"> {{$semilar->links()}} </div>
        </div>
</div>




<script type="text/javascript">
  $(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

</script>
@endsection