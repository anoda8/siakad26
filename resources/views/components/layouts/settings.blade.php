<!-- Navbar pills -->
<div class="mb-6 flex gap-1 overflow-x-auto">
    <a href="{{ route('settings.profile.edit') }}"
       class="btn {{ request()->routeIs('settings.profile.*') ? 'btn-primary' : 'btn-text hover:text-bg-soft-primary focus:text-bg-soft-primary focus:outline-primary' }}">
        <i class="fa-solid fa-user"></i> <span class="hidden sm:inline">Account</span> </a>
    <a href="{{ route('settings.password.edit') }}"
       class="btn {{ request()->routeIs('settings.password.*') ? 'btn-primary' : 'btn-text hover:text-bg-soft-primary focus:text-bg-soft-primary focus:outline-primary' }}">
        <i class="fa-solid fa-key"></i> <span class="hidden sm:inline">Password</span> </a>
</div>
<!--/ Navbar pills -->

<div class="card">
    <div class="card-body gap-6">
        {{ $slot }}
    </div>
</div>
