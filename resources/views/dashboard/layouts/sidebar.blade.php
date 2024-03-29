<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          User
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/posts')? 'active': '' }}" aria-current="page" href="/posts">
              <span data-feather="eye"></span>
              Lihat Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard')? 'active': '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*')? 'active': '' }}" aria-current="page" href="/dashboard/posts">
              <span data-feather="file-text"></span>
              Posts
            </a>
          </li>
        </ul>
        @can('admin')

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          Administrator
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*')? 'active': '' }}" aria-current="page" href="/dashboard/categories">
              <span data-feather="grid"></span>
              Categories
            </a>
          </li>
        </ul>
        @endcan
        
        
      </div>
    </nav>
    
  </div>
</div>
 