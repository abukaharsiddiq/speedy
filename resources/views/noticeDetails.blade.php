@extends('layouts.header')
@section('main-contain')
<div class="col-md-12 padding">
    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-title">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding">
            <h3>About US</h3>
        </div>
    </div> -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-area">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding" style="min-height: 680px; text-align: justify;">
           
            <img src="{{url('img/noticeboardbanner.png')}}" class="img-responsive" style="height: 300px; width: 100%;margin-top: 10px;">
            <br>
           
        <div>
            <h3>{{$details->title}}</h3>
            <p>{{$details->description}}
            </p>
         </div>
          
        </div>
    </div>

</div>
@endsection