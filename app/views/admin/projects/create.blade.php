@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    @include('layout.admin.nav')
    <section class="article-editor">
        <h2>Add a project</h2>
        <form action="{{ url('/admin/projects/create') }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="type" value="tutorial">
        <label for="title">Project title</label>
        <input name="title" type="text" placeholder="Title">
        <label for="released">Release date</label>
        <input name="released" type="text" placeholder="01 January 2014">
        <label for="tech">Technologies used</label>
        <input name="tech" type="text" placeholder="PHP, Laravel 4, HTML5, CSS3">
        <label for="url">Project URL</label>
        <input name="url" type="text" placeholder="http://github.com/jamieshepherd/jamieshepherd">
        <label for="text"><i class="fa fa-maxcdn"></i> Description</label>
        <textarea name="text" placeholder="Project description"></textarea>
        <label for="images">Project images</label>
        <fieldset name="images">
            <input name="image1" type="file">
            <input name="image2" type="file">
            <input name="image3" type="file">
            <input name="image4" type="file">
        </fieldset>
        <input name="public" type="checkbox"><label for="public">Publicly visible?</label>
        <input type="submit" value="Submit">
        </form>
    </section>
</div>

    <script>
    $function(){
        $('.datepicker').datepicker()
    }
    </script>
@stop
