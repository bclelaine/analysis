<?php

namespace App\Admin\Repositories;

use App\Models\Province as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Province extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
