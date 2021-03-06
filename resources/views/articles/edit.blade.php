@extends('layouts.app')
@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <h1>Update Article</h1>

        <form method="POST" action="{{ route('articles.update', $article) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="title" placeholder="" value="{{ $article->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <input type="text" class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" id="excerpt"
                    aria-describedby="excerpt" placeholder="" value="{{ $article->excerpt }}">
                @error('excerpt')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body"
                    rows="3">{{ $article->body }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <div class="form-group">
                    <label for="tags"></label>
                    <select class="form-control @error('tags') is-invalid @enderror" name="tags[]" id="tags" multiple>
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}"
                                {{ $article->tags->contains($tag->id) ? 'selected' : '' }}>
                                {{ $tag->name }}</option>
                        @endforeach
                    </select>
                    @error('tags')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
