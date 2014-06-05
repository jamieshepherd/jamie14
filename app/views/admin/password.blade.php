@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    @include('layout.admin.nav')
    <section>
        <div class="subsection left-aligned">
            <img src="/img/padlock.svg" class="padlock">
        </div>
        <div class="subsection left-aligned">
            <h2>Change your password</h2>
            <form>
                <label for="pass">Old password</label>
                <input name="pass" type="password" class="no-margin btm">
                <hr>
                <label for="pass">New password</label>
                <input name="pass" type="password">
                <label for="passconfirm">Confirm password</label>
                <input name="passconfirm" type="password">
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
</div>
@stop
