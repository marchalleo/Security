@extends('layouts.app')

@section('content')
<div class="actuform">
    <div class="actualityform">
        <a href="{{route('activity')}}">retour</a>
    </div>
    <div class="actualityform-form">
        <h1>Formulaire Activités</h1>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
        @endif

        <form class="form-acti" method="POST" action="{{route('activityPost')}}" enctype="multipart/form-data">
            @csrf
            <input name="name" placeholder="title"/>
            <textarea name="content" placeholder="content"></textarea>
            <input  name="position" placeholder="position"/>
            <input  name="moment" placeholder="moment"/>
            <input  name="price" placeholder="price"/>
            <input  name="nbpeople" placeholder="nbpeople"/>
            <input  name="time" placeholder="time"/>
            <input type="file"  name="image" accept="image/png, image/jpeg"/>
            <div class="form-acti-category">
                @foreach ($categories as $category)
                <div class="form-category">
                    <label>{{ $category->name }}</label>
                    <input type=checkbox name="category_{{$category->id}}"/>
                </div>
                @endforeach
            </div>
            <button class="btnadd" type="submit">envoyer</button>
        </form>
    </div>
@endsection