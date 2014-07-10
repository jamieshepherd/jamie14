@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section>
        <div class="subsection left-aligned">
            <h2>Available for work.</h2>
            <p>I'm available for part time and contract work in both web design and development. For examples of my work, why not check out my <a href="/projects">projects</a> page or my <a href="http://github.com/jamieshepherd">Github</a> portfolio. <a href="mailto:email@jamie.sh">Send me an email</a> or use the contact form to enquire about my rates.</p><hr>
            <h2>Get in contact.</h2>
            <p>You can send an email to <a href="mailto:email@jamie.sh">email@jamie.sh</a> or use the form to the right. You can also contact me across various social networks such as <a href="http://twitter.com/jamiesheep">Twitter</a>, <a href="http://github.com/jamieshepherd">Github</a>, <a href="http://uk.linkedin.com/in/jamieshepherd">LinkedIn</a>, and <a href="https://plus.google.com/+JamieShepherd1">Google+</a>.</p>
        </div>
        <div class="subsection left-aligned">
            <h2>Leave a message.</h2>
            <form action="{{ url('/contact') }}" method="post">
            <label for="name">Full name</label>
            <input name="name" type="text" placeholder="Full name">
            <label for="email">Email address</label>
            <input name="email" type="email" placeholder="Email address">
            <label for="text">Your message</label>
            <textarea name="text" placeholder="Your message"></textarea>
            <input type="submit" value="Send message">
            </form>
        </div>
    </section>
</div>
@stop
