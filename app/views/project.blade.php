@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <div id="crumbtrail">
        <ul>
        <li class="fa fa-home">
        <li>Project
        <li>Project Name
        {{--<li> $project->title --}}
        </ul>
        <span class="extra extra-date">{{-- date('d F Y', strtotime($project->created_at)) --}}</span>
    </div>
    <section class="project">
        <div class="subsection left-aligned flip desktop-right">
            <h2>Property Panther</h2>
            <table>
                <tr><td>Project:</td><td>Property Panther</td></tr>
                <tr><td>Release:</td><td>14 Apr 2014</td></tr>
                <tr><td>Technologies:</td><td>PHP, Laravel, Java</td></tr>
                <tr><td>View:</td><td><a href="/">External link</a></td></tr>
            </table>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="subsection left-aligned flip desktop-left">
        <img src="/img/thumb2.jpg" width="100%" height="100%"><br><br>
        <img src="/img/thumb3.jpg" width="100%" height="100%">
        </div>

    </section>
    </div>
</div>
@stop
