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
    @foreach($articles as $article)
    <section class="article-preview">
        <h2><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h2>
        <p>{{ $article->summary }}...</p>
        <div class="article-info">
            <span class="date"><a href="/article/{{ $article->id }}">{{ $article->created_at }}</a></span>
            <span class="comments"><a href="/article/{{ $article->id }}#disqus_thread" data-disqus-identifier>0 COMMENTS</a></span>
            @foreach($article->tags as $tag)
                @if(!empty($tag->name))
                <span class="tag"><a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a></span>
                @endif
            @endforeach
        </div>
    </section>
    @endforeach
    {{-- If none exist show error? --}}
    </div>
    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'jamiedev'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
</div>
@stop
