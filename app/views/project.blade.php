@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <div id="crumbtrail">
        <ul>
        <li class="fa fa-home">
        <li>PROJECTS
        <li>Project Name
        {{--<li> $project->title --}}
        </ul>
        <span class="extra extra-date">{{-- date('d F Y', strtotime($project->created_at)) --}}</span>
    </div>
    <section class="projects">
        <div class="project-preview anm-opacity">
            <a href="#">
            <img src="/img/thumb1.jpg" width="100%" class="anm">
            <h3 class="anm">jamieshepherd.me</h3>
            </a>
        </div>
        <div class="project-preview anm-opacity">
            <a href="#">
            <img src="/img/thumb2.jpg" width="100%" class="anm">
            <h3 class="anm">Property Panther</h3>
            </a>
        </div>
        <div class="project-preview anm-opacity">
            <a href="#">
            <img src="/img/thumb3.jpg" width="100%" class="anm">
            <h3 class="anm">C-THRU Window Cleaning</h3>
            </a>
        </div>
        <div class="project-preview anm-opacity">
            <a href="#">
            <img src="/img/thumb4.jpg" width="100%" class="anm">
            <h3 class="anm">jamie (v1)</h3>
            </a>
        </div>
    </section>
    </div>
</div>
@stop
