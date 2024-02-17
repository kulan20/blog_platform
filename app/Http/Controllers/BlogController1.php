<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController1 extends Controller
{
    public function create(Request $request)
    {
        dd($request->input('message'));
    }
}
