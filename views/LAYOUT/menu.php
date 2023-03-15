
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="trangchu.php">
                         <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Trang chủ
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSanPham" aria-expanded="false" aria-controls="collapseSanPhams">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Danh mục
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseSanPham" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="index.php?controller=Customers&page=list">Khách hàng</a>                            
                            <a class="nav-link" href="index.php?controller=Orders&page=list">Đơn Hàng</a>
                            <a class="nav-link" href="index.php?controller=Products&page=list">Sản phẩm</a>
                            <a class="nav-link" href="index.php?controller=Categories&page=list">Thể loại</a>
                        
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Login
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="">
                                Đăng nhập
                                <a class="nav-link collapsed" href="../LAYOUT/login/dangky.php" >
                                    Đăng ký
                                </a>
                            </a>
                          
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">lienhe</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Liên hệ
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Thông tin
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Trần Văn Trường
            </div>
        </nav>
    </div>
    
