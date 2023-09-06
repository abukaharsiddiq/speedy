<!DOCTYPE html>
<html lang="en">
<!-- use Illuminate\Support\Facades\Auth;
Auth::user()->id;
-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if (!empty($detailsInfo))
        <meta property="og:title"
            content="{{ $detailsInfo->product_name }} , {{ $detailsInfo->price }} tk -superspeedybd.com />
        <meta property="og:site_name"
            content="descr - superspeedybd.com" />
        <meta property="og:description" content="{!! strip_tags($detailsInfo->description) !!}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="superspeedybd.com/FbCategory/{{ $detailsInfo->id }}" />
        <meta property="og:image" content="{{ url('photo/' . $detailsInfo->image) }}" />
        <meta property="fb:app_id" content="581834898827560" />
    @endif


    <meta name="description" content="">
    <meta name="author" content="">

    <title>F. S. Cosmetics Co. Ltd.</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/logo.jpg') }}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{-- <link href="{{ url('css/style.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ url('css/easylife.css') }}" rel="stylesheet">
    <link href="{{ url('css/style_gallery.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">



    <!-- Theme CSS -->
    <link href="{{ url('css/product_details.css') }}" rel="stylesheet">
    <link href="{{ url('css/freelancer.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">

    <!-- --------------Image zoom----------- -->
    <script src="{{ url('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ url('js/jquery.elevatezoom.js') }}"></script>

    <style type="text/css">
        .padding {
            padding: 0;
        }

        .color-white {
            color: white;
        }

        .border {
            border: 1px solid #ddd;
        }
    </style>


</head>

