@extends('layouts.app')

@section('content')


        <div class="activitydetail">
                <div class="activitydetail-img" style="background-image: url({{ Storage::url($actuality->image) }})">
                        <a href="{{route('actuality')}}">retour</a>
                </div>
                <div class="activitydetail-form">
                        <form class="form-activity" method="POST" action="{{route('actualityPut', $actuality->id)}}">
                                @method('PUT')
                                @csrf
                                <textarea name="name">{{ $actuality->name }}</textarea>
                                <textarea class="formactivity-content" name="content">{{ $actuality->content }}</textarea>
                                <input name="image" value={{ $actuality->image }}></input>
                                <button class="btnmodif" type="submit">modifier</button>
                        </form>
                </div>

                <form method="POST" onclick="return confirm('Êtes vous sur de vouloir supprimer ?')" action="{{route('actualityDelete', $actuality->id)}}">
                        @method('DELETE')
                        @csrf
                        <button class="btnsupp" type="submit">supprimer</button>
                </form>
        </div>
@endsection