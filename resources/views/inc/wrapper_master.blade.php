<div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          GS
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Gamer Srbija
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ 'dashboard' == request()->path() ? 'active' : '' }}">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ 'role-register' == request()->path() ? 'active' : '' }}">
            <a href="/role-register">
              <i class="now-ui-icons users_single-02"></i>
              <p>Korisnički profili</p>
            </a>
          </li>
          <li class="{{ 'posts' == request()->path() ? 'active' : '' }}">
            <a href="/posts">
              <i class="now-ui-icons education_atom"></i>
              <p>Svi postovi</p>
            </a>
          </li>
          <!--
          <li>
            <a href="./map.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li> 
          -->
        </ul>
      </div>
    </div>