<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ActivityCategory;
use App\Http\Requests\ActivityRequest;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    public function activity(){
        $activities = Activity::all();

        return view('dashboard.activity.activity', compact('activities'));
    }

    public function activityDetail($id){
        $activity = Activity::findOrFail($id);

        return view('dashboard.activity.activityDetail', compact('activity'));
    }

    public function activityForm(){
        $categories = Category::all();

        return view('dashboard.activity.activityForm', compact('categories'));
    }

    public function activityPost(ActivityRequest $request) {

        $activityImg = time() . '.' . $request->image->extension();
        $admin = auth()->user();
        $activity = Activity::create([
            'name' => $request->get('name'),
            'content' => $request->get('content'),
            'position' => $request->get('position'),
            'moment' => $request->get('moment'),
            'price' => $request->get('price'),
            'nbpeople' => $request->get('nbpeople'),
            'time' => $request->get('time'),
            'image' => $request->file('image')->storeAs('activityImg', $activityImg, 'public'),
            'admin_id' => $admin->id,
        ]);

        foreach ($request->all() as $key => $value) {
            if(Str::startsWith($key, 'category')){
                $categoryId = (int) substr($key, 9);
                $category = Category::find($categoryId);
                if($category){
                    ActivityCategory::create([
                        'activity_id' => $activity->id,
                        'category_id' => $category->id,
                    ]);
                }
            }
        }
        
        return redirect()->route('activity');
    }

    public function activityPut(int $id, ActivityRequest $request) {
        $activity = Activity::findOrFail($id);
        
        $activity->name = $request->get('name');
        $activity->content = $request->get('content');
        $activity->position = $request->get('position');
        $activity->moment = $request->get('moment');
        $activity->price = $request->get('price');
        $activity->nbpeople = $request->get('nbpeople');
        $activity->time = $request->get('time');
        $activity->image = $request->get('image');
        $activity->save();
        
        return redirect()->route('activity');
    }

    public function activityDelete(int $id, Request $request) {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activity');
    }
}
