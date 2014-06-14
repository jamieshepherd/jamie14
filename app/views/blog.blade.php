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
        <div class="extra">Displaying {{ $articles->count() }} articles</div>
    </div>
    @foreach($articles as $article)
    <section class="article-preview">
        <h2><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h2>
        <p>{{ $article->summary }}...</p>
        <div class="article-info">
            <span class="date"><a href="/article/{{ $article->id }}">{{ date('d F Y', strtotime($article->created_at)) }}</a></span>
            <span class="comments"><a href="/article/{{ $article->id }}#disqus_thread">0 COMMENTS</a></span>
            @foreach($article->tags as $tag)
                @if(!empty($tag->name))
                <span class="tag"><a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a></span>
                @endif
            @endforeach
        </div>
    </section>
    @endforeach
    <section>
    {{ $articles->links() }}
    </section>
    @if(count($articles)==0)
    Sorry no articles
    @endif
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
