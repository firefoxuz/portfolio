<?php

namespace Domain\Experience\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_name',
        'description',
        'from',
        'to'
    ];
}
