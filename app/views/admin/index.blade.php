@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section>
        <div class="subsection left-aligned">
            <h2>You are signed in.</h2>
            <p>I can put some things here. Widgets, links, stats.</p>
        </div>
        <div class="subsection left-aligned">
            <h2>Some more information</h2>
            <p>For now we can just leave this area blank.</p>
        </div>
    </section>
</div>
@stop
