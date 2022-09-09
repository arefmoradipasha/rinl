<?php

namespace app\Http\Controllers\Admin;

use app\Models\User;

class UsersController
{

    public function index()
    {
        $model = new User();
        $result = $model->all();
        return view('Admin.users.index', compact('result'));
    }

    public function show($id)
    {
        $model = new User();
        $result = $model->find($id);
        return view('Admin.users.show', compact('result'));
    }

    public function status($id)
    {
        $model = new User();
        $result = $model->find($id);
        if ($result->status == 1)
            $model->updateColumn($id, 'status', '0');
         elseif ($result->status == 0)
            $model->updateColumn($id, 'status', '1');

        return redirect('/dashboard/user');
    }

    public function message($id)
    {
        $model = new User();
        $result = $model->find("$id");
        return view('Admin.users.message',compact('result'));
    }

    public function delete($id)
    {
        $model = new User();
        $result = $model->delete($id);
        return back();
    }

}