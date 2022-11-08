<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('AdminLTE-2/dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="header">MASTER</li>
            <li>
                <a href="{{ route('kategori.index') }}">
                    <i class="fa fa-cubes"></i> <span>Kategori</span>
                </a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}">
                    <i class="fa fa-product-hunt"></i> <span>Produk</span>
                </a>
            </li>
            <li>
                <a href="{{ route('member.index') }}">
                    <i class="fa fa-users"></i> <span>Member</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-truck"></i> <span>Supplier</span>
                </a>
            </li>
            {{-- <li class="header">TRANSAKSI</li>
            <li>
                <a href="#">
                    <i class="fa fa-money"></i> <span>Pengeluaran</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-download"></i> <span>Pembelian</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-check-square-o"></i> <span>Penjualan</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Transaksi Lama</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Transaksi Baru</span>
                </a>
            </li>
            <li class="header">REPORT</li>
            <li>
                <a href="#">
                    <i class="fa fa-file-pdf-o"></i> <span>Laporan</span>
                </a>
            </li>
            <li>
            <li class="header">SYSTEM</li>
            <li>
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>User</span>
                </a>
            </li>
            <li>
            <li>
                <a href="#">
                    <i class="fa fa-cogs"></i> <span>Setting</span>
                </a>
            </li> --}}
    </section>
    <!-- /.sidebar -->
</aside>
