@extends('layouts.master')

@section('content')
<div class="container">
  <h2 class="alert alert-warning text-center mt-3">Form Data Produk</h2>

  <form enctype="multipart/form-data" method="post" action="{{route('produk.store')}}">
    @csrf
  <div class="">
        <label for="exampleInputEmail1" class="form-label">category</label>
        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                        name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
      </div>
    <!-- <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" name="" class="form-control" placeholder="Nama Kategori...">
    </div> -->
    <div class="form-group">
      <label>Nama Produk</label>
      <input type="text" name="name" class="form-control" placeholder="Nama Produk...">
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input type="number" name="price" class="form-control" placeholder="Harga Barang...">
    </div>
    <div class="form-group">
      <label>Deskripsi</label>
      <input type="text" name="description" class="form-control" placeholder="Deskripsi Barang...">
    </div>
    <button type="submit" class="btn btn-warning">SIMPAN</button>
  </form>
</div>

@endsection