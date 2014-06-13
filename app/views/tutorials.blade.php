@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <div id="crumbtrail">
        <ul>
        <li class="fa fa-home">
        <li>TUTORIALS
        </ul>
        <div class="extra">Showing 4 of 4 results</div>
    </div>
    <section class="article-preview">
        <h2>How to connect mIRC to a BNC</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <div class="article-info"><span class="date">14th March 2014</span><span class="comments">2 comments</span><span class="tag">mIRC</span><span class="tag">Scripting</span></div>
    </section>
    <section class="article-preview">
        <h2>Using routes and filters in Laravel 4.2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <div class="article-info"><span class="date">14th March 2014</span><span class="comments">0 comments</span><span class="tag">PHP</span><span class="tag">Laravel</span><span class="tag">Routes</span><span class="tag">Filters</span></div>
    </section>
    <section class="article-preview">
        <h2>Using VagrantTray to manage vagrant boxes</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <div class="article-info"><span class="date">14th March 2014</span><span class="comments">0 comments</span><span class="tag">Vagrant</span><span class="tag">VagrantTray</span></div>
    </section>
    </div>
</div>
@stop
