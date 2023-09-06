@extends('layouts.header')
@section('main-contain')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-head">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 padding">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 feature-title padding">
                <h3> Help Line </h3>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 feature-page">
                <p> Pages /<font color="red"> Help Line </font></p>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 padding">
            <div class="col-xs-12 support-description padding">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tap-head">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                       <!--  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Customer Support</a></li>
 -->
                    </ul>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 support-connect padding">

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="https://semantic-ui.com/examples/assets/images/wireframe/paragraph.png" style="width: 100%;height: 100px;margin-bottom: 30px;" class="img-responsive">
                                <h4> Customer support </h4>

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tap-image-area padding">
                                    <img src="http://wcdn.maginfrastructure.com/1006/pre-paid-voucher-terms-and-conditions-widget-image.jpg" class="img-responsive img-thumbnail">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tapone">
                                    <img src="https://semantic-ui.com/examples/assets/images/wireframe/paragraph.png" style="width: 100%;height: 100px;margin-bottom: 50px;" class="img-responsive">
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tap-profile">
                                <form id="contactform" method="post" action="">
                                    <fieldset>
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
                                            <input name="subject" placeholder="Subject" id="sub" class="form-control" type="text">
                                        </p>

                                        <p>
                                            <label for="mes">Message*</label>
                                            <textarea rows="6" name="message" class="form-control" id="mes" class="required" placeholder="Write Message Here"></textarea>
                                        </p>
                                        <p>
                                            <input value="Send Message" class="btn btn-success" type="submit">
                                        </p>
                                        <div id="result"></div>
                                    </fieldset>
                                </form>
                            </div>

                        </div>


                    </div>

                </div>
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