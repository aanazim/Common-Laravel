<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Intervention\Image\Facades\Image;

class LayoutController extends Controller
{
   public function frontend(){
 	
   	return view ('welcome');
   }
}
