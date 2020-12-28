<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data = [])
    {
        return response()->json([
            'status' => 'success',
            'code' => 0,
            'message' => 'ok',
            'data' => $data,
        ]);
    }

    public function fail($code, $data = [])
    {
        return response()->json([
            'status' => 'fail',
            'code' => $code,
            'message' => 'not ok',
            'data' => $data,
        ]);
    }
}
