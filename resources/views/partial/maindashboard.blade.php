@include('partial.header')
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      @yield('sidebar')
    </aside>
  </div>

  <!-- Main Content -->
  <div class="main-content">
      @yield('content')
  </div>
  @include('partial.footer')