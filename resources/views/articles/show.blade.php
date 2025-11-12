<article>
    <h1>{{ $article['title'] }}</h1>
    <p>Auteur:{{ $article['user']['name'] }}</p>
    <p>{{ $article['body'] }}</p>
    <a href="/articles">Retour aux articles</a>
    <a href="/article/{{ $article->id }}/edit">Editer l'article</a>
    @if ($article->comments->count() > 0)
    @foreach($article->comments as $comment)
    <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
    <p>{{ $comment->comment }}</p>
    <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @include('partials.delete')
@endforeach
    @else
    <p>Aucun commentaire</p>
     @include('partials.delete')
    @endif
    
</article>
 