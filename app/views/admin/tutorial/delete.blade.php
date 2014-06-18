@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    @include('layout.admin.nav')
    <section class="article-editor">
        <h2>Are you sure?</h2>
        <div class="site-message alert">
            <span class="fa fa-times close-button"></span>
            <p>Please be aware, this will be deleted permanently.</p>
        </div>
        <form action="{{ url('/admin/tutorial/delete/'.$article->id.'/confirm') }}" method="get">
        <input type="submit" value="Yes, I'm sure">
        </form>
    </section>
</div>
@stop
