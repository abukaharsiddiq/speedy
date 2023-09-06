
<!DOCTYPE html>
<html lang="en">
<!-- use Illuminate\Support\Facades\Auth; 
Auth::user()->id;
-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

       <title> Islamic</title>
        <link rel="shortcut icon"  type="image/x-icon"  href="{{url('img/logo.png')}}">

        <!-- Bootstrap Core CSS -->
        <link href="{{url('css/style.css')}}" rel="stylesheet">
        <link href="{{url('css/easylife.css')}}" rel="stylesheet">
        <link href="{{url('css/style_gallery.css')}}" rel="stylesheet">
        <link href="{{url('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        
        

        <!-- Theme CSS -->
        <link href="{{url('css/product_details.css')}}" rel="stylesheet">
        <link href="{{url('css/freelancer.css')}}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">


      
           
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

        <style type="text/css">
            .padding{
                padding: 0px;
            }
            .color-white{
                color: white;
            }
            .border{
                border:1px solid #ddd;
            }

         .gallery
          {
              display: inline-block;
              margin-top: 20px;
          }
          
        </style>

          <script type="text/javascript">
      $(document).ready(function(){
         
          $(".fancybox").fancybox({
              openEffect: "none",
              closeEffect: "none"
          });
      });
         
  
    </script>

    </head>

    <body id="page-top" class="index">

        <div id="skipnav"><a href="#maincontent"> Skip to main content </a></div>

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom" style="background: #fff;">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="col-md-5 padding">
                <div class="navbar-header page-scroll hidden-xs">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                   

                    <div class="hidden-sm hidden-xs animated bounceInLeft padding"><a class="navbar-brand" href="easylifebd.asia"><img src="{{url('img/logo.png')}}" style="width: 100% height:135px; margin-top: -20px;" ></a></div>

                    <div class="hidden-md hidden-lg animated bounceInLeft"><a class="" href="easylifebd.asia"><img src="{{url('img/logo.png')}}" style="width: 200px;height:100px;"></a></div>


                </div>
               

                <div class="navbar-header page-scroll hidden-sm hidden-md hidden-lg" style="margin-top: 0px;">

                  <!--   <a href=""><button type="button" class="navbar-toggle" style="background: #2E3092;">
                        <span class="sr-only">Toggle navigation</span> More Income...
                    </button></a> -->
                   
                    <div class="hidden-sm hidden-xs"><a class="navbar-brand" href="easylifebd.asia"><img src="{{url('img/logo.png')}}" style="width: 77%;"></a></div>

                    <div class="hidden-md"><a class="" href=""><img src="{{url('img/logo.png')}}"></a></div>

                </div>

               </div>

              
          
               <div class="col-md-4 col-lg-4  animated bounceInRight" style="margin-top: 20px;">
                       <ul class="social-nav pull-right">
                            <li><a href="#" target="_blank" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank" title="Linkedin" rel="nofollow" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank" title="Pinterest" rel="nofollow" class="pinterest"><i class="fa fa-pinterest"></i></a>
                            </li>    

                        </ul>
                        
                                  
              
                    
                  
               </div>
                 <div class="col-md-2 padding" style="margin-top: 20px;">
               <?php
                 $CartNum = App\cartModel::where('user_id','=',$UserId)->where('active','=',0)->get()->count(); 
               
                ?> 
            <a href="{{route('Cart.show',$UserId)}}"> <button class="pull-right btn btn-danger" style="width: 70px;"> <i class="fa fa-cart-plus fa-1x" aria-hidden="true"></i> <span style="font-size: 16px;"> {{$CartNum}} </span></button></a>

           <!--   <a href="" class=" animated bounceInUp">
                    <button type="button" class="btn hidden-sm hidden-xs pull-left" style="background: #2E3092;color: white;float:right;" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"> Toggle navigation </span> More Income...
                    </button>
                    </a> -->
                </div>

              
            </div>
            <!-- /.container-fluid -->
        </nav>

    
        <nav id="mainNav" class="navbar navbar-default navbar-custom  animated slideInUp" style="background: #2e3092;padding: 0;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                

                <div class="navbar-header page-scroll hidden-sm hidden-md hidden-lg" style="margin-top: 5px;">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" style="background: green;" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                   
                    
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="col-md-9 col-md-offset-2">
                <div class="collapse navbar-collapse padding" id="bs-example-navbar-collapse-1">
                    
                    <center>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{url('/')}}">Home </a>
                        </li>
                          <li class="page-scroll">
                            <a href="{{route('ProductList.productList_info')}}"> Product </a>
                        </li> 
                        <li class="page-scroll">
                            <a href="http://easylifebd.asia/app1/login.aspx"> Earning </a>
                        </li>
                         <li class="page-scroll">
                            <a href="{{route('AgentList.agent_list')}}"> Agent </a>
                        </li> 
                        <li class="page-scroll">
                            <a href="{{route('About.about_page')}}"> About </a>
                        </li>
                        
                        
                        <li class="page-scroll">
                            <a href="{{route('Gallery.gallery_page')}}"> Gallery </a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{route('NoticePage.index')}}"> Notice </a>
                        </li>
                       
                      
                        
                       
                         <li class="page-scroll">
                            <a href="{{route('Contact.contact_page')}}">Contact</a>
                        </li> 
                        
                    </ul>
                    </center>
                </div>
            </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

      


