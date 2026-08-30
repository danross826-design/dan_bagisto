<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = “articles”;


    /**
     * Get the tag attached to this article.
     */
    public function tag()
    {
        return $this->hasMany(Tag::class);
    }

}
