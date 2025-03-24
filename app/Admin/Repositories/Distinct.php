<?php

namespace App\Admin\Repositories;

use App\Models\Distinct as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Distinct extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
