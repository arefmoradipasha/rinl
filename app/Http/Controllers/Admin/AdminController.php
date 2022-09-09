<?php

namespace app\Http\Controllers\Admin;


use app\Models\Category;
use app\Models\Post;
use app\Models\User;

class AdminController {

    public function admin()
    {
        $modelPost = new Post();
        $posts = $modelPost->OrderbyCondition('DESC',6);
        $postCount = $modelPost->Count();

        $modelUsers = new User();
        $users = $modelUsers->OrderbyCondition('DESC',6);
        $userCount = $modelUsers->Count();

        $modelCategory = new Category();
        $categoryCount = $modelCategory->Count();

        return view('Admin.index',compact('posts','users','postCount','categoryCount','userCount'));

    }
}