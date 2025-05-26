<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        return Category::all();
    }



    public function show(string $id)
    {
        $article = Category::findOrFail($id);

        return $article;
    }

    public function store(Request $request)
    {
        $article = Category::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Category $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Category $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }

}