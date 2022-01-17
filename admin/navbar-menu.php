<ul class="nav nav-list">
<?php 
// fungsi untuk pengecekan menu aktif
// jika menu beranda dipilih, menu beranda aktif
if ($_GET["module"] == "beranda") { ?>
    <li class="active open hover highlight">
        <a href="?module=beranda">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text"> Beranda </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu beranda tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=beranda">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text"> Beranda </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}

// jika menu konsumen dipilih, menu konsumen aktif
if ($_GET["module"] == "konsumen" || $_GET["module"] == "form_konsumen") { ?>
    <li class="active open hover highlight">
        <a href="?module=konsumen">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Member </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu konsumen tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=konsumen">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Member </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}
//DUMP
// jika menu konsumen dipilih, menu konsumen aktif
if ($_GET["module"] == "barang" || $_GET["module"] == "form_barang") { ?>
    <li class="active open hover highlight">
        <a href="?module=barang">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Item </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu konsumen tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=barang">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Item </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}
//DUMP

// jika menu pesanan dipilih, menu pesanan aktif
if ($_GET["module"] == "pesanan" || $_GET["module"] == "form_pesanan") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active open hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika menu konfirmasi dipilih, menu konfirmasi aktif
elseif ($_GET["module"] == "konfirmasi" || $_GET["module"] == "form_konfirmasi") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active open hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika tidak, menu barang tidak aktif
else {  ?>
    <li class="hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}

// jika menu Laporan dipilih, menu Laporan aktif
if ($_GET["module"] == "laporan") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active open hover">
                <a href="?module=laporan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika menu grafik dipilih, menu grafik aktif
elseif ($_GET["module"] == "grafik") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=laporan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active open hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika tidak, menu barang tidak aktif
else {  ?>
    <li class="hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=laporan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
?>
</ul>

