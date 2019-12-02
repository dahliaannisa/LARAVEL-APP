@extends('layout/main');

@section('title', 'Detail Mahasiswa');

@section('container');
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Detail Mahasiswa</h2>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
                    <p class="card-text">{{$student->nrp}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <a href="/students/edit/{{$student->id}}" class="btn btn-success">Edit</a>
                    <a href="/students/destroy/{{$student->id}}" class="btn btn-danger">Delete</a>
                    <a href="/students" class="card-link">Kembali</a>
                </div>
</div>
        </div>
    </div>
</div>

@endsection