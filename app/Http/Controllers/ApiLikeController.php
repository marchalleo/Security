<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Activity;
use Illuminate\Http\Request;

class ApiLikeController extends Controller
{
    public function likepost(Request $request) {
        $likeCheck = Like::query()->where("user_id", "=", $request->user_id)->where("activity_id", "=", $request->activity_id)->first();

        if($likeCheck === null){
            $like = Like::create([
                'user_id' => $request->user_id,
                'activity_id' => $request->activity_id,
            ]);
        }
        else {
            return response('Déja ajouté', 401);
        }
    }
    public function likelist(Request $request) {
        $data = [];

        $likes = Like::where("user_id", "=", $request->user_id)->get();
    
        foreach ( $likes as $like ) {
            $data[] = [
                // 'id' => $like->user_id,
                'activity' => $like->activity,
                ];
        }

        return response()->json($data);
    }
}
