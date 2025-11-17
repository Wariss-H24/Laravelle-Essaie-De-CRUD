<article style="border: 1px solid ; margin: 5px;">
    <h3>{{ $article['title'] }}</h3>
    <p>Auteur:{{ $article['user']['name'] }}</p>
    <a href="/article-detail/{{ $article['id'] }}">Lire l'article</a>
</article>