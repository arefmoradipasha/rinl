<?php

namespace app\Http\Controllers\Admin;

use app\Models\Category;

class CategoryController
{

    public function index()
    {
        $model = new Category();
        $result = $model->all();
        return view('Admin.categories.index', compact('result'));
    }

    public function show()
    {

    }

    public function edit($id)
    {
        $model = new Category();
        $result = $model->find($id);
        return view('Admin.categories.edit', compact('result'));
    }

    public function create()
    {
        return view('Admin.categories.create');
    }

    public function store()
    {
        $model = new Category();
        $model->insert();
        return redirect('/dashboard/category');
    }

    public function update($id)
    {
        $model = new Category();
        $model->update($id);
        return redirect('/dashboard/category');
    }

    public function delete($id)
    {
        $model = new Category();
        $model->delete($id);
        return back();
    }
}