<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset((setting('logo')) ? '/storage/'.setting('logo') : 'dist/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">

    @can('admin')
    <x-nav-link 
        text="Dashboard" 
        icon="tachometer-alt" 
        url="{{ route('admin.dashboard') }}"
        active="{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}"
    />
    @endcan

    @can('anggota')
    <x-nav-link 
        text="Dashboard" 
        icon="tachometer-alt" 
        url="{{ route('anggota.dashboard') }}"
        active="{{ request()->routeIs('anggota.dashboard') ? ' active' : '' }}"
    />
    @endcan

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

    @can('pm')
    <hr class="sidebar-divider mb-0">
    
    <x-nav-link 
        text="Klien" 
        icon="male" 
        url="{{ route('admin.klien') }}" 
        active="{{ request()->routeIs('admin.klien') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">
    
    <x-nav-link 
        text="Projects" 
        icon="archive" 
        url="{{ route('admin.project') }}" 
        active="{{ request()->routeIs('admin.project') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">
    
    <x-nav-link 
        text="Tim" 
        icon="male" 
        url="{{ route('admin.tim') }}" 
        active="{{ request()->routeIs('admin.tim') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">
    
    <x-nav-link 
        text="Anggota" 
        icon="male" 
        url="{{ route('anggota.index') }}" 
        active="{{ request()->routeIs('anggota.index') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mb-0">
    
    <x-nav-link 
        text="Task" 
        icon="male" 
        url="{{ route('admin.task') }}" 
        active="{{ request()->routeIs('task.index') ? ' active' : '' }}"
    />
    @endcan

    @can('anggota')
   
    @endcan
    
</ul>