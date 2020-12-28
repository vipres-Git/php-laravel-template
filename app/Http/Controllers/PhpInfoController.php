<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpInfoController extends Controller
{
    //getInfo
    public function getPhpInfo() {
        echo csrf_token();
        phpinfo();
    }
}
