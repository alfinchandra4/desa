<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">Sistem Informasi Desa</li>
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>Dasbor</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.berita') }}" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>Berita Desa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Potensi Desa
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.potensi.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Potensi Desa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.umkm') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>UMKM</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.wisata') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Wisata</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.budaya') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Seni Budaya</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.guest_house') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Guest House</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Infografis
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.demografi') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Demografi Penduduk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.pendidikan' )}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pendidikan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.pekerjaan') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pekerjaan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.umur') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelompok Umur</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.infografis.agama') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Agama</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
