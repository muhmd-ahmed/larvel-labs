<?php

namespace App\Models;
use App\Models\Article;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Gategory extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;


    public function relatedArticles()
    {
        return $this->hasMany(Article::class);
    }
}
