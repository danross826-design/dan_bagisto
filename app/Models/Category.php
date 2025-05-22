<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = categories;


    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        if($category->save()){
            return true;
        }
    }


}
