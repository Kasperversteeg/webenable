<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content'];

    public function count()
    {
        return $this->all()->count();
    }

    public function getPageWithTitle($title)
    {
        return $this->where('title', $title)->first();
    }

}
