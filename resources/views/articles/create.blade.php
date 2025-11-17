@extends('layouts.master')

@section('title')
    Ajouter un article
@endsection

@section('content')
    <h2>Ajouter un article</h2>
    <form action="/articles/create" method="POST" enctype="multipart/form-data">
        @csrf

        @include('partials.article-form')

        <button type="submit">Ajouter</button>
    </form>
@endsection