@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section>
        <div class="subsection left-aligned">
            <img src="/img/padlock.svg" class="padlock">
        </div>
        <div class="subsection left-aligned">
            <h2>Please sign in.</h2>
            {{ $errors->first('email') }}
            {{ $errors->first('password') }}
            <form action="{{ url('/login') }}" method="post">
            <label for="email">Email address</label>
            <input name="email" type="text" placeholder="Email address">
            <label for="password">Password</label>
            <input name="password" type="password" placeholder="Password">
            <input name="remember" type="checkbox"><label for="remember">Remember me?</label>
            <input type="submit" value="Login">
            </form>
        </div>
    </section>
</div>
@stop
