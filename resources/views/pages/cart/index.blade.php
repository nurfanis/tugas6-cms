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
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Gamis xxxx</td>
                    <td>250.000</td>
                    <td>
                        <input type="number">
                    </td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <p>Total : <span>0</span></p>
    </div>
@endsection