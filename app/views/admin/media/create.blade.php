@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section class="article-editor">
        <h2>Add an image</h2>
        <form action="{{ url('/admin/media/create') }}" method="post" enctype="multipart/form-data">
        <label for="project_id">Project ID (can be found in URL)</label>
        <input name="project_id" type="text" placeholder="The project ID">
        <label for="image">Project images (800x490)</label>
        <input name="image" type="file">
        <input type="submit" value="Submit">
        </form>
    </section>
</div>
@stop
