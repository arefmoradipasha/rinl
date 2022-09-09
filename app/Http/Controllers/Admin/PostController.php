<?php

namespace app\Http\Controllers\Admin;

use app\Http\Services\ImageService;
use app\Models\Category;
use app\Models\Photo;
use app\Models\Post;
use app\Models\User;


class PostController
{

    public function index()
    {
        $model = new Post();
        $result = $model->LeftJoin('posts','categories','category_id' ,'id','id');
        return view('Admin.posts.index', compact('result'));
    }

    public function create()
    {
        $model = new Category();
        $categories = $model->all();
        return view('Admin.posts.create', compact('categories',));
    }


    public function store()
    {
        $model = new Post();
        $imageName = 'PostAvatar-' . rand(0, 9999);
        $_POST['auther_id'] = '2';
        if (isset($_FILES['avatar']) && !empty($_FILES['avatar'])){
            $image = ImageService::Save($_FILES['avatar'], 'image/posts/', $imageName, '300', '300');
            $_POST['avatar'] = $image;
        } else {
            array_slice($_FILES,'avatar');
        }

        $MainName = 'PostMainImage-' . rand(0, 9999);
        if (isset($_FILES['mainImage']) && !empty($_FILES['mainImage'])){
            $imageMain = ImageService::Save($_FILES['mainImage'], 'image/posts/', $MainName, '1200', '680');
            $_POST['mainImage'] = $imageMain;
        } else {
            array_slice($_FILES,'mainImage');
        }

        $model->insert();

        redirect('/dashboard/post');
    }

    public function show(int $id)
    {
        $model = new Post();
        $result = $model->find("$id");
        $UserModel = new User();
        $UserResult = $UserModel->find($result->auther_id);
        return view('Admin.posts.show',compact('result','UserResult'));
    }

    public function edit($id)
    {
        $model = new Post();
        $result = $model->find($id);
        $catModel = new Category();
        $categories = $catModel->all();

        return view('Admin.posts.edit',compact('result','categories'));
    }

    public function update($id)
    {
        $model = new Post();
        $model->update($id);
        return redirect('/dashboard/post');
    }

    public function delete($id)
    {
        $model = new Post();
        $model->delete($id);
        return back();
    }

}