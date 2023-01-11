@extends('layouts.admin')
@section('content')
<h1>Projects</h1>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<a class="btn btn-primary position-fixed bottom-0 end-0 m-5" href="{{route('admin.projects.create')}}" role="button"><i class="fas fa-plus fa-lg "></i></a>
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($projects as $project)
                <tr class="table-primary">
                    <td>{{$project->title}}</td>
                    <td>{{$project->slug}}</td>
                    <td>{{$project->description}}</td>
                    <td>
                       <a href="{{route('admin.projects.show', $project->id)}}" class="btn bg-primary"><i class="fas fa-eye fa-md text-light"></i></a> 
                       <a href="{{route('admin.projects.edit', $project->id)}}" class="btn bg-secondary"><i class="fas fa-pencil fa-md text-light"></i></a> 
                       <a href="{{route('admin.projects.show', $project->id)}}" class="btn bg-danger"><i class="fas fa-trash fa-md text-light"></i></a> 
                    </td>
                </tr>
                @endforeach
            
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>

@endsection