<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index(Request $request)
    {
        dump($request->user()->toArray());
        die;
    }

}