@extends ('layouts.master')
@section('content')
    <h1>Profil de l'utilisateur</h1>
    <p> {{ Auth::user()->email }}</p>
    <p>Bienvenu sur notre site : {{ Auth::user()->name }}</p>
@endsection