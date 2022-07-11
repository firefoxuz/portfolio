<?php

namespace Domain\Education\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
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
