<?php
namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = jobs;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'pay',
    ];

    /**
     * Get the user that owns the Post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
