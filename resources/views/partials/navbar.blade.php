<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sandy Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ ($active === "Home") ? 'active' : ''  }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($active === "About") ? 'active' : ''  }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($active === "Blog") ? 'active' : '' }}" href="/blog">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ ($active === "Categories") ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Welcome Back, {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/dashboard">My Dashboard</a>
                      <div class="dropdown-divider"></div>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                    </div>
                  </li> 
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right me-1"></i>Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>