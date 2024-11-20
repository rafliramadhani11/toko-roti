<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bread extends Model
{
    /** @use HasFactory<\Database\Factories\BreadFactory> */
    use HasFactory;
    protected $fillable = ['name'];

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class)->orderBy('created_at', 'desc');
    }
}
