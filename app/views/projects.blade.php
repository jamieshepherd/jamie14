@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <div id="crumbtrail">
        <ul>
        <li class="fa fa-home">
        <li>PROJECTS
        </ul>
    </div>
    <section class="projects">
        @foreach($projects as $project)
        <div class="project-preview anm-opacity">
            <a href="/project/{{ $project->id }}">
            <img src="/img/projects/{{ $project->images()->first()->filename }}" width="100%" class="anm">
            <h3 class="anm">{{ $project->title }}</h3>
            </a>
        </div>
        @endforeach
    </section>
    </div>
</div>
@stop
