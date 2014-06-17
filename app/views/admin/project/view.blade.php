@extends('layout.base')
@section('body')

<div id="viewport">
    @include('layout.header')
    <div id="main">
    @include('layout.admin.nav')
    <section class="article-editor">
        <h2>View projects</h2>
        <table>
            <thead>
                <td>Public</td><td>Title</td><td>Actions</td><td>Date</td>
            </thead>
            @foreach($projects as $project)
            <tr>
                <td><i class="fa fa-check-square @if($project->visible==0) disabled @endif"></i></td>
                <td class="large">{{ $project->title }}</td>
                <td>
                    <a href="/project/{{ $project->id }}" title="View"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;
                    <a href="/admin/project/edit/{{ $project->id }}" title="Edit"><i class="fa fa-pencil-square-o"></i></a>&nbsp;&nbsp;
                    <a href="#" title="Delete"><i class="fa fa-trash-o"></i></a>
                </td>
                <td>{{ $project->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </section>
</div>
@stop
