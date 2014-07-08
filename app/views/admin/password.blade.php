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
            <h2>Change your password</h2>
            <form action="{{ url('/admin/password') }}" method="post">
                <label for="password_old">Old password</label>
                <input name="password_old" type="password" class="no-margin btm {{ $errors->first('password_old', 'error') }}">
                <hr>
                <label for="password">New password</label>
                <input name="password" type="password" {{ $errors->first('password_old', 'class="error"') }}>
                <label for="password_confirmation">Confirm password</label>
                <input name="password_confirmation" type="password" {{ $errors->first('password_old', 'class="error"') }}>
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
</div>
@stop
