<?php
include_once("../templates/header.php");
?>

<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="../index.php" class="text-nowrap logo-img">
                <!-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
                <h4 class="font-weight-bold text-capitalize"></h4>
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../index.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">LAYANAN</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="not-found.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-receipt"></i>
                        </span>
                        <span class="hide-menu">Pesanan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="myProduct.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-package"></i>
                        </span>
                        <span class="hide-menu">Product Saya</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="tambah-produk.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-plus"></i>
                        </span>
                        <span class="hide-menu">Tambah Product</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="editProduct.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-pencil"></i>
                        </span>
                        <span class="hide-menu">Edit Product</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="not-found.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-alert-circle"></i>
                        </span>
                        <span class="hide-menu">Laporkan Masalah</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AKUN</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../backend/logout.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-login"></i>
                        </span>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="account.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Setelan Akun</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
<!--  Main wrapper -->
<div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                        <i class="ti ti-bell-ringing"></i>
                        <div class="notification bg-primary rounded-circle"></div>
                    </a>
                </li>
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <p class="m-0"><b></b></p>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img style="object-fit: cover;"
                                src="https://www.pngitem.com/pimgs/m/35-350426_profile-icon-png-default-profile-picture-png-transparent.png"
                                alt="" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">My Profile</p>
                                </a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-mail fs-6"></i>
                                    <p class="mb-0 fs-3">My Account</p>
                                </a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-list-check fs-6"></i>
                                    <p class="mb-0 fs-3">My Task</p>
                                </a>
                                <a href="../backend/logout.php"
                                    class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--  Header End -->
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="container d-flex align-items-strech flex-wrap justify-content-evenly">
                <div class="card">
                    <div class="col">
                        <div class="card-group" style="width: 300px;">
                            <div class="card m-0">
                                <input type="checkbox" style="width: 20px; height: 20px;"
                                    class="form-check position-absolute m-1" name="" id="productSelected">
                                <label for="productSelected">
                                    <img style="object-fit: cover; height: 200px;" class="card-img-top"
                                        src="https://www.bing.com/th?id=OIP.EozDwaE1iIHAZZ7LWwfrigHaHa&w=90&h=100&c=8&rs=1&qlt=90&o=6&dpr=1.4&pid=3.1&rm=2"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Citul Chili Oil</h5>
                                        <p class="card-text">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore officia
                                            eius
                                            impedit voluptas ipsum facilis ipsam quaerat explicabo consectetur
                                            voluptates?
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated -</small></p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-alert alert alert-warning p-2">
                <div class="w-100 container d-flex justify-content-around align-items-center">
                    <div class="col">
                        <span>1 Produk dipilih</span>
                    </div>
                    <div class="col text-end">
                        <button type="button" class="btn btn-danger p-2">Hapus</button>
                        <!--                         <button type="button" class="btn btn-warning m-1">Edit</button> -->
                        <button type="button" class="btn btn-secondary p-2">Batalkan</button>
                    </div>
                </div>
            </div>
            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Developed by <u>Kelompok 11</u></p>
            </div>
        </div>
    </div>

    <?php
    include_once("../templates/footer.php");
    ?>