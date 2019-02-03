<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function jsonResponse($success, $action, $message,$code_trans,$data,$code){

		return response()->json([
            "success" => $success,
            "action" => $action,
            "message" => $message,
            "code" => $code_trans,
            "data" => $data
        ], $code);
    }
}
