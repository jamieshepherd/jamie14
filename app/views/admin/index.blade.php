@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section>
        <div class="subsection left-aligned">
            <h2>Quick navigation.</h2>
            <ul class="quicknav">
                <li>View blogs
                <li>Create blog
                <li>--
                <li>View tutorials
                <li>Create tutorails
                <li>--
                <li>View projects
                <li>Create projects
            </ul>
        </div>
        <div class="subsection left-aligned">
            <h2>Some more information</h2>
            <p>For now we can just leave this area blank. Could perhaps later embed widgets, statistics etc. here.</p>
        </div>
    </section>
</div>
@stop
