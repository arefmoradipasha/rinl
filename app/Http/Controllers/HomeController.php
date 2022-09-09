<?php

namespace app\Http\Controllers;

use app\Models\Ads;
use app\Models\Home;
use app\Models\Photo;
use app\Models\Post;
use app\Models\Slider;


class HomeController
{

    public function index()
    {
        $modelSlider = new Slider();
        $slider = $modelSlider->all();

        $modelAds =  new Ads();
        $ads =  $modelAds->all();

        $modelPost = new Post();
        $posts = $modelPost->LeftJoin('posts','categories','category_id' ,'id','created_at');
       return view('index',compact('slider','ads', 'posts'));
    }

    public function show($id)
    {
        $model = new Post();
        $post = $model->find($id);

        $photos = $model->LeftJoin('photo','posts', 'post_id' ,'id','id');
        return view('post',compact('post','photos'));
    }

    public function post()
    {
        $modelPost = new Post();
        $posts = $modelPost->all();
        return view('Allpost',compact('posts'));
    }

    public function aboutus()
    {
        return view('AboutUs');
    }

}