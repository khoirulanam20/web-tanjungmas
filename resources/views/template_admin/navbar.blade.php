<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img src="/images/logo/logokelurahan.png" alt="default logo" width="150" height="35" />
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

      <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li> 
      <li class="menu-item {{ Request::is('articles*') ? 'active' : '' }}">
        <a href="/articles" class="menu-link">
          <i class="menu-icon tf-icons bx bx-ticket"></i>
          <div data-i18n="Analytics">Articles</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('programs*') ? 'active' : '' }}">
        <a href="/programs" class="menu-link">
          <i class="menu-icon tf-icons bx bx-ticket"></i>
          <div data-i18n="Analytics">Program</div>
        </a>
      </li>
    </ul>
  </aside>