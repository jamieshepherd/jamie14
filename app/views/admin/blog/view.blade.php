@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    @include('layout.admin.nav')
    <section>
        <h2>View Blogs</h2>
        <table>
            <thead>
                <td>Project</td><td>Actions</td><td>Date</td>
            </thead>
            <tr><td>Example project</td><td>View - Edit - Delete</td><td>14-Apr-2014</td>
        </table>
    </section>
</div>
@stop
