@extends('layouts.header')
@section('main-contain')


<div class="col-md-12 padding">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-head">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 padding">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 feature-title padding">
                <h3> Contact Us
                </h3>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 feature-page">
               
            </div>
        </div>
    </div>

</div>
<div class="col-md-12 padding">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 padding">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 support-description padding">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tap-head">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Contact Us</a></li>

                    </ul>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 support-connect padding">

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="home">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tap-image-area padding">
                                    <img src="http://pricejet.in/media/textboxes/image/p/r/products_1.png" class="img-responsive img-thumbnail">
                                </div>
                              
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane active" id="profile">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tap-profile">
                                <form id="contactform" method="post" action="{{route('ContactEmail.store')}}">
                                    <fieldset>
                                  
                                    {{ csrf_field()}}
                                        <p>
                                            <label for="name">Your Name</label>
                                            <input name="name" id="name" class="form-control" placeholder="Name" type="text">
                                        </p>
                                        <p>
                                            <label for="email">Your Email*</label>
                                            <input  type="email" name="email" class="form-control" placeholder="Email">
                                        </p>
                                        <p>
                                            <label for="sub">Subject</label>
                                            <input type="text" name="subject" placeholder="Subject" id="sub" class="form-control" >
                                        </p>

                                        <p>
                                            <label for="mes">Message*</label>
                                            <textarea rows="6" name="message" class="form-control" id="mes" class="required" placeholder="Write Message Here"></textarea>
                                        </p>
                                        <p>
                                            <input value="Send Message" class=" btn btn-success" type="submit">
                                        </p>
                                        <div id="result"></div>
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tap-profile">
                           
                            </div>

                        </div>

                    </div>

                </div>
            </div>


            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 feature-description">
            <br>
                <h4>Address</h4>
                <h5> *  Head Office Dhaka</h5>
                <p style="font-size:15px;">
               <b>F. S. Cosmetics Co. Ltd. </b> <br>
              
              <i class="fa fa-road" aria-hidden="true"></i> &nbsp;
              
                
                <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;
              128, Crescent Road, Kathal Bagan, Dhanmondi, Dhaka-1205. <br>
               <br>

<h2>Sales Contact</h2>

                
                  <i class="fa fa-user" aria-hidden="true"></i> &nbsp;
                   Saidur Rahman (Asst.Sales Manager)<br>    <i class="fa fa-asterisk" aria-hidden="true"></i> &nbsp;
                   Bangladesh East <br>
                
                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;
                   Mobile : +8801716-879427 <br>
                  
                   
                   <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                   E-mail: saeedmdp2009@gmail.com
                   
                   </p>
                   
                   <h2>Sales Contact</h2>
                   
                     <i class="fa fa-user" aria-hidden="true"></i> &nbsp;
                   Harun Ur Rashid(Asst.Sales Manager)<br>    <i class="fa fa-asterisk" aria-hidden="true"></i> &nbsp;
                   Bangladesh West <br>
                
                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;
                   Mobile : +8801731-646536 <br>
                   
                   <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                   E-mail: harunfstrading@gmail.com
                  
                   
                   <!--<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;-->
                   <!--E-mail: saeedmdp2009@gmail.com-->
                   
                   </p>
                   
                   
                   
<h2>Manager Sales & Marketing</h2>

                
                  <i class="fa fa-user" aria-hidden="true"></i> &nbsp;
                 Md.Julkar Nain Khan Dipu (Manager Sales & Marketing)<br>    <i 
                <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;
                   Mobile : +8801833147961 <br> 
                        <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp;
                   Mobile : +8801712107015 <br>
                  
                   
                   <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                   E-mail: jnkhan1973@gmail.com
                   
                   </p>
                   
                <a target="_blank" href="https://www.facebook.com/superspeedyhaircolor/" class="btn btn-primary"> <i class="fa fa-facebook"></i> &nbsp;&nbsp;&nbsp;&nbsp; Facebook</a>


            </div>
            <div class="col-md-8 col-md-offset-1">
                           @if (session('success'))
                                <!-- <div class="alert alert-success text-center"> -->
                                <script type="text/javascript">
                                  alert("{{ session('success') }}");
                                  window.location.replace('{{url("/Contact")}}');
                                </script>
                                    
                                 <!-- </div> -->
                           @endif
                        </div>
        </div>
    </div>

</div>

<script>
    $('#myTabs a').click(function(e) {
        e.preventDefault()
        $(this).tab('show')
    })

    $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
    $('#myTabs a:first').tab('show') // Select first tab
    $('#myTabs a:last').tab('show') // Select last tab
    $('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
</script>
@endsection