<?php

namespace App\Models;
use App\Models\Article;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gategory extends Model
{
    use HasFactory;


    public function relatedArticles()
    {
        return $this->hasMany(Article::class);
    }
}
