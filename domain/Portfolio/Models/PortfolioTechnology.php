<?php

namespace Domain\Portfolio\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioTechnology extends Model
{
    protected $fillable = [
        'portfolio_id',
        'name',
    ];
}
