@extends('layouts.app')

@section('content')
<div class="activity">
    <div class="content-activity">
        @if ($activities->count() > 0)
            @foreach($activities as $activity)
                <a a href="{{ route('activityDetail', ['id' => $activity->id]) }}" class="activity-card" style="background-image: url({{ Storage::url($activity->image) }})">
                    <h2>{{ $activity->name }}</h2>
                </a>
            @endforeach
        @else
        <span>aucun post</span>
        @endif
    </div>
</div>

    <a class="btnPrimary" href="{{ route('activityForm')}}">Ajouter une activité</a>
@endsection