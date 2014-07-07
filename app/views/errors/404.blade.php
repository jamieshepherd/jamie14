@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section class="article">
        <h2>Sorry, I couldn't find that page! (404)</h2>
        <p style="text-align:center"><a href="/contact">Send me a message</a> and I'll try to fix it as soon as possible, or <a href="http://github.com/jamieshepherd/jamieshepherd">fix it yourself</a> on Github!</p>
    </section>
    </div>
</div>
@stop
