@extends('layouts.app')

@section('content')
<div class="activity">
    <div class="content-activity">
        @if ($actualities->count() > 0)
            @foreach($actualities as $actuality)
                {{-- <div style="background-color: grey; margin: 1rem;">
                    <h2><a href="{{ route('actualityDetail', ['id' => $actuality->id]) }}">{{ $actuality->name }}</a></h2>
                </div> --}}
                <a a href="{{ route('actualityDetail', ['id' => $actuality->id]) }}" class="activity-card" style="background-image: url({{ Storage::url($actuality->image) }})">
                    <h2>{{ $actuality->name }}</h2>
                </a>
            @endforeach
        @else
        <span>aucun post</span>
        @endif
    </div>
</div>
    <a  class="btnPrimary" href="{{ route('actualityForm')}}">Ajouter une actualité</a>
@endsection