<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    /** @use HasFactory<\Database\Factories\StockFactory> */
    use HasFactory;

    protected $fillable = ['bread_id', 'quantity', 'created_at', 'updated_at', 'time'];

    public function bread(): BelongsTo
    {
        return $this->belongsTo(Bread::class);
    }
}
