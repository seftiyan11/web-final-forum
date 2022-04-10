<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Forum Web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
          <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
          @endauth
          
          @guest
          <a href="#" class="d-block">Belum Login</a>
          @endguest
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/pertanyaan/create" class="nav-link">
              <button class="btn btn-primary btn-block">Tanya</button>
            </a>
          </li>
          @auth

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pertanyaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pertanyaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/jawaban" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jawaban</p>
                </a>
              </li>
            </ul>
              
          <li class="nav-item">
            <a href="/profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                PROFILE
              </p>
            </a>
          </li>
          @endauth
          <li class="nav-item">
            <a href="/kategori" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                KATEGORI
              </p>
            </a>
          </li>

          <br>

          @auth
              
          <li class="nav-item bg-danger">
            
            <div><a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                  </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </li>

          @endauth
          

          @guest
          <li class="nav-item bg-primary">
            <a href="/login" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Login
              </p>
            </a>
          </li>
          @endguest

          <!-- <li class="nav-item">
            <a href="/pertanyaan" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                LIST PERTANYAAN
              </p>
            </a>
          </li> -->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>