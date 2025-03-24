<?php

namespace App\Admin\Repositories;

use App\Models\Waybill as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Waybill extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
