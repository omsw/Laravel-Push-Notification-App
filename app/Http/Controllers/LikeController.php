<?php

namespace App\Http\Controllers;

use App\Model\Reply;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    
    public function likeIt(Reply $reply)
    {
       $reply->like()->create([
          // 'user_id' => auth()->id(),
           'user_id' => '1'

        ]);
        return response("Liked", 200);
    }

    
    public function unLikeIt(Reply $reply)
    {
       // $reply->like()->where('user_id', auth()->id())->first()->delete();

       $reply->like()->where('user_id','1')->first()->delete();

        return response("Unliked", 200);
    }

    
}
