@extends('layouts.app')

<div class="create-wrapper">

    @section('content')
        <form action="{{ route('admin.post.store') }}" method="POST">
            @csrf
        
        <div class="form-group">
            <label for="title">Titolo del post</label>
            <input type="text" class="form-control"
            placeholder="Inserisci un titolo per il nuovo Post" id="title" name="title" value="{{ old('title', $post->title) }}">
        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
                <select name="category_id" id="category_id">
                    <option value="{{null}}">Senza categoria</option>

                        @foreach ($categories as $category)
                    <option @if (old('category_id') == $category->id) selected @endif
                        value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

        <div class="form-group">
            <label for="image_url">Immagine del post</label>
            <input type="text" class="form-control"
            placeholder="Inserisci l'immagine per il nuovo Post" id="image_url" name="image_url" value="{{ old('image_url', $post->image_url) }}">
        </div>

        <div class="form-group">
            <label for="author">Autore del post</label>
            <input type="text" class="form-control"
            placeholder="Inserisci un autore per il nuovo Post" id="author" name="author" value="{{ old('author', $post->author) }}">
        </div>

        <div class="form-group">
            <label for="post_content">Titolo del post</label>
            <input type="text" class="form-control"
            placeholder="Inserisci un contenuto per il nuovo Post" id="post_content" name="post_content" value="{{ old('post_content', $post->post_content) }}">
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
        <button type="reset" class="btn btn-secondary">Cancella i dati</button>

        </form>
    @endsection
</div>