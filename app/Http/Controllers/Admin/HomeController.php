<?php

namespace app\Http\Controllers\Admin;

use app\Models\Home;

class HomeController
{

    public function index()
    {

        return view('Admin.index');
    }

    public function show()
    {

        return view('Admin.posts.show');
    }

}