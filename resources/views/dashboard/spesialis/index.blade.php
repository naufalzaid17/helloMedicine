@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Spesialis</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('spesialis.create')}}" class="btn btn-primary">Create Spesialis</a>
    </div>
</div>


<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Spesialis</th>
                <th scope="col ">
                    <div class="d-flex justify-content-end mr-3">
                        Action
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($spesialis as $data)
                <tr>
                    <td>{{ $data->spesialis}}</td>

                    <td>

                        <div class="btn-group d-grid gap-2 d-md-flex justify-content-md-end" role="group" aria-label="Basic example">

                            <form action="/dashAdmin/spesialis/edit/{{ $data->id }}" method="get">
                                @csrf
                                <button class="btn btn-warning">Edit</button>
                            </form>

                            <form action="/dashAdmin/spesialis/delete/{{ $data->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this Edukasi?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <p>data kosong</p>
            @endforelse
        </tbody>
    </table>
</div>


@endsection
