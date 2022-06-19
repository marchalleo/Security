<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach($errors->all() as $error)
    {{ $error }}
    @endforeach
    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <input placeholder="nom d'utilisateur" type="text" name="name">
        <input placeholder="mot de passe" type="password" name="password">
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>