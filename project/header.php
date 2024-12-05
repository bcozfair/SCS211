<!-- navbar -->
<nav class="container-fluid text-white" style="background-color: #222222">
    <div class="container p-2">
        <div id="menuHolder">
            <div role="navigation" id="mainNavigation">
                <div class="flexMain p-2" style="background-color: #222222">
                    <div class="flex2 text-start d-none d-md-block">
                        <button class="whiteLink siteLink" onclick="menuToggle()">
                            <i class="fas fa-bars me-2"></i>เมนู
                        </button>
                    </div>

                    <div class="flex2 text-start d-block d-md-none">
                        <button class="whiteLink siteLink" aria-haspopup="true" aria-expanded="false" style="min-width: 50%" onclick="menuToggle()">
                            <i class="fas fa-bars me-2"></i>
                        </button>
                    </div>

                    <div class="flex3 text-center animate-charcter" id="siteBrand">
                        <i class="fas fa-car me-2"></i> Car To U
                    </div>

                    <div class="flex2 text-end d-block d-md-none">
                        <button class="whiteLink siteLink dropdown-toggle whiteLink" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="min-width: 50%">
                            <i class="fas fa-users"></i>
                        </button>
                        <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-warning" data-toggle="modal" data-target="#registerModal" href="#"><i class="fas fa-user-plus me-2"></i>สมัครสมาชิก</a>
                            <a class="dropdown-item text-warning" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fa-sign-in-alt me-2"></i>เข้าสู่ระบบ</a>
                            <!-- Add more dropdown items as needed -->
                        </div>
                    </div>

                    <div class="flex2 text-end d-none d-md-block">
                        <!-- Update your existing buttons to trigger the modals -->
                        <button class="whiteLink siteLink" data-toggle="modal" data-target="#registerModal">
                            <i class="fas fa-user-plus me-2"></i>สมัครสมาชิก
                        </button>
                        <button class="blackLink siteLink" data-toggle="modal" data-target="#loginModal">
                            <i class="fas fa-sign-in-alt me-2"></i>เข้าสู่ระบบ
                        </button>
                    </div>
                </div>
            </div>

            <div id="menuDrawer">
                <div class="border-bottom">
                    <div class="row" style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  ">
                        <button class="whiteLink siteLink" onclick="menuToggle()">
                            <i class="fas fa-sign-out-alt me-2"></i>กลับ
                        </button>
                        <img src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/logo.jpg" alt="logo" style="max-width: 70%" />
                    </div>
                </div>
                <div>
                    <a href="index.php" class="nav-menu-item"><i class="fas fa-home me-3"></i>หน้าหลัก</a>
                    <a href="index.php#about" class="nav-menu-item"><i class="fas fa-file-alt me-3"></i> เกี่ยวกับเรา</a>
                    <a href="product.php#promotion" class="nav-menu-item"><i class="fas fa-car-side me-3"></i>สินค้าและบริการ</a>
                    <a href="index.php#promotion" class="nav-menu-item"><i class="fas fa-gift me-3"></i>โปรโมชันพิเศษ</a>
                    <a href="index.php#container" class="nav-menu-item"><i class="fas fa-key me-3"></i>จองรถ</a>
                    <a href="condition.php#promotion" class="nav-menu-item"><i class="fa fa-handshake-o me-3"></i> เงื่อนไขและข้อตกลง</a>
                    <a href="#footer" class="nav-menu-item"><i class="fas fa-phone-alt me-3"></i>ติดต่อเรา
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- slide -->
<div id="container" class="container">
    <div class="row">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li class="me-2" data-target="#demo" data-slide-to="0" class="active"></li>
                <li class="me-2" data-target="#demo" data-slide-to="1"></li>
                <li class="me-2" data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/slide%20(1).jpg" alt="cover" />
                </div>
                <div class="carousel-item">
                    <img src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/slide%20(2).jpg" alt="cover" />
                </div>
                <div class="carousel-item">
                    <img src="https://raw.githubusercontent.com/Fairplay018/SCS211/main/project/pic/slide%20(3).jpg" alt="cover" />
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>