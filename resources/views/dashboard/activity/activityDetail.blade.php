@extends('layouts.app')

@section('content')
        <div class="activitydetail">
                <div class="activitydetail-img" style="background-image: url({{ Storage::url($activity->image) }})">
                        <a href="{{route('activity')}}">retour</a>
                </div>
                <div class="activitydetail-form">
                        <form class="form-activity" method="POST" action="{{route('activityPut', $activity->id)}}">
                                @method('PUT')
                                @csrf
                                <textarea name="name">{{ $activity->name }}</textarea>
                                <textarea class="formactivity-content" name="content">{{ $activity->content }}</textarea>
                                <textarea name="position">{{ $activity->position }}</textarea>
                                <textarea name="moment">{{ $activity->moment }}</textarea>
                                <textarea name="price">{{ $activity->price }}</textarea>
                                <textarea name="nbpeople">{{ $activity->nbpeople }}</textarea>
                                <textarea name="time">{{ $activity->time }}</textarea>
                                <input name="image" value={{ $activity->image }}></input>
                                <button class="btnmodif" type="submit">modifier</button>
                        </form>
                </div>

                <form method="POST" onclick="return confirm('Êtes vous sur de vouloir supprimer ?')" action="{{route('activityDelete', $activity->id)}}">
                        @method('DELETE')
                        @csrf
                        <button class="btnsupp" type="submit">supprimer</button>
                </form>
        </div>
@endsection