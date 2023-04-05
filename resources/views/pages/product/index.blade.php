@extends('layouts.master')

@section('content')
<div class="container my-3">
  <a href="{{url('produk/create')}}">
    <button class="primary btn-primary">Tambah Produk</button>
  </a>
  <div class="row my-3">
    @foreach ($products as $product)
    <div class="col-md-3">
      <div class="card">
        <img src="https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2022/04/27/tsurayaa-gamis-liana-syarijpeg-20220427115715.jpeg" alt="gambar produk" style="width: 200px; margin: 10px auto;">
        <div class="card-body">
          <p class="card-text M-1">{{ $product->name }}</p>
          <h5 class="card-title M-1">{{ $product->category->name }}</h5>
          <p class="card-text M-1">{{ $product->description }}
            << /p>
              <p class="card-text M-1">Rp.250.000</p>
              <a href="{{url('produk/edit')}}">
                <button class="btn btn-success">Edit</button>
              </a>
              <!-- <a href="{{url('produk/destroy')}}">
                <button class="btn btn-danger">Hapus</button>
              </a> -->
              <form action="produk/{{ $product->id }}" method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('beneran mau hapus?')">Hapus</button>
              </form>
        </div>
      </div>
    </div>
    @endforeach
    <div class="col-md-3">
      <div class="card">
        <img src="https://down-id.img.susercontent.com/file/4f36249ab1622a51c8680bc059a46dfc" alt="gambar produk" style="width: 200px; margin: 10px auto;">
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
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//104/MTA-35187790/no_brand_jilbab_syari_jumbo_xxxl_murah_bahan_jersey_premium_-_jilbab_syari_panjang_pet_jumbo_polos_-_jilbab_bergo_jumbo__hijab_instan_syar-i_super_jumbo_-__full01_dgg3uumx.jpg" alt="gambar produk" style="width: 200px; margin: 10px auto;">
        <div class="card-body">
          <p class="card-text M-1">Jilbab syar'i</p>
          <h5 class="card-title M-1">Produk terbaras</h5>
          <p class="card-text M-1">Dengan kain katun</p>
          <p class="card-text M-1">Rp.50.000</p>
          <a href="{{url('produk/edit')}}">
            <button class="btn btn-success">Edit</button>
          </a>
          <a href="{{url('produk/destroy')}}">
            <button class="btn btn-danger">Hapus</button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img src="https://down-id.img.susercontent.com/file/132b6310522656ca70fa3c5870c57252" style="width: 200px; margin: 10px auto;">
        <div class="card-body">
          <p class="card-text M-1">Baju coupke keluarga</p>
          <h5 class="card-title M-1">cocok untuk lebaran</h5>
          <p class="card-text M-1">Kain halus dan lembut</p>
          <p class="card-text M-1">Rp.500.000</p>
          <a href="{{url('produk/edit')}}">
            <button class="btn btn-success">Edit</button>
          </a>
          <a href="{{url('produk/destroy')}}">
            <button class="btn btn-danger">Hapus</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection