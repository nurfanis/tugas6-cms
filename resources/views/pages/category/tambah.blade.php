@extends('layouts.master')

@section('content')
<div class="container">
  <h2 class="alert alert-primary text-center mt-3">Form Data Kategori</h2>

  <form method="post" action="{{url('/category')}}">
    @csrf
    <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori...">
    </div>
    <button type="submit" class="btn btn-primary">SIMPAN</button>
  </form>
</div>

@endsection