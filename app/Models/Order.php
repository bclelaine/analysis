<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasDateTimeFormatter;

    protected $table = 'order';

    public function trade(): BelongsTo
    {
        return $this->belongsTo(Trade::class, 'trade_id', 'id');
    }

    public function good(): BelongsTo
    {
        return $this->belongsTo(Good::class, 'goods_id', 'id');
    }
}
