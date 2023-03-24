@extends('layouts.master')

@section('content')
  <div class="container my-3">
    <a href="{{url('category/create')}}">
      <button class="primary btn-primary">Tambah Kategori</button>
    </a>
    <div class="row my-3">

      <div class="col-md-3">
        <div class="card">
          <img src="https://assets.pikiran-rakyat.com/crop/0x212:1080x1064/x/photo/2021/05/03/4025100891.jpg" alt="gambar kategori" style="width: 200px; margin: 10px auto;">
          <div class="card-body">
            <h5 class="card-title M-1">Gamis</h5>
            <a href="{{url('category/edit')}}">
            <button class="primary btn-primary">Edit</button>
            </a>
            <a href="{{url('category/destroy')}}">
            <button class="primary btn-primary">Hapus</button>
            </a>
          </div>
        </div>
      </div>   
      
      <div class="col-md-3">
        <div class="card">
          <img src="https://assets.pikiran-rakyat.com/crop/0x212:1080x1064/x/photo/2021/05/03/4025100891.jpg" alt="gambar kategori" style="width: 200px; margin: 10px auto;">
          <div class="card-body">
            <h5 class="card-title M-1">Mukenah</h5>
            <a href="{{url('category/edit')}}">
            <button class="primary btn-primary">Edit</button>
            </a>
            <a href="{{url('category/destroy')}}">
            <button class="primary btn-primary">Hapus</button>
            </a>
          </div>
        </div>
      </div>   
      
    </div>
  </div>
  @endsection