<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activity;
use App\Models\Actuality;
use Illuminate\Http\Request;
use App\Http\Requests\ActualityRequest;

class DashboardController extends Controller
{
    public function dashboard(){
        $activitiesCount = Activity::count();
        $lastActivities = Activity::orderBy('created_at','desc')->limit(2)->get();

        $actualitiesCount = Actuality::count();
        $lastActualities = Actuality::orderBy('created_at','desc')->limit(2)->get();

        $userCount = User::count();
        $lastUsers = User::orderBy('created_at','desc')->limit(3)->get();

        return view('dashboard.dashboard', compact('activitiesCount','lastActivities', 'actualitiesCount','lastActualities', 'userCount', 'lastUsers'));
    }
}
