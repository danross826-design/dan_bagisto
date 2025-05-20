<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = “articles”;


    public function store(Request $request)
    {
        $article = new Article();
        $article->name = $request->name;
        $article->category = $request->category;
        if($article->save()){
            return true;
        }
    }


}
