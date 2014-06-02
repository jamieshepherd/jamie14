@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <div id="crumbtrail">
        <ul>
        <li class="fa fa-home">
        <li>BLOG
        </ul>
        <form class="extra"><input type="text" placeholder="SEARCH ARTICLES BY TAG">&nbsp;<i class="fa fa-search"></i></form>
    </div>
    <section class="article-preview">
        <h2><a href="/article">University life</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <div class="article-info"><a href="#"><span class="date">14th March 2014</span></a><a href="#"><span class="comments">3 comments</span></a><span class="tag">University</span><span class="tag">Plymouth</span><span class="tag">Computer Science</span></div>
    </section>
    <section class="article-preview">
        <h2><a href="/article">6 months in, 2014 in review</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <div class="article-info"><a href="#"><span class="date">14th March 2014</span></a><a href="#"><span class="comments">7 comments</span></a><span class="tag">Technology</span><span class="tag">Life</span><span class="tag">General</span></div>
    </section>
    <section class="article-preview">
        <h2><a href="/article">The change of technology</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <div class="article-info"><a href="#"><span class="date">14th March 2014</span></a><a href="#"><span class="comments">0 comments</span></a><span class="tag">Technology</span><span class="tag">Forethought</span><span class="tag">Crystal Ball</span></div>
    </section>
    <section class="article-preview">
        <h2><a href="/article">Welcome to the website</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
        <div class="article-info"><a href="#"><span class="date">14th March 2014</span></a><a href="#"><span class="comments">0 comments</span></a><span class="tag">Design</span></div>
    </section>
    </div>
</div>
@stop
