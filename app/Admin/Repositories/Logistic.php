<?php

namespace App\Admin\Repositories;

use App\Models\Logistic as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Logistic extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
