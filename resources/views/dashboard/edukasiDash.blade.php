@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Edukasi</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="/dashAdmin/edukasiDash/create" class="btn btn-primary">Create Edukasi</a>
    </div>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">photo</th>
                <th scope="col">exert</th>
                <th scope="col">body</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($data->isNotEmpty())
            @foreach($data as $dt)
            <tr>
                <td>{{ $dt->id }}</td>
                <td>{{ $dt->title }}</td>
                <td>{{ $dt->photo }}</td>
                <td>{{ $dt->exert }}</td>
                <td>{{ $dt->body }}</td>
                <td>

                    <div class="btn-group" role="group" aria-label="Basic example">

                        <form action="/dashAdmin/edukasiDash/edit/{{ $dt->id }}" method="get">
                            @csrf
                            <button class="btn btn-warning">Edit</button>
                        </form>

                        <form action="/dashAdmin/edukasiDash/delete/{{ $dt->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure to delete this Edukasi?')">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td>null</td>
                <td>null</td>
                <td>null</td>
                <td>null</td>
                <td>null</td>
                <td>null</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection
