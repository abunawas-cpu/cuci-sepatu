<header class="navbar navbar-expand-md d-print-none">
  <div class="container-xl">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
          aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="{{ route('dashboard') }}">Triangle</a>
      </h1>
      <div class="navbar-nav flex-row order-md-last">
          @auth
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                      aria-label="Open user menu">
                      <span class="avatar avatar-sm"
                          style="background-image: url(./static/avatars/000m.jpg)"></span>
                      <div class="d-none d-xl-block ps-2">
                          <div>{{ auth()->user()->name }}</div>
                          <div class="mt-1 small text-secondary">
                              {{ auth()->user()->role == 'admin' ? 'Administrator' : 'Customer' }}
                          </div>
                      </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                      <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
                      @if(auth()->user()->role == 'admin')
                          <a href="{{ route('admin.settings') }}" class="dropdown-item">Admin Settings</a>
                      @endif
                      <div class="dropdown-divider"></div>
                      <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0">
                          @csrf
                          <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                  </div>
              </div>
          @endauth
          @guest
              <a href="{{ route('login') }}" class="nav-link">Login</a>
              <a href="{{ route('register') }}" class="nav-link">Register</a>
          @endguest
      </div>
  </div>
</header>

<header class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="navbar">
          <div class="container-xl">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                          <span class="nav-link-title">Home</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                          <span class="nav-link-title">About Us</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">
                          <span class="nav-link-title">Services</span>
                      </a>
                  </li>
                  @auth
                      @if(auth()->user()->role == 'admin')
                          <li class="nav-item">
                              <a class="nav-link {{ request()->routeIs('admin.orders') ? 'active' : '' }}" href="{{ route('admin.orders') }}">
                                  <span class="nav-link-title">Manage Orders</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}" href="{{ route('admin.users') }}">
                                  <span class="nav-link-title">Manage Users</span>
                              </a>
                          </li>
                      @else
                          <li class="nav-item">
                              <a class="nav-link {{ request()->routeIs('customer.orders') ? 'active' : '' }}" href="{{ route('customer.orders') }}">
                                  <span class="nav-link-title">My Orders</span>
                              </a>
                          </li>
                      @endif
                  @endauth
              </ul>
          </div>
      </div>
  </div>
</header>
