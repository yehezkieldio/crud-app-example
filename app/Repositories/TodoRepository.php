<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository implements TodoRepositoryInterface
{
    protected $model;

    public function __construct(Todo $todo)
    {
        $this->model = $todo;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->model->find($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function setTodoCompleted($id)
    {
        $record = $this->model->find($id);
        return $record->update(['completed' => true]);
    }
}

interface TodoRepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function setTodoCompleted($id);
}

