<?php

namespace App\Repository;
use App\Models\article;

class ArticleRepository implements ArticleInterface
{
    public function index(){
        $articles =  article::all();
        return $articles;
    }
}
