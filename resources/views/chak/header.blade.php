<head>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  

    <!-- Bootstrap core CSS -->

</head>
<body>
  
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL::to('/')}}">Elect</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#jobpro">Jobs Provided</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#chak">Chak data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Position">Positions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Rsults">Result and lead</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Development
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#olddev">old development</a></li>
                <li><a class="dropdown-item" href="#newdEV">new development</a></li>
                <li><a class="dropdown-item" href="#demand">demand</a></li>
            </ul>
          </li>
        </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <script src="{{ asset('js/app.js') }}"></script>
</body>