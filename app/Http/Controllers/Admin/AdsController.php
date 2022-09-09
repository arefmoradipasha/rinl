<?php

namespace app\Http\Controllers\Admin;

use app\Http\Services\ImageService;
use app\Models\Ads;

class AdsController {

    public function index()
    {
        $ads = new Ads();
        $result = $ads->all();
        return view('Admin.ads.index',compact('result'));
    }

    public function delete($id)
    {
        $ads = new Ads();
        $result = $ads->updateColumn($id, 'image','/image/ads/default.png');
        $result = $ads->updateColumn($id, 'href','');
        back();
    }

    public function edit($id)
    {
        $ads = new Ads();
        $result = $ads->find($id);
        return view('Admin.ads.edit',compact('result'));
    }

    public function update($id)
    {
        $ads = new Ads();
        $imageName = 'AdsImage-' . rand(0, 9999);
        if (isset($_FILES['image']) && !empty($_FILES['image'])){
            $image = ImageService::Save($_FILES['image'], 'image/ads/', $imageName, '420', '240');
            $_POST['image'] = $image;
        } else {
            array_slice($_FILES,'image');
        }
        $result = $ads->update($id);
        redirect('/dashboard/ads');
    }


}