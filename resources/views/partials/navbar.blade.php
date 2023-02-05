
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">  
      <a class="navbar-brand" href="/">Global Media</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'home')? 'active': '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'posts')? 'active': '' }}" href="/posts">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'categories')? 'active': '' }}" href="/categories">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'about')? 'active': '' }}" href="/about" tabindex="-1" aria-disabled="true">About</a>
          </li>
        </ul>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i></button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'login')? 'active': '' }}" href="/login" tabindex="-1" aria-disabled="true"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        </ul>
        @endauth
      </div>
    </div>
</nav>
