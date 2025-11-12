@extends ('layouts.master')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Se connecter</button>
    </form>
@endsection