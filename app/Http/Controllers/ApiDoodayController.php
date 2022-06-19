<?php

namespace App\Http\Controllers;

use App\Models\Dooday;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Models\DoodayActivity;
use Illuminate\Http\JsonResponse;

class ApiDoodayController extends Controller
{
    public function doodaypost(Request $request) {

        $dooday = Dooday::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
        ]);

        foreach ($request->activity as $key => $value) {
            $activityId = (int) $value;
            $activity = Activity::find($activityId);
            if($activity){
                DoodayActivity::create([
                    'dooday_id' => $dooday->id,
                    'activity_id' => $activity->id,
                ]);
            }
        }
    }
    public function doodaylist(Request $request) {
        $data = [];

        $doodays = Dooday::where("user_id", "=", $request->user_id)->get();
    
        foreach ( $doodays as $dooday ) {
            $data[] = [
                'id' => $dooday->id,
                'name' => $dooday->name,
                'user_id' => $dooday->user_id,
                'activity' => $dooday->activities,
                ];
        }

        return response()->json($data);
    }
}
