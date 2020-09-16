<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender',
        'name',
        'surname',
        'mail',
        'phone',
        'residence',
        'expertise',
        'education',
        'experience',
        'function',
        'reason',
        'location',
        'remark'
    ];

}