<div class="container-fluid" style="background: #fff;padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-12 ">
            <h1 style="color: #2e3092;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gallery </h1>
          
            
            <div class="col-lg-12 col-lg-md col-sm-12  padding">
                
              <div class="container padding">
  <div class="row">
    <div class='list-group gallery'>
             @foreach($gallery AS $show)
                      <div class='col-md-3 col-lg-3' style="height: 260px;">
                          <a class="thumbnail fancybox" rel="ligthbox" href="{{url('photo/'.$show->image)}}">
                              <img class="img-responsive" alt="{{$show->image}}" src="{{url('photo/'.$show->image)}}" style="height: 250px; width:100%;" />
                              <!-- <div class='text-right'>
                                  <small class='text-muted'>{{$show->title}}</small>
                              </div>  -->
                          </a>
                      </div>
                      @endforeach
            
        </div> <!-- list-group / end -->
  </div> <!-- row / end -->
</div>


            </div>
        </div>
    </div>
</div>



<style type="text/css">
    .payaligning img{
        min-height: 200px;
    }
</style>
<div class="container-fluid" style="background: #fff;padding-bottom: 50px;">

</div>


<footer id="footer-Section">
  <div class="footer-top-layout" style="display: none;">
    <div class="container">
      <div class="row">
        <div class="OurBlog">
          <h4>Our Product</h4>
          <p>Best Product for batter life.</p>
          <div class="post-blog-date">
          <?php 
          $originalDate = date('Y-m-d');
$newDate = date("d M Y", strtotime($originalDate));
echo $newDate;
           ?>
          </div>
        </div>
        <div class=" col-lg-8 col-lg-offset-2">
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Office Address</h4>
              <address>
              89/A,ANARKOLI SUPER MARKET
(3RD FLOOR) 
SIDDESWARI,RAMNA, DHAKA-1217 
              </address>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Contact Us</h4>
              <div class="item-contact"> <a href=""><span class="link-id">M</span>:<span>01812-45 43 58</span></a> 
               <a href="mailto:info@brandcatmedia.com"><span class="link-id">E</span>:<span>hatbazarlive@gmail.com</span></a> 
              <a href=""><span class="link-id">Fb</span>:<span>fb.com/hatbazar</span></a></div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="footer-col-item">
              <h4>Sign up for Newsletter</h4>
              <form class="signUpNewsletter" action="" method="get">
                <input name="" class="gt-email form-control" placeholder="You@youremail.com" type="text">
                <input name="" class="btn-go" value="Go" type="button">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!--  <div class="footer-bottom-layout">
    <div class="col-md-6"></div>
    <div class="col-md-6">  
      <div class="copyright-tag">Copyright © <?php echo date('Y'); ?> Easy life E-commerce Ltd. All Rights Reserved. </div>
  </div>
  </div> -->
  <div class="footer-bottom-layout">
    <div class="col-md-6 footer-menu">
    
                    <ul>
                      
                        <li class="page-scroll">
                            <a href="{{route('TERMS.pressRoom_page')}}">TERMS OF USE </a>
                        </li>
                        <li class="page-scroll">
                            <a href="{{route('PRIVACY.beApart_page')}}">PRIVACY POLICY</a>
                        </li> 
                   
                    </ul>
                
    </div>
      <div class="col-md-6 footer-menu">
        <div class="copyright-tag" style="line-height: 5px;"> Copyright © <?php echo date('Y'); ?> Easy life E-commerce Ltd. All Rights Reserved.
     </div>
  </div> 
  
  </div>
</footer>
<style type="text/css">
  .footer-menu{
    height: 30px;

  }
  .footer-menu ul{
    list-style: none;
  }
  .footer-menu ul li{
    height: 30px;
    float: left;
    padding-left: 10px;
    padding-right: 10px;
    line-height: 30px;
    margin-top: -15px;
  } 
  .footer-menu ul li a{
   text-decoration: none;
   color: white;
   margin-top: -20px;
  }
</style>
</footer>




<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script> -->

<!-- <script src="{{url('vendor/jquery/jquery.min.js')}}"></script> -->

        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="{{url('js/jqBootstrapValidation.js')}}"></script>
        <script src="{{url('js/contact_me.js')}}"></script>

        <!-- Theme JavaScript -->
        <script src="{{url('js/freelancer.min.js')}}"></script>


        

    </body>

</html>