<body id="page-top" class="index">


    <div class="row">

        <div class="col-md-3 col-xs-12" style="background:;overflow:hidden;padding-top:10px;">
            <div class="col-xs-6">
                <center> <img src="{{ asset('img/logo/flag-400.png') }}" width="71" height="40"><br>Bangladesh
                </center>
            </div>
            <div class="col-xs-6"> <img src="{{ url('img/logo/southkoria.png') }}" width="71"
                    height="40"><br>South Korea </div>
        </div>
        <div class="col-md-6 col-xs-12" style="margin-top:2px;"> <img src="{{ url('img/logo.jpg') }}" height="70"
                width="100%"> </div>
        <div class="col-md-3 col-xs-12" style="background:;text-align:center;padding-top:10px;">
            <i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;+88-02-9640230<br>
            <i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp;&nbsp;+88-01883423064<br>
            <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;fstrade@dhaka.net
        </div>




        <!--<div class="col-md-1 col-sm-3" style="height:50px;margin-top:27px;  margin-left:60px;"><img src="img/logo/flag-400.png" width="80" height="37"><br>Bangladesh</div>-->
        <!--<div class="col-md-1 col-sm-3" style="height:50px; margin-top:20px;margin-left:10px; padding:0px;"><img src="img/logo/southkoria.png" width="80" height="50"><br>South Korea</div>-->
        <!--<div class="col-md-5 col-sm-5" style="height:100px; margin-left:50px; margin-top:5px; margin-bottom:0px;"><img src="img/logo.jpg"  height="80" width="100%"></div>-->
        <!--<div class="col-md-3 col-sm-3" style="height:50px;margin-top:27px;  margin-left:20px;"><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;+880-9640230,9640231<br><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;fstrade@dhaka.net</div>-->

    </div>




    </div>



    <!--<div id="skipnav"><a href="#maincontent"> Skip to main content </a></div>-->

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom" style="background: #fff; display:none;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-5 padding">
                <div class="navbar-header page-scroll hidden-xs">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"> Toggle navigation </span> Menu <i class="fa fa-bars"></i>
                    </button>

                    <div class="navbar-header page-scroll hidden-sm hidden-md hidden-lg" style="margin-top: 0px;">

                        <!--   <a href=""><button type="button" class="navbar-toggle" style="background: #2E3092;">
                        <span class="sr-only">Toggle navigation</span> More Income...
                    </button></a> -->

                        <div class="hidden-sm hidden-xs"><a class="navbar-brand" href="https://easylifebd.asia/"><img
                                    src="{{ url('img/logo.png') }}" style="width: 77%;"></a></div>

                        <div class="hidden-md"><a class="" href=""><img
                                    src="{{ url('img/logo.png') }}"></a></div>

                    </div>

                </div>



                <div class="col-md-3 col-xs-12 padding" style="margin-top: 20px;">









                    <!------------------------ cat calculation in ajax ----------------->



                    <input type="hidden" class="session_id" value="{{ session_id() }}">



                    <script>
                        function getCountCart() {

                            var session_id = $('.session_id').val();
                            //alert(session_id);


                            var dataString = 'customer_id=' + session_id + '&type=total';

                            //alert(dataString);
                            //AJAX code to submit form.
                            $.ajax({
                                type: "POST",
                                url: "../../app1/ajax/getCartInfo.php",
                                data: dataString,
                                cache: false,
                                success: function(result) {
                                    $('.cart_amount').html(result);

                                }
                            });

                            return false;
                        }

                        getCountCart();
                    </script>

                    <!------------------------ cat calculation in ajax ----------------->










                    @if (!empty($_SESSION['ptc_user_id']))
                        <input type="hidden" class="user_id_inputgfgf" value="{{ $_SESSION['ptc_user_id'] }}">


                        <script type="text/javascript">
                            function getProfileImage() {

                                var id = $('.user_id_inputgfgf').val();
                                //alert(id);


                                var dataString = 'customer_id=' + id;

                                //alert(dataString);
                                //AJAX code to submit form.
                                $.ajax({
                                    type: "POST",
                                    url: "../../app1/ajax/check_user_info_ecommerce.php",
                                    data: dataString,
                                    cache: false,
                                    success: function(result) {
                                        //alert(result);
                                        var ex = result.split(',');
                                        var image = ex[0];
                                        //alert(image);

                                        $('.image_profile').attr("src", "app1/" + image);
                                    }
                                });

                                return false;
                            }

                            getProfileImage();
                        </script>



                        <style type="text/css">
                            .profile_menu_list {
                                text-decoration: none;
                            }

                            .profile_menu_list li {
                                float: left;
                                list-style: none;
                                height: 30px;
                                line-height: 30px;
                                position: relative;
                                z-index: 100;

                            }

                            .profile_menu_list li a {
                                display: block;
                                padding-left: 10px;
                                padding-right: 10px;
                                text-decoration: none;
                                color: black;
                            }

                            .profile_menu_list li ul {
                                margin-left: -50px;
                                visibility: hidden;
                            }

                            .profile_menu_list li:hover ul {
                                visibility: visible;
                            }

                            .profile_menu_list li ul li {
                                float: none;
                                background: white;
                                text-align: center;
                                border: 1px solid #ddd;
                            }

                            .profile_menu_list li ul li a:hover {
                                background: #2e3092;
                                color: white;
                            }
                        </style>


                        <ul class="profile_menu_list">
                            <li> <a href=""> {{ $_SESSION['ptc_user_name'] }} </a>
                            <li> <a href="http://easylifebd.asia/app1/Dashboard.aspx" class="img_hover"><img
                                        class="img img-thumbnail image_profile "
                                        src="https://t3.ftcdn.net/jpg/01/26/91/40/240_F_126914059_RhrglZ9N9r4rXssXMPcwpozfLeVwqjw7.jpg"
                                        style="width:60px;height:60px;border-radius:100px;margin-top:-10px;"></a>

                                <ul>
                                    <li> <a href="../../app1/Dashboard.aspx"> Dashboard </a></li>
                                    <li> <a href="../../app1/updateProfile.aspx"> My Profile </a></li>
                                    <li> <a href="../../app1/logout.aspx"> Logout </a></li>
                                </ul>

                            </li>
                        </ul>
                    @endif



                    <?php
                    $CartNum = App\cartModel::where('user_id', '=', $UserId)
                        ->where('active', '=', 0)
                        ->get()
                        ->count();
                    
                    ?>
                    <a href="{{ route('Cart.show', $UserId) }}"> <button class="pull-right btn btn-danger"
                            style="width: 72px;
    height: 72px;
    position: fixed;
    bottom: 100px;
    right: 15px;
    z-index: 1;
    background-color:#bfbaba;
    background-image:url(../../img/cart.png);
    background-size: 33px;
    background-repeat: no-repeat;
    background-position: 6px 6px;
    border: none;
    box-shadow: 0px 0px 10px black;
    color: black;
        font-size: 20px;
    text-align: center;
    line-height: 81px;">
                            <font
                                style="    margin-top: 9px;
    position: relative;
    top: -26px;
    font-size: 18px;
    color: red;
    border-radius: 10px;
    right:-32px;
    font-weight: bold;">
                                {{ $CartNum }} </font>
                            <font
                                style="    margin-top: 9px;
    position: relative;
    top: 5px;
    left: -16px;
    font-size: 16px;
    color:red;
    border-radius: 10px;">
                                Item </font>

                            <div
                                style="width: 148%;
    height: 28px;
    background: #fff;
    margin-top: -11px;
    margin-left: -11px;
    border-radius: 10px;text-align:center;overflow:hidden;box-shadow: 0px 0px 10px black;">
                                <p style="margin-top:-27px;font-size:16px;">৳
                                    <small class="cart_amount"> 0 </small>
                                </p>
                            </div>

                        </button></a>

                    <!--   <a href="" class=" animated bounceInUp">
                    <button type="button" class="btn hidden-sm hidden-xs pull-left" style="background: #2E3092;color: white;float:right;" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"> Toggle navigation </span> More Income...
                    </button>
                    </a> -->

                </div>


            </div>
            <!-- /.container-fluid -->
    </nav>


    <nav id="mainNav" class="navbar navbar-default navbar-custom  animated slideInUp"
        style="background:#0e0e0e;padding: 0;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->


            <div class="navbar-header page-scroll hidden-sm hidden-md hidden-lg" style="margin-top: 5px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" style="background: green;"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 col-md-offset-2"">
                <div class="collapse navbar-collapse padding" id="bs-example-navbar-collapse-1">

                    <center>
                        <ul class="nav navbar-nav navbar-left">
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{ url('/') }}">Home </a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{ route('NoticePage.index') }}"> About Us </a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{ route('ProductList.productList_info') }}"> shop products </a>
                            </li>
                            <!--<li class="page-scroll">-->
                            <!--     @if (!empty($_SESSION['ptc_user_id']))
