@extends('layouts.master')

@section('content')

<body>
  <div class="container my-3">
    <a href="{{url('/category/create')}}" class="btn btn-primary my-3"> Tambah categori</a>
    <!-- {{$Category}} -->
    <div class="row my-3">
      @foreach($Category as $item)
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title M-1">{{$item->name}}</h5>
            <a href="/category/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
            <form action="{{url('category/'.$item->id)}}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</body>
@endsection