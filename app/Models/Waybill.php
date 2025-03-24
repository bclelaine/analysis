<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Waybill extends Model
{
    use HasDateTimeFormatter;

    protected $table = 'waybill';

    public function trade(): BelongsTo
    {
        return $this->belongsTo(Trade::class, 'trade_id', 'id');
    }

    public function logistic(): BelongsTo
    {
        return $this->belongsTo(Logistic::class, 'logistics_id', 'id');
    }
}
