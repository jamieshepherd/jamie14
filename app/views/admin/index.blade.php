@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section class="admin-nav">
        <ul class="quicknav">
            <li class="brdr"><span class="fa fa-quote-left"></span><strong>Blog</strong>
            <li class="brdr"><a href="admin/blog/view">View</a>
            <li class="brdr"><a href="admin/blog/create">Create</a>
            <li><a href="admin/blog/edit">Edit</a>
            <li class="sect brdr"><span class="fa fa-graduation-cap"></span><strong>Tutorials</strong>
            <li class="brdr"><a href="admin/tutorials/view">View</a>
            <li class="brdr"><a href="admin/tutorials/create">Create</a>
            <li><a href="admin/tutorials/edit">Edit</a>
            <li class="sect brdr"><span class="fa fa-rocket"></span><strong>Projects</strong>
            <li class="brdr"><a href="admin/projects/view">View</a>
            <li class="brdr"><a href="admin/projects/create">Create</a>
            <li><a href="admin/projects/edit">Edit</a>
        </ul>
    </section>
    <section>
        <div class="subsection left-aligned">
            <h2>Something here.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="subsection left-aligned">
            <h2>Some more information</h2>
            <p>For now we can just leave this area blank. Could perhaps later embed widgets, statistics etc. here.</p>
        </div>
    </section>
</div>
@stop
