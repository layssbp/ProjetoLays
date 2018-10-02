<!DOCTYPE html>
<html>
<head>
  <title>Produtos</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark {{ $cor }}">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        @foreach($produtos as $a)
          <li class="nav-item">
          <a class="nav-link" href="#">{{ $a }}</a>
        </li>
        @endforeach

        
    
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>