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
        <h1>Connecting mIRC to a BNC</h1>
        <p>Here is a blog post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. <a href="#">Ut enim ad minim</a> veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu <a href="#">fugiat nulla</a> pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Here is a blog post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Also <code>here is an example of code</code> Ut enim ad minim veniam,
        quis nostrud exercitation ullamco <a href="#">laboris nisi</a> ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in <a href="#">culpa qui</a> officia deserunt mollit anim id est laborum.</p>
        <pre class="code"><code>public void firstMethod {
    Console.println("Here is a line to print");
}

public void anotherOne {
    doSomething();
    Console.println("Do another thing");
    if (flowers == 12 && 2 != 1) {
        // Send this
        doSomething();
    }
}</code></pre>
        <p>Here is a blog post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. <a href="#">Excepteur sint occaecat</a> cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <blockquote>&ldquo;Jamie Shepherd was one of the greatest designers of his generation, to be very honest. Jamie Shepherd was one of the greatest designers of his generation, to be very honest.&rdquo;<cite><a href="#">Albert Einstein</a></cite></blockquote>
        <p>Another interesting fact raised by this person was studied in 2010 when a dog came to eat the mouse.
        <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&rdquo;<cite><a href="http://loremipsum.com">Lorem Ipsum</a></cite></blockquote>
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
