<?php

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

class BaseRepository
{

    protected $model;

    /**
     * BaseRepository constructor.
     * @param $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

}