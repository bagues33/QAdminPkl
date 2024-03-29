<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset((setting('logo')) ? '/storage/'.setting('logo') : 'dist/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">PT. PICSI</div>
    </a>
    <hr class="sidebar-divider my-0">

    <x-nav-link 
        text="Dashboard" 
        icon="tachometer-alt" 
        url="{{ route('dashboard') }}"
        active="{{ request()->routeIs('dashboard') ? ' active' : '' }}"
    />
    
    <hr class="sidebar-divider mb-0">
    @can('klien')
    <x-nav-link 
        text="Klien" 
        icon="male" 
        url="{{ route('admin.klien') }}" 
        active="{{ request()->routeIs('admin.klien') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">
    @endcan    

    @can('project')
    <x-nav-link 
        text="Projects" 
        icon="archive" 
        url="{{ route('admin.project') }}" 
        active="{{ request()->routeIs('admin.project') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">
    @endcan

    @can('tim')
    <x-nav-link 
        text="Tim" 
        icon="users" 
        url="{{ route('pm.tim') }}" 
        active="{{ request()->routeIs('pm.tim') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">
    @endcan

    <!-- <x-nav-link 
        text="Anggota" 
        icon="user" 
        url="{{ route('admin.anggota') }}" 
        active="{{ request()->routeIs('admin.anggota') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0"> -->
    
    @can('task-pm')
    <x-nav-link 
        text="Task (PM)" 
        icon="tasks" 
        url="{{ route('pm.task') }}" 
        active="{{ request()->routeIs('pm.task.index') ? ' active' : '' }}"
    />
    @endcan

    @can('task-anggota')
    
    <x-nav-link 
        text="Task (Anggota)" 
        icon="tasks" 
        url="{{ route('anggota.task.index') }}" 
        active="{{ request()->routeIs('anggota.task') ? ' active' : '' }}"
    />
    @endcan

    {{-- @can('komentar')

    @role('pm')
        <x-nav-link 
            text="Komentar" 
            icon="comments" 
            url="{{ route('pm.komentar') }}" 
            active="{{ request()->routeIs('pm.komentar') ? ' active' : '' }}"
        />
    @else
        <x-nav-link 
            text="Komentar" 
            icon="comments" 
            url="{{ route('anggota.komentar') }}" 
            active="{{ request()->routeIs('anggota.komentar') ? ' active' : '' }}"
        />
    @endrole

    @endcan --}}

    @role('Admin')
        {{-- <hr class="sidebar-divider mb-0"> --}}

        <x-nav-link 
            text="Laporan Daftar Klien" 
            icon="file-pdf" 
            url="{{ route('admin.laporan.klien') }}"
            active="{{ request()->routeIs('admin.laporan.klien') ? ' active' : '' }}"
        />

        <x-nav-link 
            text="Laporan Rekap Pekerjaan" 
            icon="file-pdf" 
            url="{{ route('admin.laporan.rekappekerjaan') }}"
            active="{{ request()->routeIs('admin.laporan.rekappekerjaan') ? ' active' : '' }}"
        />
        <x-nav-link 
            text="Laporan Per Project" 
            icon="file-pdf" 
            url="{{ route('admin.laporan.laporanperproject') }}"
            active="{{ request()->routeIs('admin.laporan.laporanperproject') ? ' active' : '' }}"
        />
        <x-nav-link 
            text="Laporan Semua Project" 
            icon="file-pdf" 
            url="{{ route('admin.laporan.daftarproject') }}"
            active="{{ request()->routeIs('admin.laporan.daftarproject') ? ' active' : '' }}"
        />
    
    @endrole

    @role('pm')
        <hr class="sidebar-divider mb-0">
        <x-nav-link 
            text="Laporan Daftar Tim Per Project" 
            icon="file-pdf" 
            url="{{ route('pm.laporan.timperproject') }}"
            active="{{ request()->routeIs('pm.laporan.timperproject') ? ' active' : '' }}"
        />
        <x-nav-link 
            text="Laporan Daftar Task Per Project" 
            icon="file-pdf" 
            url="{{ route('pm.laporan.taskperproject') }}"
            active="{{ request()->routeIs('pm.laporan.taskperproject') ? ' active' : '' }}"
        />
   
        {{-- <hr class="sidebar-divider mb-0">
        <x-nav-link 
            text="Laporan Daftar Tim Per Project" 
            icon="file-pdf" 
            url="{{ route('anggota.laporan.timperproject') }}"
            active="{{ request()->routeIs('anggota.laporan.timperproject') ? ' active' : '' }}"
        />
        <x-nav-link 
            text="Laporan Daftar Task Per Project" 
            icon="file-pdf" 
            url="{{ route('anggota.laporan.taskperproject') }}"
            active="{{ request()->routeIs('anggota.laporan.taskperproject') ? ' active' : '' }}"
        /> --}}
    @endrole

    @can('member-list')
    <hr class="sidebar-divider mb-0">

    <x-nav-link 
        text="Member" 
        icon="users" 
        url="{{ route('admin.member') }}"
        active="{{ request()->routeIs('admin.member') ? ' active' : '' }}"
    />
    @endcan

    @can('role-list')
    <x-nav-link 
        text="Roles" 
        icon="th-list" 
        url="{{ route('admin.roles') }}"
        active="{{ request()->routeIs('admin.roles') ? ' active' : '' }}"
    />
    @endcan
    
    @can('setting-list')
    <hr class="sidebar-divider mb-0">

    <x-nav-link 
        text="Settings" 
        icon="cogs" 
        url="{{ route('admin.settings') }}"
        active="{{ request()->routeIs('admin.settings') ? ' active' : '' }}"
    />
    @endcan
    
</ul>