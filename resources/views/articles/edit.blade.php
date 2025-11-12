@extends('layouts.master')

@section('title')
    Editer un article{{ $article->title }}

@endsection

@section('content')
     <form action="{{url('article/'.  $article->id  . '/edit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('partials.article-form')

        <button type="submit">Editer</button>
        
    </form>
    @include('partials.delete')
   
@endsection