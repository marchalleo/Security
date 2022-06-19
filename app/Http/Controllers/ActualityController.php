<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use Illuminate\Http\Request;
use App\Http\Requests\ActualityRequest;

class ActualityController extends Controller
{
    public function actuality(){
        $actualities = Actuality::all();

        return view('dashboard.actuality.actuality', compact('actualities'));
    }

    public function actualityDetail($id){
        $actuality = Actuality::findOrFail($id);

        return view('dashboard.actuality.actualityDetail', compact('actuality'));
    }

    public function actualityForm(){
        return view('dashboard.actuality.actualityForm');
    }

    public function actualityPost(ActualityRequest $request) {

        $actualityImg = time() . '.' . $request->image->extension();
        $admin = auth()->user();

        Actuality::create([
            'name' => $request->get('name'),
            'content' => $request->get('content'),
            'image' => $request->file('image')->storeAs('actualityImg', $actualityImg, 'public'),
            'admin_id' => $admin->id,
        ]);

        return redirect()->route('actuality');
    }

    public function actualityPut(int $id, ActualityRequest $request) {
        $actuality = Actuality::findOrFail($id);
        
        $actuality->name = $request->get('name');
        $actuality->content = $request->get('content');
        $actuality->image = $request->get('image');
        $actuality->save();
        
        return redirect()->route('actuality');
    }

    public function actualityDelete(int $id, Request $request) {
        $actuality = Actuality::findOrFail($id);
        $actuality->delete();

        return redirect()->route('actuality');
    }
}
