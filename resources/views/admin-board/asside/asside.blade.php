      <!-- Sidebar Nav -->
      <aside id="sidebar" class="js-custom-scroll side-nav">
          <ul id="sideNav" class="side-nav-menu side-nav-menu-top-level mb-0">
              <!-- Title -->
              <li class="sidebar-heading h6">Dashboard</li>
              <!-- End Title -->

              <!-- Dashboard -->
              <li class="side-nav-menu-item active">
                  <a class="side-nav-menu-link media align-items-center" href="{{ route('admin.index') }}">
                      <span class="side-nav-menu-icon d-flex mr-3">
                          <i class="gd-dashboard"></i>
                      </span>
                      <span class="side-nav-fadeout-on-closed media-body">Dashboard</span>
                  </a>
              </li>
              <!-- End Dashboard -->

              <!-- Title -->
              <li class="sidebar-heading h6">Pages</li>
              <!-- End Title -->

              <!-- Users -->
              <li class="side-nav-menu-item side-nav-has-menu">
                  <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subUsers">
                      <span class="side-nav-menu-icon d-flex mr-3">
                          <i class="gd-user"></i>
                      </span>
                      <span class="side-nav-fadeout-on-closed media-body">Users</span>
                      <span class="side-nav-control-icon d-flex">
                          <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                      </span>
                      <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                  </a>

                  <!-- Users: subUsers -->
                  <ul id="subUsers" class="side-nav-menu side-nav-menu-second-level mb-0">
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="{{ route('admin.getAllUsers') }}">All Users</a>
                      </li>
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="{{ route('admin.getAddUser') }}">Add new</a>
                      </li>
                  </ul>
                  <!-- End Users: subUsers -->
              </li>
              <!-- End Users -->



              <!-- Departments -->
              <li class="side-nav-menu-item side-nav-has-menu">
                  <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subDepartments">
                      <span class="side-nav-menu-icon d-flex mr-3">
                          <i class="gd-desktop"></i>
                      </span>
                      <span class="side-nav-fadeout-on-closed media-body">Departments</span>
                      <span class="side-nav-control-icon d-flex">
                          <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                      </span>
                      <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                  </a>

                  <!-- Users: subDepartments -->
                  <ul id="subDepartments" class="side-nav-menu side-nav-menu-second-level mb-0">
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="{{ route('admin.getAllDepartments') }}">All
                              Departments</a>
                      </li>
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="{{ route('admin.department') }}">Add Department</a>
                      </li>
                  </ul>
                  <!-- End departments: subDepartments -->
              </li>
              <!-- End Departments -->

              <!-- Departments -->
              <li class="side-nav-menu-item side-nav-has-menu">
                  <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subCodes">
                      <span class="side-nav-menu-icon d-flex mr-3">
                          <i class="gd-anchor"></i>
                      </span>
                      <span class="side-nav-fadeout-on-closed media-body">Codes</span>
                      <span class="side-nav-control-icon d-flex">
                          <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                      </span>
                      <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                  </a>

                  <!-- Users: subDepartments -->
                  <ul id="subCodes" class="side-nav-menu side-nav-menu-second-level mb-0">
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="{{ route('admin.getAllCodes') }}">All
                              Codes</a>
                      </li>
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="{{ route('admin.addCode') }}">Add Code</a>
                      </li>
                  </ul>
                  <!-- End departments: subDepartments -->
              </li>
              <!-- End Departments -->

              <!-- Authentication -->
              <li class="side-nav-menu-item side-nav-has-menu">
                  <a class="side-nav-menu-link media align-items-center" href="#" data-target="#subPages">
                      <span class="side-nav-menu-icon d-flex mr-3">
                          <i class="gd-lock"></i>
                      </span>
                      <span class="side-nav-fadeout-on-closed media-body">Authentication</span>
                      <span class="side-nav-control-icon d-flex">
                          <i class="gd-angle-right side-nav-fadeout-on-closed"></i>
                      </span>
                      <span class="side-nav__indicator side-nav-fadeout-on-closed"></span>
                  </a>

                  <!-- Pages: subPages -->
                  <ul id="subPages" class="side-nav-menu side-nav-menu-second-level mb-0">
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="login.html">Login</a>
                      </li>
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="register.html">Register</a>
                      </li>
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="password-reset.html">Forgot Password</a>
                      </li>
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="password-reset-2.html">Forgot Password 2</a>
                      </li>
                      <li class="side-nav-menu-item">
                          <a class="side-nav-menu-link" href="email-verification.html">Email Verification</a>
                      </li>
                  </ul>
                  <!-- End Pages: subPages -->
              </li>
              <!-- End Authentication -->

              <!-- Settings -->
              <li class="side-nav-menu-item">
                  <a class="side-nav-menu-link media align-items-center" href="{{ route('admin.settigns') }}">
                      <span class="side-nav-menu-icon d-flex mr-3">
                          <i class="gd-settings"></i>
                      </span>
                      <span class="side-nav-fadeout-on-closed media-body">Settings</span>
                  </a>
              </li>
              <!-- End Settings -->

          </ul>
      </aside>
      <!-- End Sidebar Nav -->
