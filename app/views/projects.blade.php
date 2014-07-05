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
            <a href="/project/{{ $project->id }}/{{ Str::slug($project->title) }}">
            <img src="/img/projects/{{ $project->images()->first()->filename }}" width="100%" class="anm">
            <h3 class="anm">{{ $project->title }}</h3>
            </a>
        </div>
        @endforeach
        @if(count($projects)==0)
        <p><strong>Sorry, there weren't any projects found.</strong></p>
        <p><a href="/contact">Let me know</a> if you think this is an error and I'll fix it as soon as possible.</p>
        @endif
    </section>
    </div>
</div>
@stop
