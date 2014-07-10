@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    <section class="article-editor">
        <h2>View images</h2>
        <table>
            <thead>
                <td>Project ID</td><td>Filename</td><td>Actions</td><td>Date</td>
            </thead>
            @foreach($images as $image)
            <tr>
                <td>{{ $image->project_id }}</td>
                <td class="large">{{ $image->filename }}</td>
                <td>
                    <a href="/img/projects/{{ $image->filename }}" title="View"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;
                    <a href="/admin/media/delete/{{ $image->id }}" title="Delete"><i class="fa fa-trash-o"></i></a>
                </td>
                <td>{{ $image->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </section>
</div>
@stop
