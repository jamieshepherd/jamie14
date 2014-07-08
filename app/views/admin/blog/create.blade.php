@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section class="article-editor">
        <h2>Write a blog post</h2>
        <form action="{{ url('/admin/blog/create') }}" method="post">
        <input type="hidden" name="type" value="blog">
        <label for="title">Title</label>
        <input name="title" type="text" placeholder="Title">
        <label for="title"><i class="fa fa-maxcdn"></i> Article content</label>
        <textarea name="text" placeholder="Article content"></textarea>
        <label for="tags">Tags (comma separated)</label>
        <input name="tags" type="text" placeholder="e.g. University, Technology, Development">
        <input name="public" type="checkbox"><label for="public">Publicly visible?</label>
        <input type="submit" value="Submit">
        </form>
    </section>
</div>
@stop
