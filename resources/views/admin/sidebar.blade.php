     <!-- partial -->
     <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="admin/assets/images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Admin</span>
                <span class="text-secondary text-small">Admin Doctor</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <span class="menu-title">Admin Dashboard</span>
              <i class="bi bi-bar-chart-fill menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('add_doctor_view')}}">
              <span class="menu-title">Add Doctors</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="menu-title">Calndrier</span>
              <i class="bi bi-calendar3 menu-icon"></i>
            </a>
          </li>    
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="menu-title">Contact Doctor</span>
              <i class="bi bi-envelope-fill menu-icon"></i>
            </a>
          </li> 
          </li>
        </ul>
      </nav>