<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function count()
    {
        return $this->all()->count();
    }

    public function getLatestNewsItems($number)
    {
        return $this->orderBy('created_at')->take($number)->get();
    }

    public function getNewsItem($id)
    {
        return $this->where('id', $id)->first();
    }

}
