@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section class="article-editor">
        <h2>Edit a project</h2>
        <form action="{{ url('/admin/project/edit/'.$project->id.'') }}" method="post">
        <label for="id">Project ID</label>
        <input name="id" type="text" disabled="disabled" value="{{ $project->id }}">
        <label for="title">Project title</label>
        <input name="title" type="text" placeholder="Title" value="{{ $project->title }}">
        <label for="released">Release date</label>
        <input name="released" type="text" placeholder="01 January 2014" value="{{ $project->released }}">
        <label for="tech">Technologies used</label>
        <input name="tech" type="text" placeholder="PHP, Laravel 4, HTML5, CSS3" value="{{ $project->tech }}">
        <label for="url">Project URL</label>
        <input name="url" type="text" placeholder="http://github.com/jamieshepherd/jamieshepherd" value="{{ $project->url }}">
        <label for="text"><i class="fa fa-maxcdn"></i> Description</label>
        <textarea name="text" placeholder="Project description">{{ $project->text }}</textarea>
        <!--
        <label for="images">Project images (800x490)</label>
        <fieldset name="images">
            <input name="image1" type="file">
            <input name="image2" type="file">
            <input name="image3" type="file">
            <input name="image4" type="file">
        </fieldset>
        -->
        <input name="public" type="checkbox" @if($project->visible==1) checked @endif><label for="public">Publicly visible?</label>
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
