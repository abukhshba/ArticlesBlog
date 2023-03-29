<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\category;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class siteController extends Controller
{
    public function index()
    {
        $articles = article::all();
        return view("site.index",compact("articles"));
    }

    public function blog_details($id)
    {
        $article = article::find($id);
        $comments = comment::all();
        return view("site.details",compact("article","comments"));
    }

    public function category($id)
    {
        $articles = article::where("category_id",$id)->get();
        return view("site.index",compact("articles"));
    }


    public function comment(Request $request)
    {
        comment::create($request->all());
        return response()->json(1);
    }
}
