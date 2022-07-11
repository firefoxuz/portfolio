<?php

namespace Domain\Portfolio\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioPhoto extends Model
{
    protected $fillable = [
        'portfolio_id',
        'path',
    ];
}
