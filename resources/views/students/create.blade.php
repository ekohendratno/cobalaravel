@extends('layout.main')

@section('title','Halaman Students')

@section('container')
<div class="container">
    <h1>Students</h1>

    @if(session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>
    @endif

    <form method="post" action="/students">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('nama')<div class="invalid-feedback">
                {{$message}}
            </div>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">NPM</label>
            <input type="text" name="npm" class="form-control @error('npm') is-invalid @enderror" id="exampleInputPassword1">
            @error('npm')<div class="invalid-feedback">
                {{$message}}
            </div>@enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
@endsection
