<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repository\ArticleInterface;

class ArticleController extends Controller
{
    private $ArticleRepository;

    public function __construct(ArticleInterface $Article)
    {
        $this->ArticleRepository = $Article;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = $this->ArticleRepository->index();
        return view("admin.article.index",compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $users = User::all();
        $categories = category::all();

        return view("admin.article.create",compact("users","categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $cover = $request->file("cover");
        $covername = $cover->getClientOriginalName();
        $cover->move("uploads",$covername);
        Article::create([
            "title"=>$request->title,
            "content"=>$request->content,
            "cover"=> $covername,
            "short_description"=> $request->short_description,
            "user_id"=>$request->user_id,
            "category_id"=>$request->category_id
        ]);
        return redirect("admin/article");
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id): RedirectResponse
    {
        $article =  article::find($id);
        $article->delete();
        return redirect('admin/article');
    }
}