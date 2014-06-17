@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section>
        <h1>Hi there, I'm a <strong>designer and developer</strong> from <strong>Plymouth</strong>.</h1>
        <img src="/img/bio-jamie.png" width="104" height="104" class="avatar">
        <p>My name is <a href="http://about.me/jamieshepherd">Jamie Shepherd</a>. I’m a 24 year old <a href="http://www1.plymouth.ac.uk/courses/undergraduate/3429/Pages/CourseDetail.aspx">Computer Science</a> student at Plymouth University. I’m passionate about design, technology, and open source software. In my spare time, I can usually be found working on <a href="/projects">a few projects</a> from web sites to software applications. I'm also available for part-time and contract work in web design and development. If you like, you can follow me on <a href="http://twitter.com/jamiesheep">Twitter</a>, <a href="http://www.github.com/jamieshepherd">GitHub</a>, and <a href="http://uk.linkedin.com/in/jamieshepherd">LinkedIn</a>.</p>
    </section>
    <section>
        <div class="subsection">
            <h2><strong>&#60;</strong> Designer <strong>&#47;&#62;</strong></h2>
            <p>I develop user friendly, yet aesthetically pleasing solutions to design problems, and build them with <a href="https://developer.mozilla.org/en/docs/web/Guide/HTML/HTML5">HTML5</a> &amp; <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3">CSS3</a>. I design responsive layouts with a heavy focus on user experience (UX).</p>
        </div>
        <div class="subsection">
            <h2><strong>&#123;</strong> Developer <strong>&#125;</strong></h2>
            <p>I utilise server-side languages such as <a href="http://php.net">PHP</a> and popular frameworks such as <a href="http://laravel.com">Laravel</a> to develop enterprise level products for small and large scale projects.</p>
        </div>
    </section>
    </div>
</div>
@stop