-->
                            <!--    <a href="http://easylifebd.asia/app1/Dashboard.aspx"> Earning </a>-->
                            <!--
@else
-->
                            <!--    <a href="http://easylifebd.asia/app1/login.aspx"> Earning </a>-->
                            <!--
@endif-->
                            <!--</li>-->
                            <!-- <li class="page-scroll">-->
                            <!--    <a href="http://easylifebd.asia/app1/agentList.aspx"> Agent </a>-->
                            <!--</li> -->
                            <!-- <li class="page-scroll">-->
                            <!--    <a href="http://easylifebd.asia/app1/topAchiver.aspx"> Top Achiver </a>-->
                            <!--</li> -->
                            <!--<li class="page-scroll">-->
                            <!--    <a href="{{ route('About.about_page') }}"> how it works </a>-->
                            <!--</li>-->


                            <!--<li class="page-scroll">-->
                            <!--    <a href="{{ route('Gallery.gallery_page') }}"> Gallery </a>-->
                            <!--</li>-->





                            <li class="page-scroll">
                                <a href="{{ route('Contact.contact_page') }}">Contact</a>
                            </li>
                            <li class="page-scroll">
                                <a href="{{ route('FAQS.rulesRegulation_page') }}"> Distributorship </a>
                            </li>
                        </ul>
                    </center>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>




    @yield('main-contain')




    <style type="text/css">
        .payaligning img {
            min-height: 200px;
        }
    </style>
    <div class="container-fluid" style="background: #fff;padding-bottom: 50px;">

    </div>


    <footer id="footer-Section">
        <div class="footer-top-layout">
            <div class="container">
                <div class="row">

                    <div class=" col-lg-8 col-lg-offset-2">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-5">
                            <div class="footer-col-item">
                                <h4>Contact Us</h4>
                                <div class="item-contact"> <a href=""><span
                                            class="link-id">Mobile</span>:<span style="color:white;">
                                            +88-02-9640230</span></a>
                                    <a href="mailto:FSTRADE@DHAKA.NET"><span class="link-id">Email</span>:<span
                                            style="color:white;">FSTRADE@DHAKA.NET</span></a>
                                    <a href="https://www.facebook.com/superspeedyhaircolor/" target="_blank"><span
                                            class="link-id">Facebook</span>:<span
                                            style="color:white;">fb.com/superspeedyhaircolor</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-sm-4">
                            <div class="footer-col-item">
                                <h4 style="margin-left:-40px;">
                                    <ul>Learn More</ul>
                                </h4>
                                <!--<span>Contact <span><br>-->
                                <a href="{{ route('PRIVACY.beApart_page') }}">PRIVACY POLICY</a>
                                &nbsp;&nbsp;&nbsp;<br>
                                <a href="{{ route('frequent.frequent') }}">FAQ </a><br>
                                <!--<span>How It Works <span><br>-->
                                <!--<span>Instructions <span>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-layout" style="background-color:black;min-height:40px;">

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-6 col-xs-12">Copyright © <?php echo date('Y'); ?>&nbsp;F. S. Cosmetics Co. Ltd. All
                        Rights Reserved.</div>
                    <div class="col-md-3 col-xs-12">Developed By <a href="http://doofazit.com"
                            target="_blank">DoofazIT Limited</a></div>
                    <div class="col-md-3 col-xs-12 pull-right">

                        <!--<a  href="{{ route('TERMS.pressRoom_page') }}">TERMS OF USE </a>-->
                        <!--&nbsp;&nbsp;&nbsp;&nbsp;-->

                        <a href="{{ route('PRIVACY.beApart_page') }}">PRIVACY POLICY</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="{{ route('FAQS.rulesRegulation_page') }}">FAQ </a>

                    </div>
                </div>
            </div>


        </div>
    </footer>


    <script type="text/javascript">
        function myFunction() {
            window.print();
        }
    </script>

    <!-- jQuery -->
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ url('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ url('js/contact_me.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ url('js/freelancer.min.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>











    <style>
        #fb_widget .label {
            position: relative;
            float: left;
            color: #005f46;
            min-width: 20%
        }

        #fb_widget .field {
            position: relative;
            float: left
        }

        #fb_widget .element {
            border: 0 dotted red;
            margin: 12px;
            padding: 5px;
            min-height: 25px;
            clear: both
        }

        #fb_widget .field input {
            margin: 0;
            padding: 0
        }

        #fb_link.disabled {
            opacity: 0;
            visibility: hidden;
        }

        #fb_link.disabled .tooltiptext {
            font-size: 0
        }

        #fb_link.disabled .tooltiptext:after {
            content: "OFFLINE";
            font-size: 12px
        }

        #fb_link.email_us .tooltiptext {
            font-size: 0
        }

        #img_email {
            display: none;
        }

        #fb_link.email_us .tooltiptext:after {
            content: "EMAIL US";
            font-size: 12px
        }

        .fbmessenger {
            position: fixed;
            bottom: 15px;
            right: 15px;
            z-index: 999999999
        }

        .fbmessenger span {
            z-index: 999999999;
            position: absolute;
        }

        .fbmessenger.wpostop_left {
            left: 2px;
            right: initial;
            top: 0;
            bottom: initial
        }

        .tooltiptext.wpostop_left {
            left: 60px;
            right: initial;
            top: 8px;
            bottom: initial
        }

        .fbmessenger.wpostop_right {
            left: initial;
            right: 15px;
            top: 0;
            bottom: initial
        }

        .tooltiptext.wpostop_right {
            left: initial;
            right: 60px;
            top: 8px;
            bottom: initial
        }

        .fbmessenger.wposbottom_left {
            left: 2px;
            right: initial;
            top: initial;
            bottom: 0
        }

        .tooltiptext.wposbottom_left {
            left: 60px;
            right: initial;
            top: initial;
            bottom: 10px
        }

        .fbmessenger.wposbottom_right {
            left: initial;
            right: 15px;
            top: initial;
            bottom: 0
        }

        .tooltiptext.wposbottom_right {
            left: initial;
            right: 60px;
            top: initial;
            bottom: 10px
        }

        .fbmessenger img {
            width: 50px;
            filter: drop-shadow(2px 6px 4px rgba(0, 0, 0, .3));
            -webkit-filter: drop-shadow(2px 6px 4px rgba(0, 0, 0, .3))
        }

        .tooltiptext {
            width: 120px;
            background-color: #fff;
            color: #2c2c2c;
            text-align: center;
            padding: 5px 0;
            border: 1px solid #eee;
            border-radius: 6px;
            position: fixed;
            bottom: 30px;
            right: 75px;
            font-family: inherit;
            font-size: inherit;
            text-transform: uppercase;
            filter: drop-shadow(2px 6px 4px rgba(0, 0, 0, .3));
            -webkit-filter: drop-shadow(2px 6px 4px rgba(0, 0, 0, .3))
        }
    </style>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script type="text/javascript">
        $.noConflict();
        var ot = Array();
        ot['mon'] = '9:00 AM-5:00 PM';
        ot['tue'] = '9:00 AM-5:00 PM';
        ot['wed'] = '9:00 AM-5:00 PM';
        ot['thu'] = '9:00 AM-5:00 PM';
        ot['fri'] = '9:00 AM-5:00 PM';
        ot['sat'] = '9:00 AM-5:00 PM';
        ot['sun'] = '9:00 AM-5:00 PM';
        var tz = '+06:00,0';
        var widget_position = 'bottom_right';
        var fb = 'ইজি লাইফ গ্রুপ';
        var fb_email = '';
        var emailLink = false;
        var mon = true;
        var tue = true;
        var wed = true;
        var thu = true;
        var fri = true;
        var sat = false;
        var sun = false;

        function calculate_time_zone(ch) {
            if (typeof ch == "undefined") ch = false;
            var rightNow = new Date();
            var jan1 = new Date(rightNow.getFullYear(), 0, 1, 0, 0, 0, 0);
            var june1 = new Date(rightNow.getFullYear(), 6, 1, 0, 0, 0, 0);
            var temp = jan1.toGMTString();
            var jan2 = new Date(temp.substring(0, temp.lastIndexOf(" ") - 1));
            temp = june1.toGMTString();
            var june2 = new Date(temp.substring(0, temp.lastIndexOf(" ") - 1));
            var std_time_offset = (jan1 - jan2) / (1000 * 60 * 60);
            var daylight_time_offset = (june1 - june2) / (1000 * 60 * 60);
            var dst;
            if (std_time_offset == daylight_time_offset) {
                dst = "0";
            } else {
                var hemisphere = std_time_offset - daylight_time_offset;
                if (hemisphere >= 0) std_time_offset = daylight_time_offset;
                dst = "1";
            }
            var i;
            var con = convert(std_time_offset) + "," + dst;
            if (ch && document.getElementById('timezone')) {
                for (i = 0; i < document.getElementById('timezone').options.length; i++) {
                    if (document.getElementById('timezone').options[i].value == con) {
                        document.getElementById('timezone').selectedIndex = i;
                        break;
                    }
                }
            }
            return con;
        }

        function linkHandler(e) {
            var is_online = validate();
            if (is_online) {
                e.preventDefault();
                var screenwidth = screen.width - 500;
                window.open(jQuery(this).attr('href'), '_blank', "width=500,height=800,left=" + screenwidth);
            } else {
                if (jQuery("#chk_showemaillink").is(':checked') && jQuery("#fb_email").length > 0) {
                    var fb_email = jQuery("#fb_email").val();
                    if (fb_email != "" && isEmail(fb_email) && jQuery("#fb_link").hasClass("email_us")) {
                        jQuery(this).attr('href', "mailto:" + fb_email);
                        jQuery(this).attr('target', '_self');
                    } else {
                        e.preventDefault();
                        var screenwidth = screen.width - 500;
                        window.open(jQuery(this).attr('href'), '_blank', "width=500,height=800,left=" + screenwidth);
                    }
                } else if (emailLink) {
                    console.log(this);
                } else if (jQuery(this).hasClass("disabled")) {
                    e.preventDefault();
                }
            }
        }

        function convert(value) {
            var hours = parseInt(value);
            value -= parseInt(value);
            value *= 60;
            var mins = parseInt(value);
            value -= parseInt(value);
            value *= 60;
            var secs = parseInt(value);
            var display_hours = hours;
            if (hours == 0) {
                display_hours = "00";
            } else if (hours > 0) {
                display_hours = (hours < 10) ? "+0" + hours : "+" + hours;
            } else {
                display_hours = (hours > -10) ? "-0" + Math.abs(hours) : hours;
            }
            mins = (mins < 10) ? "0" + mins : mins;
            return display_hours + ":" + mins;
        }

        function validate() {
            if (jQuery("#fb_url").length > 0) {
                fb = jQuery("#fb_url").val();
            }
            if (fb == "") {
                sweetAlert("Oops...", "Something went wrong!", "error");
                return false;
            }
            if (jQuery("#chk_mon").length > 0) {
                mon = jQuery("#chk_mon").is(":checked");
                tue = jQuery("#chk_tue").is(":checked");
                wed = jQuery("#chk_wed").is(":checked");
                thu = jQuery("#chk_thu").is(":checked");
                fri = jQuery("#chk_fri").is(":checked");
                sat = jQuery("#chk_sat").is(":checked");
                sun = jQuery("#chk_sun").is(":checked");
            }
            var cDate = new Date();
            var days = Array();
            days['mon'] = mon;
            days['tue'] = tue;
            days['wed'] = wed;
            days['thu'] = thu;
            days['fri'] = fri;
            days['sat'] = sat;
            days['sun'] = sun;
            var daysName = [];
            daysName[1] = "mon";
            daysName[2] = "tue";
            daysName[3] = "wed";
            daysName[4] = "thu";
            daysName[5] = "fri";
            daysName[6] = "sat";
            daysName[7] = "sun";
            if (jQuery("#timezone").length > 0) {
                tz = jQuery("#timezone").val();
            }
            if (jQuery("#widget_position").length > 0) {
                widget_position = jQuery("#widget_position").val();
            }
            jQuery(".fbmessenger").removeClass().addClass("fbmessenger wpos" + widget_position);
            jQuery(".tooltiptext").removeClass().addClass("tooltiptext wpos" + widget_position);
            jQuery("#fb_link").attr("href", "http://m.me/" + fb);
            var cDayofWeek = daysName[cDate.getDay()];
            jQuery("#fb_link").removeClass("disabled");
            var calculated_time_zone = calculate_time_zone();
            var baseTzSy = tz.substr(0, 1);
            var baseTzHr = tz.slice(0, tz.indexOf(":"));
            var baseTzMn = tz.substr(tz.indexOf(":") + 1, 2);
            var baseTzDs = tz.slice(-1);
            var clientTzDs = calculated_time_zone.slice(-1);
            if (baseTzSy == "0") baseTzSy = "";
            if (baseTzSy == "+") baseTzHr = baseTzHr.substr(1);
            var conTz = parseInt(baseTzHr) + parseFloat(baseTzMn / 60);
            var baseTime = calcTime(conTz, conTz);
            var baseDayofWeek = baseTime.getDay();
            if (baseDayofWeek == 0) baseDayofWeek = 7;
            if (days[daysName[baseDayofWeek]]) {
                if (jQuery('.slider-time:visible').length > 0) {
                    s = jQuery("#ts_container-" + daysName[baseDayofWeek] + " .slider-time").html();
                    e = jQuery("#ts_container-" + daysName[baseDayofWeek] + " .slider-time2").html();
                    var start_time = convertTimeFormat(s);
                    var end_time = convertTimeFormat(e);
                } else if (jQuery('#mob_container_time').length > 0) {
                    s = jQuery("#start_time-" + daysName[baseDayofWeek]).val();
                    e = jQuery("#end_time-" + daysName[baseDayofWeek]).val();
                    var start_time = convertTimeFormat(s);
                    var end_time = convertTimeFormat(e);
                } else {
                    var t = ot[daysName[baseDayofWeek]].split("-");
                    var start_time = convertTimeFormat(t[0]);
                    var end_time = convertTimeFormat(t[1]);
                }
                cHrs = cDate.getHours();
                cMin = cDate.getMinutes();
                var osTimeHrs = start_time.slice(0, start_time.indexOf(":"));
                var osTimeMins = start_time.substr(start_time.indexOf(":") + 1, 2);
                var oeTimeHrs = end_time.slice(0, end_time.indexOf(":"));
                var oeTimeMins = end_time.substr(end_time.indexOf(":") + 1, 2);
                console.log("Online time in base timezone(" + daysName[baseDayofWeek] + "): " + osTimeHrs + ":" +
                    osTimeMins + " - " + oeTimeHrs + ":" + oeTimeMins);
                lHrs = baseTime.getHours();
                lMin = baseTime.getMinutes();
                var startTimeTs = new Date(baseTime.getFullYear(), baseTime.getMonth(), baseTime.getDate(), osTimeHrs,
                    osTimeMins, 0, 0);
                startTimeTs = parseInt((startTimeTs.getTime()) / 1000);
                var endTimeTs = new Date(baseTime.getFullYear(), baseTime.getMonth(), baseTime.getDate(), oeTimeHrs,
                    oeTimeMins, 0, 0);
                endTimeTs = parseInt((endTimeTs.getTime()) / 1000);
                sT = new Date(startTimeTs * 1000);
                eT = new Date(endTimeTs * 1000);
                var cTs = parseInt(baseTime.getTime() / 1000);
                if ((cTs >= startTimeTs) && (cTs < endTimeTs)) {
                    jQuery("#fb_link").removeClass("disabled").removeClass("email_us");
                    jQuery("#img_email").hide();
                    jQuery("#img_msg").show();
                    return true;
                } else {
                    if (jQuery("#chk_showemaillink").length > 0) {
                        emailLink = jQuery("#chk_showemaillink").is(':checked');
                        fb_email = jQuery("#fb_email").val();
                    } else {
                        emailLink = emailLink;
                    }
                    if (emailLink) {
                        jQuery('#fb_link').attr('href', "mailto:" + fb_email);
                        jQuery('#fb_link').attr('target', '_self');
                        if (fb_email != "" && isEmail(fb_email)) {
                            jQuery("#fb_link").removeClass("disabled").addClass("email_us");
                            jQuery("#img_email").show();
                            jQuery("#img_msg").hide();
                        } else {
                            jQuery("#img_email").hide();
                            jQuery("#img_msg").show();
                        }
                    } else {
                        jQuery("#fb_link").addClass("disabled");
                    }
                }
            } else {
                if (jQuery("#chk_showemaillink").length > 0) {
                    emailLink = jQuery("#chk_showemaillink").is(':checked');
                    fb_email = jQuery("#fb_email").val();
                } else {
                    emailLink = emailLink;
                }
                if (emailLink) {
                    jQuery('#fb_link').attr('href', "mailto:" + fb_email);
                    jQuery('#fb_link').attr('target', '_self');
                    if (fb_email != "" && isEmail(fb_email)) {
                        jQuery("#fb_link").removeClass("disabled").addClass("email_us");
                        jQuery("#img_email").show();
                        jQuery("#img_msg").hide();
                    } else {
                        jQuery("#img_email").hide();
                        jQuery("#img_msg").show();
                    }
                } else {
                    jQuery("#fb_link").addClass("disabled");
                }
            }
            return false;
        }

        function convertTimeFormat(time) {
            var hours = Number(time.match(/^(\d+)/)[1]);
            var minutes = Number(time.match(/:(\d+)/)[1]);
            var AMPM = time.match(/\s(.*)$/)[1];
            if (AMPM == "PM" && hours < 12) hours = hours + 12;
            if (AMPM == "AM" && hours == 12) hours = hours - 12;
            var sHours = hours.toString();
            var sMinutes = minutes.toString();
            if (hours < 10) sHours = "0" + sHours;
            if (minutes < 10) sMinutes = "0" + sMinutes;
            return sHours + ":" + sMinutes;
        }

        function calcTime(city, offset) {
            d = new Date();
            utc = d.getTime() + (d.getTimezoneOffset() * 60000);
            nd = new Date(utc + (3600000 * offset));
            return nd;
        }

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
        jQuery(document).ready(function($) {
            calculate_time_zone(true);
            validate();
            setInterval(validate, 30000);
            $('#fb_link').click(linkHandler);
        });
    </script>

    <!--Facebook Chat Widget - Made by Supple Solutions - https://supple.com.au/tools/facebook-messenger-website-chat-widget/ -->





</body>

</html>
