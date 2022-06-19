<div class="navbar">
    <div class="navbar-logo">
        <h1>Dooday</h1>
    </div>
    <div class="navbar-menu">
        <a href="{{route('dashboard')}}">Dashboard</a>
        <a href="{{route('activity')}}">Activités</a>
        <a href="{{route('actuality')}}">Actualités</a>
    </div>
    <div class="navbar-logout">
        <a href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
            <form action="{{ route('logout') }}" method="post" id="logoutForm">@csrf</form>
            deconnexion
        </a>
    </div>
</div>