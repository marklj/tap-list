<?php

namespace App\Models;

use Database\Factories\BeerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beer extends Model
{
    use HasFactory;

    /** @return BeerFactory */
    protected static function newFactory()
    {
        return BeerFactory::new();
    }
}
