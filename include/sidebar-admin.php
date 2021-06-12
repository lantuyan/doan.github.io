   <!-- SIDEBAR -->
   <div class="sidebar">
        <div class="sidebar-logo">
            <a href="index.php">
            <!-- <img src="./img/logo-lg.png" alt="Comapny logo"> -->
            <img src="img/logo-charity-fund.png" style="height: 55px; width: auto;" alt="">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-info">
                <img src="../img/user-image.png" alt="User picture" class="profile-image">
                <div class="sidebar-user-name">
                <?php
                $username = $_SESSION['username'];
                include "connection.php";
                $sql = "select name from users where username = '$username' ";
                $result = mysqli_query($conn, $sql);
                // $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) > 0) {
                    // hiển thị dữ liệu trên trang
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "" . $row["name"]. "";
                    }
                } else {
                    echo "Bị lỗi";
                }
            ?>
            <span>Admin <i class="bi bi-person-fill "></i></span>
                </div>
            </div> 
            <button class="btn btn-outline" data-toggle="tooltip" data-placement="top" title="Tooltip on right">
                <a href="index.php" name="log-out">
                    <i class='bx bx-log-out bx-flip-horizontal'></i>
                </a>    
               
            </button>
        </div>
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <li>
                <a href="admin.php" class="active">
                    <i class='bx bx-home'></i>
                    <span>quản lý</span>
                </a>
            </li>
            <li data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                <a href="#">
                    <i class='bx bx-shopping-bag'></i>
                    <span>Sản phẩm</span>
                </a>
            </li>
            <li>
                <a href="admin-1.php">
                    <i class='bx bx-chart'></i>
                    <span>Danh sách ủng hộ</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-user-circle'></i>
                    <span>Quản lý tài khoản</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="admin-2.php">
                            Quản lý tài khoản
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Chỉnh sửa profile
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>Dự án gây quỹ</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="admin-3.php">
                            Danh sách
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#add-duan">
                            Thêm dự án
                        </a>
                    </li>
                </ul>
            </li>
            <!-- <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-category'></i>
                    <span>e-commerce</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#">
                            list product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            add product
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            orders
                        </a>
                    </li>
                </ul>
            </li> -->
            <li>
                <a href="#">
                    <i class='bx bx-mail-send'></i>
                    <span>Email</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span>Tin nhắn</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-calendar'></i>
                    <span>Lịch</span>
                </a>
            </li>
            <li class="sidebar-submenu">
                <a href="#" class="sidebar-menu-dropdown">
                    <i class='bx bx-cog'></i>
                    <span>Cài đặt</span>
                    <div class="dropdown-icon"></div>
                </a>
                <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                        <a href="#" class="darkmode-toggle" id="darkmode-toggle">
                            Phiên bản tối
                            <span class="darkmode-switch"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->