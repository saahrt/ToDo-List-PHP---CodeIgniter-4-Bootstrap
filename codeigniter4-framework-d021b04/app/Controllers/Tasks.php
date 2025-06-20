<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();
        $filter = $this->request->getGet('filter') ?? 'todas';

        if ($filter == 'pendentes') {
            $tasks = $model->where('is_completed', 0)->orderBy('id', 'DESC')->findAll();
        } elseif ($filter == 'concluidas') {
            $tasks = $model->where('is_completed', 1)->orderBy('id', 'DESC')->findAll();
        } else {
            $tasks = $model->orderBy('id', 'DESC')->findAll();
        }

        return view('tasks/index', [
            'tasks' => $tasks,
            'filter' => $filter
        ]);
    }

    public function create()
    {
        return view('tasks/form');
    }

    public function store()
    {
        $model = new TaskModel();
        $model->save([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);
        return redirect()->to('/tasks');
    }

    public function edit($id)
    {
        $model = new TaskModel();
        $task = $model->find($id);

        return view('tasks/form', ['task' => $task]);
    }

    public function update($id)
    {
        $model = new TaskModel();
        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ]);
        return redirect()->to('/tasks');
    }

    public function delete($id)
    {
        $model = new TaskModel();
        $model->delete($id);
        return redirect()->to('/tasks');
    }

    public function complete($id)
    {
        $model = new TaskModel();
        $model->update($id, ['is_completed' => 1]);
        return redirect()->to('/tasks');
    }
}
