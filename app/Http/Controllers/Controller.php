<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\PopulerProductModel;
use App\cartModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){

    	$populer = PopulerProductModel::orderBy('id','DESC')->paginate(4);
    	view()->share('populer_view',$populer);
// ------------for userId -passing----------
    	 session_start();
    	 $user = session_id();

    	view()->share('UserId',$user);
    	
    }

}
