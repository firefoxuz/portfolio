<?php

namespace Domain\Portfolio\Models;

use Domain\Portfolio\Enums\TypeEnum;
use Illuminate\Database\Eloquent\Model;
class Portfolio extends Model
{
    protected $casts = [
        'type' => TypeEnum::class
    ];
    protected $fillable = [
        'type',
        'project_name',
        'description',
        'site',
        'date',
        'priority',
    ];

    public function technologies()
    {
        return $this->hasMany(PortfolioTechnology::class);
    }

    public function photos()
    {
        return $this->hasMany(PortfolioPhoto::class);
    }
}
