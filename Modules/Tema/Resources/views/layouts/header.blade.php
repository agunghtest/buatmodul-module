<header class="navbar navbar-header navbar-header-fixed">
  <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
  <div class="navbar-brand">
    <a href="{{url('/')}}" class="df-logo">dash<span>forge</span></a>
  </div>
  <div id="navbarMenu" class="navbar-menu-wrapper">
    <div class="navbar-menu-header">
      <a href="{{url('/')}}" class="df-logo">dash<span>forge</span></a>
      <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
    </div>
    <ul class="nav navbar-menu">
      <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
      <li class="nav-item with-sub">
        <a href="" class="nav-link"><i class="icon ion-md-albums"></i> Layanan</a>
        <ul class="navbar-menu-sub">
          <li class="nav-sub-item"><a href="{{url('')}}" class="nav-sub-link"><i data-feather="calendar"></i>Beranda</a></li>
          <li class="nav-sub-item"><a href="{{url('chat')}}" class="nav-sub-link"><i data-feather="message-square"></i>Obrolan</a></li>
          <!-- <li class="nav-sub-item"><a href="app-contacts.html" class="nav-sub-link"><i data-feather="users"></i>Contacts</a></li> -->
          <!-- <li class="nav-sub-item"><a href="app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>File Manager</a></li> -->
          <!-- <li class="nav-sub-item"><a href="app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Mail</a></li> -->
        </ul>
      </li>
	  <li class="nav-item with-sub">
        <a href="" class="nav-link"><i class="icon ion-md-albums"></i> SIMPEG</a>
        <ul class="navbar-menu-sub">
          <li class="nav-sub-item"><a href="{{url('')}}" class="nav-sub-link"><i data-feather="calendar"></i>Presensi</a></li>
          <li class="nav-sub-item"><a href="{{url('kinerjaindividu')}}" class="nav-sub-link"><i data-feather="message-square"></i>Kinerja Individu</a></li>
          <!-- <li class="nav-sub-item"><a href="app-contacts.html" class="nav-sub-link"><i data-feather="users"></i>Contacts</a></li> -->
          <!-- <li class="nav-sub-item"><a href="app-file-manager.html" class="nav-sub-link"><i data-feather="file-text"></i>File Manager</a></li> -->
          <!-- <li class="nav-sub-item"><a href="app-mail.html" class="nav-sub-link"><i data-feather="mail"></i>Mail</a></li> -->
        </ul>
      </li>
    </ul>
  </div><!-- navbar-menu-wrapper -->
  <div class="navbar-right">
    <!-- <a id="navbarApps" href="" class="apps-link"><i data-feather="layers"></i></a> -->
    <a id="navbarSearch" href="" class="search-link"><i data-feather="search"></i></a>
    <div class="dropdown dropdown-message">
      <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
        <i data-feather="message-square"></i>
        <span>5</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">New Messages</div>
        <a href="" class="dropdown-item">
          <div class="media">
            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
            <div class="media-body mg-l-15">
              <strong>Socrates Itumay</strong>
              <p>nam libero tempore cum so...</p>
              <span>Mar 15 12:32pm</span>
            </div>
          </div>
        </a>
        <a href="" class="dropdown-item">
          <div class="media">
            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
            <div class="media-body mg-l-15">
              <strong>Joyce Chua</strong>
              <p>on the other hand we denounce...</p>
              <span>Mar 13 04:16am</span>
            </div>
          </div>
        </a>
        <a href="" class="dropdown-item">
          <div class="media">
            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
            <div class="media-body mg-l-15">
              <strong>Althea Cabardo</strong>
              <p>is there anyone who loves...</p>
              <span>Mar 13 02:56am</span>
            </div>
          </div>
        </a>
        <a href="" class="dropdown-item">
          <div class="media">
            <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
            <div class="media-body mg-l-15">
              <strong>Adrian Monino</strong>
              <p>duis aute irure dolor in repre...</p>
              <span>Mar 12 10:40pm</span>
            </div>
          </div>
        </a>
        <div class="dropdown-footer"><a href="">View all Messages</a></div>
      </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
    <div class="dropdown dropdown-notification">
      <x-tema-notification />
    </div>
    <div class="dropdown dropdown-profile">
      <x-tema-profile />
    </div><!-- dropdown -->
  </div><!-- navbar-right -->
  <div class="navbar-search">
    <div class="navbar-search-header">
      <input type="search" class="form-control" placeholder="Type and hit enter to search...">
      <button class="btn"><i data-feather="search"></i></button>
      <a id="navbarSearchClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
    </div><!-- navbar-search-header -->
    <div class="navbar-search-body">
      <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent Searches</label>
      <ul class="list-unstyled">
        <li><a href="dashboard-one.html">modern dashboard</a></li>
        <li><a href="app-calendar.html">calendar app</a></li>
        <li><a href="../../collections/modal.html">modal examples</a></li>
        <li><a href="../../components/el-avatar.html">avatar</a></li>
      </ul>

      <hr class="mg-y-30 bd-0">

      <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search Suggestions</label>

      <ul class="list-unstyled">
        <li><a href="dashboard-one.html">cryptocurrency</a></li>
        <li><a href="app-calendar.html">button groups</a></li>
        <li><a href="../../collections/modal.html">form elements</a></li>
        <li><a href="../../components/el-avatar.html">contact app</a></li>
      </ul>
    </div><!-- navbar-search-body -->
  </div><!-- navbar-search -->

  <div class="navbar-apps">
    <div class="navbar-apps-header">
      <input type="search" class="form-control" placeholder="Cari aplikasi...">
      <a id="navbarAppsClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
    </div><!-- navbar-search-header -->
    <div class="navbar-apps-body">
      <button>sadsd</button>
    </div><!-- navbar-search-body -->
  </div><!-- navbar-search -->

</header><!-- navbar -->
