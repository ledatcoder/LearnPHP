<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function __invoke(Request $request)
    {
        return $posts = MyPost::all();
    }
}
