@extends('layouts.header')
@section('main-contain')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-title">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding">
            <h3 class="text-left">Product List</h3>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 features-area">
        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-xs-offset-1 padding" style="min-height: 680px; margin-top: 5px;">
       
             <button class="btn btn-primary hidden-print pull-right" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
	    @foreach($cat_view = App\productCategoryModel::orderBy('id','ASC')->paginate(103) AS $category)
                    <h2 class="text-center text-primary">{{$category->title}}</h2>
                <table class="table table-responsive table-bordered">
                            <tr>
                            <th>SL</th>

                            <th style="width:50%">Product name</th>
                            <th>Image</th>

                            <!-- <th>Description</th> -->

                            </tr>

                            <?php $i=1; ?>
                            @foreach($selectSub = App\ProductModel::where('category','=',$category->id)->orderBy('id','ASC')->paginate(1000) AS $listValue)
                            <tr>
                            <td>{{$i++}}</td>

                            <td style="width: 50%">{{$listValue->product_name}}</td>
                            <td><img src="{{url('photo/'.$listValue->image)}}" style="height: 60px;width: 50px;"></td>

                            <!-- <td ><div style="height: 100px;width: 300px; overflow: hidden;"> {!!str_limit($listValue->description,50)!!}</div></td> -->

                            </tr>

                            @endforeach
                   
                </table>
              @endforeach
               {{$cat_view->links()}}
        

        </div>
    </div>

</div>
@endsection

