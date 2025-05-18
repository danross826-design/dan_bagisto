<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = “users”;


    public function store(Request $request)
    {
        $user = new User();
        $user->password = $request->password;
        $user->email = $request->email;
        if($user->save()){
            return true;
        }
    }


}
