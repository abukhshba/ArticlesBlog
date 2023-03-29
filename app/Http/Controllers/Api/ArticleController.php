<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\article;
use App\Repository\ArticleInterface;

class ArticleController extends Controller
{
    private $ArticleRepository;

    public function __construct(ArticleInterface $x)
    {
        $this->ArticleRepository = $x;
    }
    public function index(){
        $articles = $this->ArticleRepository->index();
        return response()->json($articles);
    }
}
