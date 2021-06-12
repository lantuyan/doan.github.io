<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ủng hộ</title>

    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>
    
    <style>
        html,body{
            /* overflow-x: hidden; */
        }
    </style>
    <!-- JQUERY -->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>

    <!-- SLIDER  -->
    <link rel="stylesheet" href="css/lightslider.css">
    <script type="text/javascript" src="js/lightslider.js"></script>
    
    <!--ICON TITLE-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    
     <!--fontawesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Custom  -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/charity-list.css">

   
    <!-- Animation scroll  library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    

</head>
<body>
    <div class="container-fluid" style="position: relative;">
        <!-- Animation scroll header - navbar  -->
         <style>
            header .navbar ul li a{
                color: black;
            }
        </style>
        <script>
          $(window).on('scroll',function(){
              if($(window).scrollTop()>20){
                  $('header').addClass('bg-huong');
                  $('header').addClass('animate__fadeInDown animate__animated ');
                  $('.nav-link').css({
                      "color": "black"
                  });
              }
              else{
                  $('header').removeClass('bg-huong');
                  $('header').removeClass('animate__fadeInDown animate__animated ');
              }
          });
            // Chạy chữ
            
        </script>
        <!-- Hiệu ứng -->
        
      <header>
        <div class="navbar navbar-expand-md container-fluid">
            <a href="../index.php" class="logo" style="display: block; ">
                <img src="img/logo-charity-fund.png" style="height: 55px; width: auto;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="../index.php" class="nav-link">Trang chủ</a></li>
                    <li class="nav-item">
                        <a href="../charity.php" class="nav-link">Ủng hộ</a></li>
                    <li class="nav-item">
                        <a href="../news.php" class="nav-link">Tin tức</a></li>
                    <li class="nav-item">
                        <a href="../contact.php" class="nav-link">Liên hệ</a></li>
                    
                </ul>
                <ul class="navbar-nav ml-auto" >
                    <li class="nav-item">
                        <!-- type="button" name="" id="button-login" class="btn btn-primary btn-lg btn-block" onclick="on_login()" -->
                        <a href="login.php" class="nav-link btn-login" type="button" id="button-login" >Login</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <img src="img/moon.png" id="icon-dark-mode" alt="">
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>
     <!--dark mode-->
     <script>
        var icon = document.getElementById("icon-dark-mode");

        icon.onclick = function(){
            document.body.classList.toggle("dark-theme");
            if(document.body.classList.contains("dark-theme")){
                icon.src = "img/sun.png";
            }else{
                icon.src = "img/moon.png";
            }
        }
    </script>
        
        <!-- Phần đầu  -->
        <section>
            <div class="container container-charity-title">
                <div class="row">
                    <div class="col-12">
                        <h2>Chung tay gây quỹ dựng trường mới tặng 25 em học sinh bản Huổi Chua </h2>
                    </div>
                    <div class="col-12">
                        <div class="time">31/05/2021</div>
                    </div>
                </div>
                <hr>
            </div>
        </section>
        <section>
            <div class="container container-charity-content">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h3>Câu chuyện</h3>
                        <strong>Điểm trường được dựng từ một trăm miếng ván mục nát</strong>
                        <p>Bản Huổi Chua, tọa lạc tại xã Ma Thì Hồ, huyện Mường Chà (Điện Biên). Nơi đây chỉ là vài khoảnh đất nâu phạt vào sườn núi, đủ cho dăm chục nóc nhà gỗ lợp fibro xi măng của 45 hộ dân người Mông. Cách trung tâm bản 11,5km có một đỉnh đồi rộng chừng hai chục mét bề ngang, người dân đã dựng ở đó một chái nhà - Điểm trường Huổi Chua bằng một trăm miếng ván gỗ mục, lợp mái tôn vào năm 2010. </p>
                        <div>
                            <figure>
                                <img src="img/ungho-1.1.jpg" alt="">
                                <figcaption>Điểm trường Huổi Chua xuống cấp, được người dân xây dựng tạm bơ tại xã Ma Thì Hồ, huyện Mường Chà (tỉnh Điện Biên)</figcaption>
                            </figure>
                        </div>
                        <p>Ngôi trường “trên đỉnh đồi ấy” cứ sau mỗi mùa mưa gió lại được chắp vá từ những miếng ván gỗ tạp được nhặt nhạnh từ nhiều nơi. Chúng nứt vỡ thành những mảng có thể rơi trúng đầu các em. Cứ thế, cuộc sống của thầy cô Huổi Chua là những tháng ngày “giữ lớp”. Giữ cho duy nhất một lớp học ghép của 25 em lớp 1+2 không sụp xuống vì gió; giữ cho những đứa trẻ ở lại, đến trường học chữ. Trên nền đất nện, có vài chiếc ghế băng, một tấm bảng nhỏ. Bức tường ván ghép vốn không chạm đến mái. Nắng chiếu qua những lỗ thủng khắp nơi. </p>
                        <div>
                            <figure>
                                <img src="img/ungho-1.2.jpg" alt="">
                                <figcaption>Điểm trường năm trên đỉnh đồi cao của bản. Để đến trường các em phải băng qua con đường đất dài 11,2km “nắng bụi mưa lầy”.</figcaption>
                            </figure>
                        </div>
                        <p>Ngày mùa, các thầy cô truyền nhau cách vận động học sinh đến trường. Nhà không có người làm nương, không có ai địu em, nấu cơm, chăn dê, đi học không để làm gì, những câu trình bày họ nghe đã quen. Những ca khó quá, các thầy cô ở Huổi Chua bày cho nhau làm một cái giấy thông báo, xin con dấu của xã và của trường. Họ đem đến nhà dọa: không cho con đi học là xã không cho vay vốn, không trợ cấp hộ nghèo, không chia ruộng nương cho làm nữa. Phụ huynh sợ, cho con đi học.</p>
                        <div>
                            <figure>
                                <img src="img/ungho-1.2.jpg" alt="">
                                <figcaption>Các em chăm chỉ học tập trong lớp học hoang sơ</figcaption>
                            </figure>
                        </div>
                        <strong>Chung dựng trường kiên cố tặng 25 em học sinh Huổi Chua</strong>
                        <p>Thấu hiểu được những vất vả, thiếu thốn của các em học sinh bản Huổi Chua, CHARITY FUND đã phối hợp cùng Trung tâm Tình Nguyện Quốc Gia, Dự án Sức mạnh 2000 và Dự án Nuôi Em lên kế hoạch xây mới ngôi trường với 02 phòng học, và 01 phòng công vụ, nhằm tiếp thêm động lực giúp thầy trò điểm trường vượt khó vươn lên, nâng cao chất lượng dạy và học.</p>
                        <p>Để làm được điều này, chúng tôi dự tính dự án cần tổng số tiền là 330,000,000 đồng. Hiện nay, nhà tài trợ tổ chức và cộng đồng địa phương đã cam kết tài trợ 210,000,000 đồng cho dự án. Chúng tôi mong muốn có thể gây quỹ thêm 120,000,000 đồng trên CHARITY FUND giúp mái trường mới sớm được khởi công xây dựng.</p>
                        <p>Bất kể số tiền nào đều là đáng quý, bất cứ đóng góp nào cũng đều là đáng trân trọng. Mọi sự đóng góp của bạn đều sẽ góp phần giúp các em nhỏ bản Huổi Chua an toàn, học hành trong một ngôi trường mới. Hãy chung tay cùng CHARITY ngay!</p>
                        <i>*CHARITY biết rằng còn rất nhiều hoàn cảnh khó khăn trên khắp đất nước của chúng ta cần được bảo trợ. Bạn hay các công ty hãy liên hệ với chúng tôi để cùng tài trợ, giúp đỡ  tạo nên một cộng đồng Việt Nam nhân ái nhé!</i>
                        <hr>
                        <h3>Nhà hảo tâm mới nhất</h3>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Số tiền</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              
                            </tbody>
                          </table>
                          <button class="read-more btn btn-primary" data-toggle="modal" data-target="#myModal-1">Xem thêm</button>
                          <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <strong class="modal-title" id="myModalLabel">Chi tiết danh sách ủng hộ</strong>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Nguyễn Quế Lân</td>
                                            <td>*******449</td>
                                            <td>1.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>Phạm Gia Huy</td>
                                            <td>*******888</td>
                                            <td>1.000đ</td>
                                          </tr>

                                          
                                        </tbody>
                                      </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                                </div>
                              </div>
                            </div>
                          </div>

                          <hr>
                        <h3>Nhà hảo tâm hàng đầu</h3>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Số tiền</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Nguyễn Quế Lân</td>
                                <td>*******449</td>
                                <td>1.000đ</td>
                              </tr>
                              <tr>
                                <td>Phạm Gia Huy</td>
                                <td>*******888</td>
                                <td>1.000đ</td>
                              </tr>
                              
                            </tbody>
                          </table>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="row">
                            <div class="col-12 donate-form box" id="box">
                                <h5>Thông tin quyên góp</h5>
                                <div class="money-content">
                                    <section >Tiến độ: <b style="color:#5AACA8">234.000.000đ</b></section>
                                    <section style="text-align: right;">Tổng: <b>500.000.000đ</b></section>
                                </div>
                                <div class="progress-bar-tab">
                                    <div class="progress">
                                        <div class="bar" style="width: 49%;"></div> 
                                    </div>
                                    <b>49%</b>
                                </div>
                                <div class="row time-content">
                                    <div class="col-6">Lượt quyên góp <br>
                                        <b>76.123</b> </div>
                                    <div class="col-6" style="padding-left: 90px;">Thời hạn còn <br>
                                        <b>31 Ngày</b> </div>
                                </div>
                                <div class="col-12 btn-content" style="padding: 0;">
                                    <button class="donate-btn btn btn-ungho" onclick="window.location.href='ungho.html' ">Ủng Hộ</button>
                                </div>
                                <div class="col-12 btn-content" style="padding: 0;">
                                    <button class="donate-btn btn  btn-info">Hướng dẫn Ủng hộ</button>
                                </div>
                                <hr>
                                <div class="text-company" style="font-weight: 600;">
                                    Đồng hành cùng dự án
                                </div>
                                <div class="col-12 ">
                                    <div class="box-company">
                                        <div class="icon-company">
                                                        <img src="img/icon-vku.png" alt="" class="img-fuild">
                                        </div>
                                            <div class="content-company">
                                                <div class="tittle">
                                                    <b>Trường đại học CNTT-TT Việt Hàn</b>  
                                                </div>
                                                <div class="content">
                                                    <i>Tự hào là trường đại học tại đà nẵng mang đến cống hiến và đóng góp</i> 
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="box-company">
                                        <div class="icon-company">
                                                        <img src="img/icon-kientruc.png" alt="" class="img-fuild">
                                        </div>
                                            <div class="content-company">
                                                <div class="tittle">
                                                    <b>Trường đại học Kiến Trúc</b>  
                                                </div>
                                                <div class="content">
                                                    <i>Tự hào là trường đại học tại đà nẵng mang đến cống hiến và đóng góp</i> 
                                                </div>
                                            </div>
                                    </div>
                                    <hr>
                                    <div class="box-company">
                                        <div class="icon-company">
                                                        <img src="img/icon-bachkhoa.jpg" alt="" class="img-fuild">
                                        </div>
                                            <div class="content-company">
                                                <div class="tittle">
                                                    <b>Trường đại học bách Khoa</b>  
                                                </div>
                                                <div class="content">
                                                    <i>Tự hào là trường đại học tại đà nẵng mang đến cống hiến và đóng góp</i> 
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  
        <script>
            window.onscroll = function () {fun_sticky()};
            var box = document.getElementById("box");
            var sticky = box.offsetTop+250;

            function fun_sticky(){
                if(window.pageYOffset >= sticky){
                    box.classList.add("sticky");
                    if(window.pageYOffset >=3150){
                        box.classList.remove("sticky");
                        box.classList.add("height-box");
                    }
                    else{
                        box.classList.remove("height-box");
                    }
                }
                else{
                    box.classList.remove("sticky");
                }
            }
        </script>
        

        
        <!-- SLIDER------------------------------- -->
        <div class="container-content slider-content" style="overflow-x: hidden">
            <div class="row">
                <div class="col-12 title text-center">
                    <h2 data-aos="zoom-in">Ủng hộ các trường hợp có hoàn cảnh khó khăn khác</h2>
                    <p data-aos="zoom-in-up">Tổ chức hàng đầu, an tâm tin tưởng những khoản ủng hộ sẽ đến tận tay những người có hoàn cảnh khó khăn.</p>
                </div>
            </div>
            <div class="container-slider">
                <ul id="autoWidth" class="cs-hidden">
                    <!-- 1------------------------------------------------ -->
                    <li class="item-a" >
                        <div class="box">
                            <div class="home">
                                home
                            </div>
                            <div class="next">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <img src="img/news-1.jpg" alt="">
                            <h5>Xây nhà tình thương cho các em nhỏ vùng quê</h5>
                            <p>Hiện nay các em nhỏ phải ở trong những ngôi nhà bằng 
                                rơm rạ...</p>
                            <div class="money-content">
                                <section>Tổng: <b>$30,000</b></section>
                                <section style="text-align: right;">Tiến độ: <b style="color:#5AACA8">$25,000</b></section>
                            </div>
                            <div class="progress-bar-tab">
                                <div class="progress">
                                    <div class="bar"></div> 
                                </div>
                                <b>90%</b>
                            </div>
                        <div class="footer-box">
                            <div class="avatar-group">
                                    <div class="avatar"><img src="img/avt1.jpg" alt="" class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt2.jpg" alt=""  class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt3.jpg" alt=""  class="avt-img"></div>  
                                    <div class="hidden-avatar">
                                        97+
                                    </div>
                            </div>
                            <div class="donate-slider">
                                <button class="donate-btn btn">Ủng hộ</button>
                            </div>
                            
                        </div>
                        
                        </div>
                    </li>
                    <!-- 2------------------------------------------------ -->
                    <li class="item-a">
                        <div class="box">
                            <div class="home">
                                home
                            </div>
                            <div class="next">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <img src="img/donate-2.jpg" alt="">
                            <h5>Xây dựng trường học và sân chơi cho trẻ mồ côi</h5>
                            <p>Trẻ em mồ coi từ nhỏ không có đầy đủ tình yêu thương từ 
                                các bậc...</p>
                            <div class="money-content">
                                <section>Tổng: <b>$30,000</b></section>
                                <section style="text-align: right;">Tiến độ: <b style="color:#5AACA8">$25,000</b></section>
                            </div>
                            <div class="progress-bar-tab">
                                <div class="progress">
                                    <div class="bar"></div> 
                                </div>
                                <b>90%</b>
                            </div>
                        <div class="footer-box">
                            <div class="avatar-group">
                                    <div class="avatar"><img src="img/avt3.jpg" alt="" class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt4.jpg" alt=""  class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt5.jpg" alt=""  class="avt-img"></div>  
                                    <div class="hidden-avatar">
                                        97+
                                    </div>
                            </div>
                            <div class="donate-slider">
                                <button class="donate-btn btn">Ủng hộ</button>
                            </div>
                            
                        </div>
                        
                        </div>
                    </li>
                    <!-- 3------------------------------------------------ -->
                    <li class="item-a">
                        <div class="box">
                            <div class="home">
                                home
                            </div>
                            <div class="next">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <img src="img/donate-3.jpg" alt="">
                            <h5>Giúp người nghèo trải nghiệm tiệc Buffe miễn phí</h5>
                            <p>Nhiều gia đình có thu nhập thấp không thể trải nghiệm được
                                các..</p>
                            <div class="money-content">
                                <section>Tổng: <b>$30,000</b></section>
                                <section style="text-align: right;">Tiến độ: <b style="color:#5AACA8">$25,000</b></section>
                            </div>
                            <div class="progress-bar-tab">
                                <div class="progress">
                                    <div class="bar"></div> 
                                </div>
                                <b>90%</b>
                            </div>
                        <div class="footer-box">
                            <div class="avatar-group">
                                    <div class="avatar"><img src="img/avt6.jpg" alt="" class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt7.jpg" alt=""  class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt8.jpg" alt=""  class="avt-img"></div>  
                                    <div class="hidden-avatar">
                                        97+
                                    </div>
                            </div>
                            <div class="donate-slider">
                                <button class="donate-btn btn">Ủng hộ</button>
                            </div>
                            
                        </div>
                        
                        </div>
                    </li>
                    <!-- 4------------------------------------------------ -->
                    <li class="item-a">
                        <div class="box">
                            <div class="home">
                                home
                            </div>
                            <div class="next">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <img src="img/donate-4.jpg" alt="">
                            <h5>Giúp trẻ em nghèo vùng Trà Giáp</h5>
                            <p>Cơn bão số 9 vừa qua được ví như cơn nổi giận đại hồng thủy 
                                để lại...</p>
                            <div class="money-content">
                                <section>Tổng: <b>$30,000</b></section>
                                <section style="text-align: right;">Tiến độ: <b style="color:#5AACA8">$25,000</b></section>
                            </div>
                            <div class="progress-bar-tab">
                                <div class="progress">
                                    <div class="bar"></div> 
                                </div>
                                <b>90%</b>
                            </div>
                        <div class="footer-box">
                            <div class="avatar-group">
                                    <div class="avatar"><img src="img/avt7.jpg" alt="" class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt8.jpg" alt=""  class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt10.jpg" alt=""  class="avt-img"></div>  
                                    <div class="hidden-avatar">
                                        97+
                                    </div>
                            </div>
                            <div class="donate-slider">
                                <button class="donate-btn btn">Ủng hộ</button>
                            </div>
                            
                        </div>
                        
                        </div>
                    </li>
                    <!-- 5------------------------------------------------ -->
                    <li class="item-a">
                        <div class="box">
                            <div class="home">
                                home
                            </div>
                            <div class="next">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <img src="img/donate-5.jpg" alt="">
                            <h5>Giúp trẻ em nghèo vùng Trà Giáp</h5>
                            <p>Cơn bão số 9 vừa qua được ví như cơn nổi giận đại hồng thủy 
                                để lại...</p>
                            <div class="money-content">
                                <section>Tổng: <b>$30,000</b></section>
                                <section style="text-align: right;">Tiến độ: <b style="color:#5AACA8">$25,000</b></section>
                            </div>
                            <div class="progress-bar-tab">
                                <div class="progress">
                                    <div class="bar"></div> 
                                </div>
                                <b>90%</b>
                            </div>
                        <div class="footer-box">
                            <div class="avatar-group">
                                    <div class="avatar"><img src="img/avt1.jpg" alt="" class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt2.jpg" alt=""  class="avt-img"></div>
                                    <div class="avatar"><img src="img/avt3.jpg" alt=""  class="avt-img"></div>  
                                    <div class="hidden-avatar">
                                        24+
                                    </div>
                            </div>
                            <div class="donate-slider">
                                <button class="donate-btn btn">Ủng hộ</button>
                            </div>
                            
                        </div>
                        
                        </div>
                    </li>
                </ul>
            </div>
            <script>
                $(document).ready(function() {
                var slider = $('#autoWidth').lightSlider({
                    autoWidth:true,
                    loop:true,
                    // auto:true,
                    slideMargin:3,
                    auto:true,
                
                    onSliderLoad: function() {
                        $('#autoWidth').removeClass('cS-hidden');
                    } 
                });

                $('#goToPrevSlide').click(function(){
                    slider.goToPrevSlide(); 
                });
                $('#goToNextSlide').click(function(){
                    slider.goToNextSlide(); 
                });
            });
            </script>
        </div>

     


        <!-- -------------------------  -->
        <!-- FOOTER ----------------------------- -->
        <?php include "include/footer.html"; ?>
        <!--button go to top-->
        <script>
            $(document).ready(function(){
            $(window).scroll(function(){
            var showAfter = 1000;
            if ($(this).scrollTop() > showAfter ) { 
            $('.go-to-top').fadeIn();
            } else { 
            $('.go-to-top').fadeOut();
            }
            });
            $('.go-to-top').click(function(){
            $('html, body').animate({scrollTop : 0},1000);
            return false;
            });
            
            });
        </script>
        <div class="go-to-top show box-shadow">
        <i class="fas fa-arrow-up"></i>
        </div>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
    
            $(function() { 
                AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
            

            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 2000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

            });
            window.addEventListener('load', AOS.refresh); });
                
        </script>


    
    </div>
   


    
</body>
</html>