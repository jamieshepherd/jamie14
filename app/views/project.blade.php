@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <div id="crumbtrail">
        <ul>
        <li class="fa fa-home">
        <li>Project
        <li>{{ $project->title }}
        </ul>
    </div>
    <section class="project">
        <div class="subsection left-aligned flip desktop-right">
            <h2>{{ $project->title }}</h2>
            <table>
                <tr><td>Project:</td><td>{{ $project->title }}</td></tr>
                <tr><td>Release:</td><td>{{ $project->released }}</td></tr>
                <tr><td>Technologies:</td><td>{{ $project->tech }}</td></tr>
                <tr><td>View:</td><td><a href="{{ $project->url }}">{{ substr($project->url,0,35).'...' }}</a></td></tr>
            </table>
            {{ Parsedown::instance()->text($project->text) }}
        </div>
        <div class="subsection left-aligned flip desktop-left">
        @foreach($project->images as $image)
        <a href="/img/projects/{{ $image->filename }}">
        <img src="/img/projects/{{ $image->filename }}" width="100%" height="100%" class="project-image">
        </a>
        @endforeach
        </div>

    </section>
    </div>
</div>
@stop
