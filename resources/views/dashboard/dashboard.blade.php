@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <div class="dashboardgrid">
            <div class="dsbd0">
                <h2>Bonjour {{ auth()->user()->name }} !</h2>
                <p>Bienvenue sur votre espace admin Dooday :)</p>
            </div>
            <div class="dsbd1">
                <div class="dsbd-title">
                    <p>Il y a actuellement sur le site :</p>
                </div>
                <div class="dsbd-info">
                    <div class="dsbd1-info">
                        <h3>{{$userCount}}</h3>
                        <p>utilisateurs</p>
                    </div>
                    <div class="dsbd1-info">
                        <h3>{{$activitiesCount}}</h3>
                        <p>activités</p>
                    </div>
                    <div class="dsbd1-info">
                        <h3>{{$actualitiesCount}}</h3>
                        <p>actualités</p>
                    </div>
                </div>
            </div>
            <div class="dsbd2">
                <div class="dsbd-title">
                    <p>Derniers utilisateurs inscrits :</p>
                </div>
                <div class="dsbd-infoUser">
                    @if ($lastUsers->count() > 0)
                        @foreach($lastUsers as $lastUser)
                            <div class="cardUser">
                                <h2>{{ $lastUser->firstname }} {{ $lastUser->lastname }}</h2>
                            </div>
                        @endforeach
                    @else
                    <span>pas encore d'activité</span>
                    @endif
                </div>
            </div>
            <div class="dsbd3">
                <div class="dsbd3-title">
                    <p>Dernières activités ajoutées :</p>
                </div>
                <div class="dsbd3-info">
                    @if ($lastActivities->count() > 0)
                        @foreach($lastActivities as $lastActivity)
                            <a class="dsbd3-card" href="{{ route('activityDetail', ['id' => $lastActivity->id]) }}">
                                <h2 class="dsbd3-cardh2">{{ $lastActivity->name }}</h2>
                            </a>
                        @endforeach
                    @else
                    <span>pas encore d'activité</span>
                    @endif
                    <div class="btnCard">
                        <a href="{{ route('activity')}}">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="dsbd4">
                <div class="dsbd4-title">
                    <p>Dernières actualités ajoutées :</p>
                </div>
                <div class="dsbd4-info">
                    @if ($lastActualities->count() > 0)
                        @foreach($lastActualities as $lastActuality)
                            <a class="dsbd4-card" href="{{ route('actualityDetail', ['id' => $lastActuality->id]) }}">
                                <h2 class="dsbd4-cardh2">{{ $lastActuality->name }}</h2>
                            </a>
                        @endforeach
                    @else
                    <span>pas encore d'activité</span>
                    @endif
                    <div class="btnCard2">
                        <a href="{{ route('actuality')}}">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <h1>Dashboard {{ auth()->user()->name }}</h1>

    <div>
        <p>Nombre activité</p>
        <p>{{$activitiesCount}}</p>
    </div>
    <div>
        <p>Dernieres activités</p>
        @if ($lastActivities->count() > 0)
            @foreach($lastActivities as $lastActivity)
                <div style="background-color: grey; margin: 1rem;">
                    <h2><a href="{{ route('activityDetail', ['id' => $lastActivity->id]) }}">{{ $lastActivity->name }}</a></h2>
                </div>
            @endforeach
        @else
        <span>pas encore d'activité</span>
        @endif
    </div>
<br/>
<br/>
    <div>
        <p>Nombre actualité</p>
        <p>{{$actualitiesCount}}</p>
    </div>
    <div>
        <p>Dernieres actualités</p>
        @if ($lastActualities->count() > 0)
            @foreach($lastActualities as $lastActuality)
                <div style="background-color: grey; margin: 1rem;">
                    <h2><a href="{{ route('actualityDetail', ['id' => $lastActuality->id]) }}">{{ $lastActuality->name }}</a></h2>
                </div>
            @endforeach
        @else
        <span>pas encore d'actualité</span>
        @endif
    </div>
<br/>
<br/>
    <div>
        <p>Nombre user</p>
        <p>{{$userCount}}</p>
    </div> --}}
@endsection