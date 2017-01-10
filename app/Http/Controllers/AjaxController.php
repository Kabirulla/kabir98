<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index($id){
      $msg = "This is a simple message.";
      $msg=$_GET['ia'];
      return response()->json(array('msg'=> $msg), 200);
   }
}
