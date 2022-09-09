<?php

namespace app\Http\Controllers\Admin;

use app\Http\Services\ImageService;
use app\Models\Post;
use app\Models\Slider;

class SliderController
{

    public function index()
    {
        $model = new Slider();
        $result = $model->all();


        return view('Admin.slider.index', compact('result'));
    }

    public function create()
    {
        $model = new Post();
        $posts = $model->all();
        return view('Admin.slider.create', compact('posts'));
    }

    public function store()
    {
        $model = new Slider();
        $imageName = 'Slider-' . rand(0, 9999);
        if (isset($_FILES['image_slider']) && !empty($_FILES['image_slider'])) {
            $image = ImageService::Save($_FILES['image_slider'], 'image/Slider/', $imageName, '1024', '600');
            $_POST['image_slider'] = $image;
        } else {
            array_slice($_FILES, 0);
        }
        $model->insert();

        redirect('/dashboard/slider');
    }

    public function delete($id)
    {
        $model = new Slider();
        $result = $model->delete($id);

        back();
    }
}