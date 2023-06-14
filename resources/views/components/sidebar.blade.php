<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('dashboard.index') }}" class="app-brand-link">
        <span class="app-brand-logo">
          <img src="{{ asset('assets/logo/logo_prosmart_landscape.png') }}" alt="" srcset="" width="130px" height="60px">
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <li class="menu-item {{ (request()->is('/dashboard') ? 'active':'') }}">
        <a href="{{ route('dashboard.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-dashboard"></i>
          <div >Dashboard</div>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('profile') ? 'active':'') }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-user"></i>
          <div>Profile</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ (request()->is('') ? 'active':'') }}">
            <a href="{{ route('profile.index') }}" class="menu-link">
              <div >Doktrin Adhyaksa</div>
            </a>
          </li>
          <li class="menu-item {{ (request()->is('') ? 'active':'') }}">
            <a href="{{ route('profile.get.tugas') }}" class="menu-link">
              <div >Tugas Pokok & Fungsi</div>
            </a>
          </li>
          <li class="menu-item {{ (request()->is('') ? 'active':'') }}">
            <a href="{{ route('profile.get.visimisi') }}" class="menu-link">
              <div >Visi Misi</div>
            </a>
          </li>
          {{-- <li class="menu-item {{ (request()->is('') ? 'active':'') }}">
            <a href="{{ route('/') }}" class="menu-link">
              <div >Daftar Pegawai</div>
            </a>
          </li> --}}
          <li class="menu-item {{ (request()->is('') ? 'active':'') }}">
            <a href="{{ route('profile.get.struktur') }}" class="menu-link">
              <div >Struktur Organisasi</div>
            </a>
          </li>
          <li class="menu-item {{ (request()->is('') ? 'active':'') }}">
            <a href="{{ route('profile.get.sambutan') }}" class="menu-link">
              <div >Kata Sambutan</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item {{ request()->is('jaksa') || request()->is('barang-bukti') ? 'active':'' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-database"></i>
          <div>Data Informasi Barang Bukti</div>
        </a>
        <ul class="menu-sub"><li class="menu-item {{ (request()->is('') ? 'active':'') }}">
          <li class="menu-item {{ request()->is('jaksa/*') || request()->is('jaksa') ? 'active':'' }}">
            <a href="{{ route('jaksa.index') }}" class="menu-link">
              <div >Data Jaksa</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('barang-bukti/*') || request()->is('barang-bukti') ? 'active':'' }}">
            <a href="{{ route('barang-bukti.index') }}" class="menu-link">
              <div >Data Barang Bukti</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item {{ request()->is('pengajuan') || request()->is('pengajuan/*') ? 'active':'' }}">
        <a href="{{ route('pengajuan.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-notes"></i>
          <div >Pengajuan Pengambilan Barang Bukti</div>
        </a>
      </li>
      <li class="menu-item {{ (request()->is('gallery') ? 'active':'') }}">
        <a href="{{ route('gallery.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-brand-appgallery"></i>
          <div >Gallery</div>
        </a>
      </li>
      <li class="menu-item {{ request()->is('pengaturan/*') || request()->is('pengaturan') ? 'active':''  }}">
        <a href="{{ route('pengaturan.index') }}" class="menu-link">
          <i class="menu-icon tf-icons ti ti-settings"></i>
          <div >Pengaturan</div>
        </a>
      </li>
    </ul>
  </aside>
