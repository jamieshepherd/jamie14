@extends('layout.base')
@section('lib')
    <script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>
@stop

@section('css')
    {{ HTML::style('css/highlight.css') }}
@stop
@section('body')

<script>hljs.initHighlightingOnLoad();</script>
<div id="viewport">
    @include('layout.header')
    <div id="main">
    <div id="crumbtrail">
        <ul>
        <li class="fa fa-home">
        <li>Tutorial
        <li>Connecting mIRC to a BNC
        </ul>
        <span class="extra extra-date">14th March 2014</span>
    </div>
    <article>
        <span class="date">14th March 2014</span>
        <h1>{{ $article->title }}</h1>
        {{ $parsedown->text($article->text) }}

        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'jamiedev'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
    </article>
    </div>
</div>
@stop
