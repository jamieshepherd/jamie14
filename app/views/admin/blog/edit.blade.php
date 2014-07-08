@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section class="article-editor">
        <h2>Edit a blog post</h2>
        <form action="{{ url('/admin/blog/edit/'.$article->id.'') }}" method="post">
        <input name="type" type="hidden" value="blog">
        <label for="id">Article ID</label>
        <input name="id" type="text" disabled="disabled" value="{{ $article->id }}">
        <label for="title">Title</label>
        <input name="title" type="text" placeholder="Title" value="{{ $article->title }}">
        <label for="title"><i class="fa fa-maxcdn"></i> Article content</label>
        <textarea name="text" placeholder="Article content">{{ $article->text }}</textarea>
        <label for="tags">Tags (comma separated)</label>
        <input name="tags" type="text" placeholder="e.g. University, Technology, Development" value="{{ $article->listTags($article->tags) }}">
        <input name="public" type="checkbox" @if($article->visible==1) checked @endif><label for="public">Publicly visible?</label>
        <input type="submit" value="Submit">
        </form>
    </section>
</div>
@stop
