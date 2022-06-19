@extends('layouts.app')

@section('content')
<div class="actuform">
    <div class="actualityform">
        <a href="{{route('actuality')}}">retour</a>
    </div>
    <div class="actualityform-form">
        <h1>Formulaire Actualités</h1>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
        @endif
    
        <form class="form-actu" method="POST" action="{{route('actualityPost')}}" enctype="multipart/form-data">
            @csrf
            <input name="name" placeholder="title"/>
            <textarea name="content" placeholder="content"></textarea>
            <input type="file"  name="image" accept="image/png, image/jpeg"/>
            <button class="btnadd" type="submit">envoyer</button>
        </form>
    </div>
</div>
@endsection