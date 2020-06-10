@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.css" integrity="sha256-oSsWW/ca1ll8OVu2t4EKkyb9lmH0Pkd8CXKXnYP4QvA=" crossorigin="anonymous" />
@endsection

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<h2 class="heading has-text-weigth-bold is-size-4">Update Article</h2>
        <form method="POST" action="/articles">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                </div>
            </div>
            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                </div>
            </div>
            <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <textarea class="textarea" name="body" id="body">{{ $article->body }}</textarea>
                </div>
            </div>
            <button class="button is-link" type="submit">Submit</button>
        </form>
	</div>
</div>
@endsection
