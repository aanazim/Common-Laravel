<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{

	/*public function __construct(){
		return $this->middleware('auth');
	}*/

    public function dashboard (){

     toastr::success('You have entered successfully', 'success');
    	return view ('admin.dashboard');
    }
}
