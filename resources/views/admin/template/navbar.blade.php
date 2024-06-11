@section('navbar')
      <!-- ! Sidebar -->
      <aside class="sidebar">
      <div class="sidebar-start">
            <div class="sidebar-head">
               <a href="/" class="logo-wrapper" title="Home">
                  <span class="sr-only">Home</span>
                  <span class="icon logo" aria-hidden="true"></span>

               </a>
               <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                  <span class="sr-only">Toggle menu</span>
                  <span class="icon menu-toggle" aria-hidden="true"></span>
               </button>
            </div>
            <div class="sidebar-body">
               <ul class="sidebar-body-menu">
                  <li>
                     <a class="@if($page == "admin") active @endif" href="/admin"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                  </li>
                  <li>
                     <a class="@if($page == "data") active @endif" href="/data"><span class="icon paper" aria-hidden="true"></span>Data Anggota</a>
                  </li>
               </ul>
               <span class="system-menu__title">system</span>
               <ul class="sidebar-body-menu">
                  <li>
                        <a class="show-cat-btn" href="##">
                           <span class="icon user-3" aria-hidden="true"></span>Pengguna
                           <span class="category__btn transparent-btn" title="Open list">
                              <span class="sr-only">Open list</span>
                              <span class="icon arrow-down" aria-hidden="true"></span>
                           </span>
                        </a>
                        <ul class="cat-sub-menu">
                           <li>
                              <a href="extention-01.html">Tambah Pengguna</a>
                           </li>
                           <li>
                              <a href="extention-02.html">Data Pengguna</a>
                           </li>
                        </ul>
                  </li>
               </ul>
            </div>
      </div>
      <div class="sidebar-footer">
            <a href="##" class="sidebar-user">
               <span class="sidebar-user-img">
                  <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
               </span>
               <div class="sidebar-user-info">
                  <span class="sidebar-user__title">Nafisa Sh.</span>
                  <span class="sidebar-user__subtitle">Support manager</span>
               </div>
            </a>
      </div>
      </aside>
@endsection