@extends('layouts.master')

@section('content')
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Catalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-3">
  <a href="{{url('produk/create')}}">
    <button class="primary btn-primary">Tambah Produk</button>
  </a>
    <div class="row my-3">
      <div class="col-md-3">
        <div class="card">
          <img
            src="https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2022/04/27/tsurayaa-gamis-liana-syarijpeg-20220427115715.jpeg"
            alt="gambar produk" style="width: 200px; margin: 10px auto;">
          <div class="card-body">
            <p class="card-text M-1">Gamis</p>
            <h5 class="card-title M-1">Gamis Modern</h5>
            <p class="card-text M-1">Dengan kain sutra</p>
            <p class="card-text M-1">Rp.250.000</p>
            <a href="{{url('produk/edit')}}">
            <button class="btn btn-success">Edit</button>
            </a>
            <a href="{{url('produk/destroy')}}">
            <button class="btn btn-danger">Hapus</button>
            </a>
            <a href="{{url('keranjang')}}">
            <button class="btn btn-info">To Cart</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img
            src="https://down-id.img.susercontent.com/file/4f36249ab1622a51c8680bc059a46dfc"
            alt="gambar produk" style="width: 200px; margin: 10px auto;">
          <div class="card-body">
            <p class="card-text M-1">Mukenah lengkap sajadah</p>
            <h5 class="card-title M-1">Produk berkualits</h5>
            <p class="card-text M-1">Dengan kain sutra</p>
            <p class="card-text M-1">Rp.450.000</p>
            <a href="{{url('produk/edit')}}">
            <button class="btn btn-success">Edit</button>
            </a>
            <a href="{{url('produk/destroy')}}">
            <button class="btn btn-danger">Hapus</button>
            </a>
            <a href="{{url('keranjang')}}">
            <button class="btn btn-info">To Cart</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection