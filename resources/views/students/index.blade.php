@extends('layout.main')

@section('title','Halaman Students')

@section('container')
<div class="container">
    <h1>Students</h1>

    <a href="students/create" class="btn btn-primary">tambah data</a>


    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
    @endif

    <br><br>
    <ul class="list-group">
        @foreach($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$student->nama}}
            <a href="/students/{{$student->id}}" class="badge badge-info">detail</a>
        </li>
        @endforeach
    </ul>


</div>
@endsection
