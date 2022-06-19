<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use Illuminate\Http\Request;

class ApiActualityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        $actualities = Actuality::all();
    
        foreach ( $actualities as $actuality ) {
            $data[] = [
                    'id' => $actuality->id,
                    'name' => $actuality->name,
                    'content' => $actuality->content,
                    'image' => asset('/storage/'.$actuality->image),
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
     * @param  \App\Models\Actuality  $actuality
     * @return \Illuminate\Http\Response
     */
    public function show(Actuality $actuality)
    {
        $data = [
            'id' => $actuality->id,
            'name' => $actuality->name,
            'content' => $actuality->content,
            'image' => asset('/storage/'.$actuality->image),
        ];

    return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actuality  $actuality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actuality $actuality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actuality  $actuality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actuality $actuality)
    {
        //
    }
}
