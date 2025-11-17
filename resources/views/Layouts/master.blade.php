<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>LARAVEL 101</h1>
    <a href="/contact-us">Contact Us</a>
    <a href="/about">About Us</a>
    <a href="/articles">Articles</a>
    @auth
    @can('see-admin-menu')
    <a href="/articles/create">Creer un article</a>
    @endcan
    @endauth
    @guest
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
    @endguest

    @auth
    <a href="{{ route('profile') }}">Votre profil</a>
    <form action="{{ route('logout') }}" method="POST">
    @csrf
        <input type="submit" value="Se déconnecter">
    </form>
    
@endauth

    @include('messages.allMessages')
    @yield('content')
</body>
</html>