@extends('layout.main')

@section('title','Halaman Students')

@section('container')
<div class="container">
    <h1>Student</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$student->nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$student->npm}}</h6>
            <p class="card-text">{{$student->jurusan}}</p>

            <button type="submit" class="btn btn-success">edit</button>
            <button type="submit" class="btn btn-danger">hapus</button>
            <a href="/students" class="card-link">Kembali</a>
        </div>
    </div>

</div>
@endsection
