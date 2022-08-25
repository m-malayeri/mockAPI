<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function execute($apiName, Request $request)
    {
		$Response = new \stdClass();
        if($apiName=="T1"){
			$Response->ResponseCode = "0";
			$Response->ResponseDescription = "Success1";
		}else{
			$Response->ResponseCode = "100";
			$Response->ResponseDescription = "Success2";
		}
        
        return response()->json($Response);
    }
}
