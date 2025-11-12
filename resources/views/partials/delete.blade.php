 <form action="/article/{{ $article->id }}/delete" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Effacer l'article">
    </form>