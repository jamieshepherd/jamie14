@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section class="article-editor">
        <h2>View blog posts</h2>
        <table>
            <thead>
                <td>Public</td><td>Title</td><td>Actions</td><td>Date</td>
            </thead>
            @foreach($articles as $article)
            <tr>
                <td><i class="fa fa-check-square @if($article->visible==0) disabled @endif"></i></td>
                <td class="large">{{ $article->title }}</td>
                <td>
                    <a href="/article/{{ $article->id }}" title="View"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;
                    <a href="/admin/blog/edit/{{ $article->id }}" title="Edit"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
                    <a href="/admin/blog/delete/{{ $article->id }}" title="Delete"><i class="fa fa-trash-o"></i></a>
                </td>
                <td>{{ $article->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </section>
</div>
@stop
