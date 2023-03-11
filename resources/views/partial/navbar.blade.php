<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="/about">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/pasien/all">Pasien</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-light" href="/dokter/all">Dokter</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link disabled text-light">Disabled</a>
          </li>
        </ul>

        <ul class="nav-pills navbar-nav">
            @auth
                <li class="nav-warning dropdown">
                    <a class="text-light nav-link dropdown-toggle bg-warning" href="#" role="button"
                        data-bs-toggle="dropdown">
                        Hi, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="/admin/all"><i
                                    class="bi bi-layout-text-sidebar-reverse">Dashboard</i></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/session/logout" method="get">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="bi bi-box-arrow-right">Logout</i></button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/session/login/all" class="text-light nav-link bg-warning bi bi-box-arrow-right">Login</a>
                </li>
            @endauth
        </ul>

      </div>
    </div>
  </nav>