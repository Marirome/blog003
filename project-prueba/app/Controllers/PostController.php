<?php

namespace App\Controllers;
use App\Models\Post;
use CodeIgniter\Controller;

class PostController extends BaseController
{
    public function index()
    {
        $model = new Post();
        $data['posts'] = $model->findAll();
        return view('posts/index', $data);
    }

    public function show($id)
    {
        $model = new Post();
        $data['post'] = $model->find($id);
        return view('posts/show', $data);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store()
    {
        $post = new Post();

        $imageFile = $this->request->getFile('image');
        $imageName = null;

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move('uploads/', $imageName);
        }

        $post->save([
            'title'      => $this->request->getPost('title'),
            'excerpt'    => $this->request->getPost('excerpt'),
            'content'    => $this->request->getPost('content'),
            'category'   => $this->request->getPost('category'),
            'image'      => $imageName,
            'created_at' => $this->request->getPost('created_at'),
        ]);

    return redirect()->to('/posts');
    }
    public function edit($id)
    {
        $model = new \App\Models\Post();
        $data['post'] = $model->find($id);
        return view('posts/edit', $data);
    }

    public function update($id)
    {
        $post = new Post();
        $data = $this->request->getPost();
        $imageFile = $this->request->getFile('image');

    if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
        $imageName = $imageFile->getRandomName();
        $imageFile->move('uploads/', $imageName);
        $data['image'] = $imageName;
        }

        $post->update($id, $data);
        return redirect()->to('/posts');
        }

    public function delete($id)
    {
        $model = new \App\Models\Post();
        $model->delete($id);
        return redirect()->to('/posts');
    }

}

