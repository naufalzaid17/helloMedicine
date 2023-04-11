@extends('templates/struct/layouts')

@section('container')
@include('templates/components/noMenuNav')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 d-flex justify-content-center">
            <div class="row">
                <div class="col">
                    <h5 class="fw-bold mt-3">Dashboard</h5>
                </div>
            </div>
        </div>
        <div class="col-md-1 d-flex" style="height: auto;">
            <div class="vr"></div>
        </div>
        <div class="col-md-9">
            <div class="container mt-3">
                <div class="row">
                    <div class="col d-flex justify-content-start">
                        <h5 class="fw-bold">
                            List Artikel
                        </h5>
                    </div>
                    <div class="col d-flex justify-content-end"> 
                        <a href="#" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table table-strip">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Title</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection