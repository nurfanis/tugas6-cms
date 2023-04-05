<nav class="navbar navbar-expand-lg navbar-primery bg-warning" id="main nav">
  <div class="container">
    <a class="navbar-brand" href="#">FanShoop</a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('category')}}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('produk')}}">Produk</a>
        </li>

        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">logout</a>
        </li>
        @endauth

        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        @endguest

      </ul>
    </div>
  </div>
</nav>