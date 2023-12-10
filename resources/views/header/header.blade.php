  <!-- start header -->
  <header class="header mobile_bg">
      <div class="container">
          <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                  <div class="left-side d-flex">
                      <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/img/leverage-logo.png') }}"
                              class="logo" alt=""></a>
                      <a class="navbar-brand mobile mt-3" href="index.html"> LEVERAGE</a>
                  </div>



                  <div class="left-side d-flex">


                      @guest
                          <a href="{{ route('login') }}" class="navbar-toggler">
                              <i class="bi bi-person login_icon"></i>
                          </a>
                      @else
                          <a class="navbar-toggler" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                               document.getElementById('logout-form2').submit();">
                              <i class="fa-solid fa-right-to-bracket login_icon"></i>
                          </a>

                          <form id="logout-form2" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      @endguest

                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <i class="fa-solid fa-bars-staggered"></i>
                      </button>

                  </div>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="{{ route('home') }}#">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}#about_us">About</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}#services">Services</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}#contact">Contact</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('team') }}">Team</a>
                          </li>

                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('home') }}#services">Portfolio</a>
                          </li>

                          {{-- Diploma --}}
                          {{-- <li class="dropdown nav-item"><a href="#">
                                  <span>Diploma</span>
                                  <i class="bi bi-chevron-down"></i></a>
                              <ul>

                                  <li class="dropdown dropdown2"><a href="#"><span>Web Diploma</span> <i
                                              class="bi bi-chevron-right"></i></a>
                                      <ul>
                                          <li><a href="{{ route('add.diploma') }}"><i class="bi bi-chevron-right"></i>
                                                  Add Diploma</a></li>
                                          <li><a href="#"><i class="bi bi-chevron-right mt-2"></i> List
                                                  Diploma</a>
                                          </li>
                                      </ul>
                                  </li>

                                  <li class="dropdown dropdown2 mt-3"><a href="#"><span>Department</span> <i
                                              class="bi bi-chevron-right"></i></a>
                                      <ul>
                                          <li><a href="{{ route('add.department') }}"><i
                                                      class="bi bi-chevron-right"></i>
                                                  Add Department</a></li>
                                          <li><a href="#"><i class="bi bi-chevron-right mt-2"></i> List
                                                  Department</a>
                                          </li>
                                      </ul>
                                  </li>


                              </ul>
                          </li> --}}

                      </ul>
                  </div>
              </div>

              @guest
                  <a href="{{ route('login') }}" class="btn btn-login">
                      login
                  </a>
              @else
                  <a class="btn btn-login" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              @endguest




          </nav>
      </div>
  </header>
  <!-- end header -->
