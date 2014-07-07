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
        <div class="extra">DISPLAYING {{ $articles->count() }} articles</div>
    </div>
    @foreach($articles as $tutorial)
    <section class="article-preview">
        <h2><a href="/article/{{ $tutorial->id }}/{{ Str::slug($tutorial->title) }}">{{ $tutorial->title }}</a></h2>
        <p>{{ $tutorial->summary }}...</p>
        <div class="article-info">
            <span class="date"><a href="/article/{{ $tutorial->id }}">{{ date('d F Y', strtotime($tutorial->created_at)) }}</a></span>
            <span class="comments"><a href="/article/{{ $tutorial->id }}#disqus_thread" data-disqus-identifier="{{ $tutorial->id }}">0 COMMENTS</a></span>
            @foreach($tutorial->tags as $tag)
                @if(!empty($tag->name))
                <span class="tag"><a href="#">{{ $tag->name }}</a></span>
                @endif
            @endforeach
        </div>
    </section>
    @endforeach
    @if(count($articles)==0)
    <section>
    <p><strong>Sorry, there weren't any articles found.</strong></p>
    <p><a href="/contact">Let me know</a> if you think this is an error and I'll fix it as soon as possible.</p>
    </section>
    @endif
    {{ $articles->links() }}
    </div>

    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'jamieshepherd'; // required: replace example with your forum shortname

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
