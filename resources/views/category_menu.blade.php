
	<link rel="stylesheet" href="{{url('mega/css/reset.css')}}"> 
	<link rel="stylesheet" href="{{url('mega/css/style.css')}}"> 
	<script src="{{url('mega/js/modernizr.js')}}"></script> 
  	


		<div class="cd-dropdown-wrapper" style="margin-top: 0px;">
			<!-- <a class="cd-dropdown-trigger dropdown-is-active" href="#0">Category Name</a> -->
			  <div>
             		<h3 class="cd-dropdown-trigger dropdown-is-active">Product Category Name</h3>
             	
  				</div>
			<nav class="cd-dropdown dropdown-is-active">
				<!-- <h2>Title</h2> -->
				<!-- <a href="#0" class="cd-close">Close</a> -->
				<ul class="cd-dropdown-content">
				    @foreach($cat_view = App\productCategoryModel::orderBy('id','ASC')->get() AS $category)
					<li class="has-children">
						<a href="{{route('Home.show',$category->id)}}">{{str_limit($category->title,25)}}</a>

						<ul class="cd-secondary-dropdown is-hidden">
							<li class="go-back"><a href="#0">Menu</a></li>
							<!-- <li class="see-all"><a href="http://codyhouse.co/?p=748">All Clothing</a></li> -->
							<li class="has-children">
								<!-- <a href="http://codyhouse.co/?p=748">Accessories</a> -->

								<ul class="is-hidden">
	 @foreach($selectSub = App\subcategoryModel::where('category_id','=',$category->id)->orderBy('position','ASC')->limit(20)->get() AS $subShow)
									<li class="go-back"><a href="#0">Clothing</a></li>
									<li><a href="{{route('ThirdCategory.thirdCategoryVeiew',$subShow->id)}}">{{str_limit($subShow->subcategory_name,30)}}</a></li>
	 @endforeach
									<!-- <li><a href="http://codyhouse.co/?p=748">Gloves</a></li>
									<li><a href="http://codyhouse.co/?p=748">Jewellery</a></li>
									<li><a href="http://codyhouse.co/?p=748">Scarves</a></li> -->
								</ul>
							</li>

						
						</ul>
					</li> 
					   @endforeach

					
				</ul> 
			</nav> 
		</div> 

	
<script src="{{url('mega/js/jquery-2.1.1.js')}}"></script>
<script src="{{url('mega/js/jquery.menu-aim.js')}}"></script>
<script src="{{url('mega/js/main.js')}}"></script> 
