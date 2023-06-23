<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Binary admin</a>
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
        <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>
    </div>
</nav>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{ asset('admin/assets/img/find_user.png') }}" class="user-image img-responsive" />
            </li>
            <li>
                <h5 style="color: white;" class="text-center">Mario (Admin)</h5>
            </li>

            <li>
                <a class="{{ $active === 'dashboard_user' ? 'active-menu' : '' }}" href="{{ route('dashboard_user') }}">
                    <i class="fa fa-users fa-2x"></i> User</a>
            </li>
            <li>
                <a href="{{ route('dashboard_car') }}"><i class="fa-solid fa-car fa-2x" style="color: #ffffff;"></i>
                    Data Mobil<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="{{ $active === 'dashboard_car' ? 'active-menu' : '' }}"
                            href="{{ route('dashboard_car') }}">
                            Daftar Mobil</a>
                    </li>
                    <li>
                        <a class="{{ $active === 'create_car' ? 'active-menu' : '' }}" href="{{ route('create_car') }}">
                            Tambah Mobil</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="" href="{{ route('dashboard_order') }}">
                    <i class="fa fa-users fa-2x"></i>Pembayaran</a>
            </li>
            <li>
                <a class="" href="{{ route('dashboard_return') }}">
                    <i class="fa fa-users fa-2x"></i>P</a>
            </li>
        </ul>

    </div>

</nav>
