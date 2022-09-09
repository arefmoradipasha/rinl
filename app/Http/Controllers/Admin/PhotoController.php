<?php
namespace app\Http\Controllers\Admin;

use app\Http\Services\ImageService;
use app\Models\Photo;
use app\Models\Post;

class PhotoController {

    public function show($id)
    {
        $post = new Post();
        $result = $post->find($id);
        $photo = new Photo();
        $photoResult = $photo->LeftJoin('photo','posts','post_id','id','id');
        return view('Admin.posts.photo', compact('result','photoResult'));
        
    }

    public function store($id)
    {
        $model = new Photo();
        $imageName = 'Photo-Post-' . rand(0, 9999);
        $_POST['post_id'] = $id;
        if (isset($_FILES['img']) && !empty($_FILES['img'])){
            $image = ImageService::Save($_FILES['img'], 'image/posts-photo/', $imageName, '900', '450');
            $_POST['img'] = $image;
        } else {
            array_slice($_FILES,0);
        }

        $model->insert();
        back();

    }

    public function delete($id)
    {
        $photo = new Photo();
        $result = $photo->delete($id);
        back();

    }
}