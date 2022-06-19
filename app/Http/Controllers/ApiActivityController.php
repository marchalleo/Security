<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ApiActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $activities = Activity::all();
    
        foreach ( $activities as $activity ) {
            $data[] = [
                    'id' => $activity->id,
                    'name' => $activity->name,
                    'content' => $activity->content,
                    'position' => $activity->position,
                    'moment' => $activity->moment,
                    'price' => $activity->price,
                    'nbpeople' => $activity->nbpeople,
                    'time' => $activity->time,
                    'image' => asset('/storage/'.$activity->image),
                    'category' => $activity->categories,
                    ];
        }

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
            $data = [
                'id' => $activity->id,
                'name' => $activity->name,
                'content' => $activity->content,
                'position' => $activity->position,
                'moment' => $activity->moment,
                'price' => $activity->price,
                'nbpeople' => $activity->nbpeople,
                'time' => $activity->time,
                'image' => asset('storage/'.$activity->image),
            ];

        return response()->json($data);
        // return $activity;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
