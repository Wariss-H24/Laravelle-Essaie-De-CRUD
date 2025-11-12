<div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title',  isset($article->title) ? $article->title : null) }}">
    @error('title')
    <div>{{ $message }}</div>
    @enderror
</div>
<div>
    <label for="body">Body</label>
    <textarea name="body" id="body" cols="30" rows="10">{{ old('body',  isset($article->body) ? $article->body : null) }}</textarea>
    @error('body')
    <div>{{ $message }}</div>
    @enderror
</div>
<div>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    @error('image')
    <div>{{ $message }}</div>
    @enderror
</div>
