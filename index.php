<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Fund</title>

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

   
    <!-- Animation scroll  library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    

</head>
<body>
    <div class="container-fluid" style="position: relative;">
       
        <?php 
            include "include/header.html";
        ?>

    

        <!-- Phần 2. FEATURES-->
        <div class="container features-content" style="overflow-x:hidden ;">
            <div class="col-12 text-center" >
                <h2 data-aos="fade-up" data-aos-duration="1000">Đặc điểm ưu trội của website</h2>
            </div>
            <div class="row text-center our-featurs-card ">
                <div class="col-12 col-md-6 col-lg-4 featurs-card card1" data-aos="zoom-in">
                    <div class="icon icon1">
                        <i class="fas fa-hands-helping icon1"></i>
                        </div>
                    
                    <h4>Tình nguyện viên</h4>
                    <p>Trở thành một tình nguyện viên ngay tại nhà 
                    Giúp đỡ những gia đình và cộng đồng khó khăn 
                    Cuộc sống tốt môi trường tốt</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 featurs-card card2" data-aos="zoom-in">
                <div class="icon icon2">
                    <i class="fas fa-business-time icon2"></i>
                </div>
                <h4>Ủng hộ nhanh chóng</h4>
                <p>Website đã đơn giản hóa cách thức ủng hộ mà không
                    cần phải đến một cơ quan tổ chức thứ ba nào khác. 
                    Hãy ghi danh và quyên góp ủng hộ ngay. <br>
            

                </p>
            </div>
                <div class="col-12 col-md-6 col-lg-4 featurs-card card3" data-aos="zoom-in" >
                    <div class="icon icon3">
                    <i class="fas fa-hand-holding-heart icon3"></i>
                    </div>
                    <h4>Công khai</h4>
                    <p>
                    Tất cả hoạt động gây quỹ ủng hộ, đóng góp đều 
                    được công khai minh bạch đến tất cả mọi người. 
                    Chia đi để nhận lại, hãy ủng hộ ngay hôm nay.</p>
                </div>
                <div class="col text-center btn-ungho col-12" data-aos="zoom-out-up">
                    <button type="button" class="btn btn-primary button-submit" id="btn-ungho">Ủng hộ</button>
                </div>
                <div class="video" data-aos="zoom-in">
                    <div class="container" >
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/OYWD3MaQ8UQ" data-target="#myModal">
                        
                    </button>
                    <span></span>
                
                    </div>
                </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>         -->
                            <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                            </div>
                        </div>
                        </div>
                    </div> 
                <!-- Thiết lập hành vi cho nút plays -->
                <script>
                    $(document).ready(function() {
                    // Gets the video src from the data-src on each button
                    var $videoSrc;  
                    $('.video-btn').click(function() {
                        $videoSrc = $(this).data("src");
                    });
                    console.log($videoSrc);
                    // when the modal is opened autoplay it  
                    $('#myModal').on('shown.bs.modal', function (e) {
                    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
                    })
                    // stop playing the youtube video when I close the modal
                    $('#myModal').on('hide.bs.modal', function (e) {
                        // a poor man's stop video
                        $("#video").attr('src',$videoSrc); 
                    }) 
                    // document ready  
                    });
                </script>
        </div>
        </div>
        <!-- Phần 3 - Our Mission- "Mục đích,Lý do, nhiệm vụ" -->
        <div class="container our-mission">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000" >
                <h2>Cơ hội trao đi để nhận lại</h2>
            </div>
            <div class="row content" style="overflow-x: hidden">
                <div class="col-12 col-md-6 col-lg-5 content-img" data-aos="slide-right">
                
                </div>
                <div class="col-12 col-md-6 col-lg-7" data-aos="slide-left">
                    <div class="title">
                        <p>Company Ú - Nái chào mừng</p>
                        <h4>Phát triển chuyên mục từ thiện</h4>
                    </div>
                    <div class="text-content">
                        <p>Chính thức khởi động từ ngày 4/8/2020,
                            chiến dịch “Chung tay cùng Đà Nẵng” đã 
                            nhanh chóng nhận được sự ủng hộ của đông đảo người dùng Ví MoMo.
                            Chỉ trong 8 ngày đầu tiên, chiến dịch đã kêu gọi quyên góp thành công 500 triệu đồng,
                            hoàn thành mục tiêu ban đầu đề ra. Thật tuyệt vời khi ở nơi tiền tuyến, 
                            chúng ta có những chiến sĩ áo trắng hết lòng chống dịch, nơi hậu phương,
                                hàng triệu người sẵn sàng tiếp sức mạnh, đồng lòng sẻ chia!</p>
                        <p>
                            Số tiền quyên góp sẽ được Ví MoMo chuyển cho Ủy ban Mặt trận Tổ quốc
                            TP. Đà Nẵng vào thứ năm hàng tuần. Trong ngày 13/08 vừa qua,
                            gần 500 triệu đã được chuyển đi, hỗ trợ kịp thời cho mặt trận 
                            chống dịch Đà Nẵng.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter-content  -->
        <div class="container-fluid counter-content" style="overflow-x: hidden">
            <div class="row counter">
                <div class="col-12 col-md-6 counter-left"data-aos="slide-right">
                    <div class="row">
                        <div class="col-6">
                            <div class="icon">
                                <i class="fas fa-cloud-showers-heavy"></i>
                            </div>
                            <div class="text" id="counter">
                                <div class="counter-value" data-count="500">0</div>
                                <div>
                                    Thiên tai mỗi năm
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="icon">
                                <i class="fas fa-house-damage"></i>
                            </div>
                            <div class="text" id="counter">
                                <div class="counter-value" data-count="5000">0</div>
                                <div>
                                    Gia đình vô gia cư
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 counter-right" data-aos="slide-left">
                    <div class="row">
                        <div class="col-6">
                            <div class="icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="text" id="counter">
                                <div class="counter-value" data-count="10">0</div>
                                <div>
                                Trẻ em suy dinh dưỡng
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="text" id="counter">
                                <div class="counter-value" data-count="700000">0</div>
                                <div>
                                    Trẻ em không được đến trường
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nhảy số  -->
            <script>
            
                $(window).scroll(function() {
                var oTop = $('#counter').offset().top - window.innerHeight;
                var a = 0;
                if (a == 0 && $(window).scrollTop() > oTop) {
                    $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                        },
                        {
                        duration: 5000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }
                        });
                    });
                    a = 1;
                }
                });

                
            </script>
        </div>
        <!-- SLIDER------------------------------- -->
        <div class="container-content slider-content" style="overflow-x: hidden">
            <div class="row">
                <div class="col-6 title">
                    <h2 data-aos="zoom-in">Ủng hộ các trường hợp có hoàn cảnh khó khăn</h2>
                    <p data-aos="zoom-in-up">Tổ chức hàng đầu, an tâm tin tưởng những khoản ủng hộ sẽ đến tận tay những người có hoàn cảnh khó khăn.</p>
                </div>
                <div class="col-6 text-center div-btn" data-aos="zoom-out-up">
                    <button class="btn btn-prev" type="button" id="goToPrevSlide">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button class="btn btn-next" type="button" id="goToNextSlide">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </div>
            </div>
            <div class="container-slider"data-aos="slide-left">
                <ul id="autoWidth" class="cs-hidden">
                    <!-- 1------------------------------------------------ -->
                    <li class="item-a">
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

        <!-- NEWS - Tin tức  -->
        <div class="container news" style="overflow:hidden ;">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2>Tin tức mới nhất</h2>
            </div>
            <div class="row" >
                <div class="col-12 col-md-6 col-lg-4 news-box" data-aos="zoom-out-up">
                    <img src="img/tintuc-1.jpg" alt="">
                    <a href="#" data-toggle="modal" data-target="#myModal-1">
                        <h5 class="title">Trao quà cho đồng bào thiểu số vùng biên có hoàn cảnh khó khăn</h5>
                    </a>
                    <div class="time">30/05/2021 - 289 lượt xem</div>
                    <div class="content">Ngày 30/5, Phòng Cảnh sát thi hành án hình sự và hỗ trợ tư pháp - Công an
                         tỉnh Bình Phước cho biết vừa phối hợp với đơn vị tài trợ tổ chức chuyến dân vận...</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 news-box"data-aos="zoom-out-up">
                    <img src="img/tintuc-2.jpg" alt="">
                    <a href="#"  data-toggle="modal" data-target="#myModal-2">
                        <h5 class="title">Nghệ sĩ sân khấu chung sức chống dịch tại Bắc Giang, Bắc Ninh</h5>
                    </a>
                    <div class="time">29/05/2020 - 289 lượt xem</div>
                    <div class="content">Ngày 29/5, NSND Trịnh Thị Thúy Mùi, NSND Thúy Hường, NSƯT Xuân Bắc … đã đại diện Hội Nghệ sĩ Sân khấu Việt Nam
                         trao tặng toàn bộ số tiền và hiện vật...</div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 news-box"data-aos="zoom-out-up">
                    <img src="img/tintuc-3.jpg" alt="">
                    <a href="#"  data-toggle="modal" data-target="#myModal-3">
                        <h5 class="title">Kim Oanh Group tặng 2 nhà tình thương cho hộ nghèo Vĩnh Long</h5>
                    </a>
                    <div class="time">28/05/2020 - 289 lượt xem</div>
                    <div class="content">Trong khuôn khổ chương trình hoạt động thiện nguyện tại ĐBSCL, Quỹ Từ thiện Kim Oanh
                        bàn giao 2 căn nhà tình thương cho 2 hộ nghèo...</div>
                </div>
            </div>
            <div class="col text-center box-read-more col-12" data-aos="zoom-out-up">
                <a href="news.html">
                    <button type="button" class="btn btn-read-more" id="btn-read">Đọc Thêm</button>
                </a>
            </div>
        </div>
        <hr>
        <!-- Phần câu hỏi  -->
        <style>
            .content-question .card-header {
                background-color: var(--slider-container);
            }
            .content-question .card-header .btn-link{
                color: var(--text-color);
                font-weight: 600;
                opacity: 0.7;
                width: 100%;
                text-align: left;
            }
            .content-question .card-header .btn-link:hover{
                text-decoration: none;
                color: #5AACA8;
            }
            .content-question .card-header .btn-link:focus{
                text-decoration: none;
            }
            .content-question .card-body{
                font-size: 15px;
                opacity: 0.7;
                background-color: var(--bg-color);
            }
        </style>
        <div class="container content-question" style="padding-top: 20px; padding-bottom: 20px;overflow:hidden ;" >
            <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000" >
                <h2>Câu hỏi thường gặp</h2>
            </div>
            <div class="col-12" data-aos="zoom-out-up">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                            CHARITY FUND là gì?
                          </button>
                        </h5>
                      </div>
                  
                      <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            CHARITY FUND là website có tó tính năng giải quyết nhu cầu thiết yếu của người dân cho việc ủng hộ quyên góp. Dựa vào nhu cầu cần thiết của bộ phận những nhà hảo tâm, xong lại không tìm được nơi để yên tâm ủng hộ đóng góp cũng như tiếp xúc được với những hoàn cảnh khó khăn. CHARITY FUND sẽ giải quyết được vấn đề cấp bách này.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            CHARITY FUND có thu lợi nhuận từ việc gây quỹ không?
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          CHARITY FUND hoàn toàn không thu bất kì lợi nhuận nào từ việc gây quỹ. Đảm bảo 100% số tiền từ nhà hảo tâm đến với các tổ chức bảo trợ và hỗ trợ cho cộng đồng nhân dân.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Ai có thể ủng hộ quyên góp đến trên CHARITY FUND?
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                         Mọi người dân đều có thể ủng hộ và quyên góp trên CHARITY FUND, không phân biệt số tiền lớn hay nhỏ, không cần biết bạn là ai, bạn đêu có thể ủng hộ đến với cộng đồng người dân Việt Nam thông qua CHARITY FUND. Hãy ủng hộ ngay!
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading4">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Cách liên hệ gửi các hoàn cảnh khó khăn đến với CHARITY FUND?
                            </button>
                          </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                          <div class="card-body">
                            Chúng tôi hỗ trợ việc người dân liên hệ, cung cấp, gửi đến những hình ảnh và nội dung của những con người có hoàn cảnh khó khăn, những hộ dân bị thiệt hại do sự cố, đồng bào bị ảnh hưởng các loại bệnh tật bẩm sinh không mong muốn. <br>Hãy gửi thông tin liên hệ tại phần Liên Hệ của website CHARITY. <br> Hoặc liên hệ qua email: <i>nguyenquelan2405@gmail.com hoặc huydeptrai@gmail.com</i> ngay để được hỗ trợ.
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="heading5">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Làm thế nào để tôi có thể xem thông tin tiền của tôi đã ủng hộ
                        </button>
                      </h5>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                      <div class="card-body">
                            Hệ thống chúng tôi ghi lại thông tin của nhà hảo tâm một cách công khai minh bạch. Các chiếc dịch được lưu trữ và bạn có thể tìm kiếm thông tin của mình đã ủng hộ tại mục Ủng Hộ -> Chiếc dịch Ủng Hộ -> Thông tin nhà hảo tâm. <br>
                            Nếu bạn thường xuyên ủng hộ và quyên góp hàng tháng, hãy đăng kí cho mình một tài khoản, hệ thống sẽ thống kê, ghi nhận các chiếc dịch bạn đã tham gia. Bạn hoàn toàn có thể đăng nhập để theo dõi những chiếc dịch quyên góp ủng hộ mình đã tham gia.
                      </div>
                    </div>
                  </div>
                 
              </div>
            </div>
        </div>

        <hr>
        <!-- Phần tổ chức  -->
        <div class="container company-content" style="overflow:hidden ;">
            <div class="company">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2>Các tổ chức phi lợi nhuận</h2>
                </div>
                <div class="row text-center ">
                    <div class="col-12 col-md-6 col-lg-4">
                    <div class="box-company" data-aos="zoom-out-up" >
                        <div class="icon-company">
                                        <img src="img/icon-vku.png" alt="" class="img-fuild">
                        </div>
                            <div class="content-company">
                                <div class="tittle">
                                        Trường đại học CNTT-TT Việt Hàn
                                </div>
                                <div class="content">
                                    Tự hào là trường đại học tại đà nẵng cống hiến và đóng góp
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                    <div class="box-company" data-aos="zoom-out-up">
                        <div class="icon-company">
                                <img src="img/icon-bachkhoa.jpg" alt="" class="img-fuild">
                        </div>
                            <div class="content-company">
                                <div class="tittle">
                                    Trường đại học Bách Khoa
                                </div>
                                <div class="content">
                                    Tự hào là trường đại học tại đà nẵng cống hiến và đóng góp
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                    <div class="box-company" data-aos="zoom-out-up">
                        <div class="icon-company">
                                <img src="img/icon-spkt.png" alt="" class="img-fuild">
                        </div>
                            <div class="content-company">
                                <div class="tittle">
                                    Trường đại học Sư Phạm Kỹ Thuật
                                </div>
                                <div class="content">
                                    Tự hào là trường đại học tại đà nẵng cống hiến và đóng góp
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                    <div class="box-company" data-aos="zoom-out-up">
                        <div class="icon-company">
                                <img src="img/icon-supham.png" alt="" class="img-fuild">
                        </div>
                            <div class="content-company">
                                <div class="tittle">
                                    Trường đại học Sư Phạm
                                </div>
                                <div class="content">
                                    Tự hào là trường đại học tại đà nẵng cống hiến và đóng góp
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                    <div class="box-company" data-aos="zoom-out-up">
                        <div class="icon-company">
                                <img src="img/icon-kinhte.jpg" alt="" class="img-fuild">
                        </div>
                            <div class="content-company">
                                <div class="tittle">
                                    Trường đại học Kinh Tế
                                </div>
                                <div class="content">
                                    Tự hào là trường đại học tại đà nẵng cống hiến và đóng góp
                                </div>
                            </div>
                    </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="box-company" data-aos="zoom-out-up">
                            <div class="icon-company">
                                <img src="img/icon-kientruc.png" alt="" class="img-fuild">
                            </div>
                            <div class="content-company">
                                <div class="tittle">
                                    Trường đại học Kiến Trúc
                                </div>
                                <div class="content">
                                    Tự hào là trường đại học tại đà nẵng cống hiến và đóng góp
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

            
        <!-- FORM login  -->
  
    </div>



    <!--MODAL 1-->
    <div class="modal fade box-modal" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <strong class="modal-title" id="myModalLabel">Chi tiết bài viết</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="box-title">
                <h4 class="title">Trao quà cho đồng bào thiểu số vùng biên có hoàn cảnh khó khăn</h4>
            </div>
            <div class="time">09:45 30/05/2021</div>
            <hr>
            <p>
            <strong>
                Ngày 30/5, Phòng Cảnh sát thi hành án hình sự và hỗ trợ tư pháp - Công an
                 tỉnh Bình Phước cho biết vừa phối hợp với đơn vị tài trợ tổ chức chuyến dân
                  vận đến với đồng bào nghèo tại các xã Đồng Tâm, xã Tân Phước, huyện Đồng Phú và xã Nghĩa Trung, huyện Bù Đăng.
            </strong>
            </p>
            <div>
                <figure>
                    <img src="img/tintuc-1.1.jpg" alt="">
                    <figcaption style="text-align: center;">Chuẩn bị quà trao tặng cho các gia đình có hoàn cảnh khó khăn</figcaption>
                </figure>
            </div>

            <div>
                <p>
                    Trong chuyến công tác này, đoàn đã trao tặng 75 phần quà (mỗi xã 25 phần) với tổng trị giá gần 30 triệu đồng, gồm: gạo, mỳ tôm, khẩu trang y tế và các nhu yếu phẩm khác... 
                    cho các gia đình có hoàn cảnh khó khăn trên địa bàn 3 xã Đồng Tâm, xã Tân Phước và xã Nghĩa Trung.
                </p>
                <div>
                    <figure>
                    <img src="img/tintuc-1.jpg" alt="">
                    <figcaption>Trao quà cho các gia đình có hoàn cảnh khó khăn tại xã Đồng Tâm.</figcaption>
                    </figure>
                </div>
                <p>
                    Trung tá Nguyễn Văn Dự, Trưởng Phòng Cảnh sát thi hành án hình sự và hỗ trợ tư pháp cho biết, 
                    với mong muốn phần nào chia sẽ những khó khăn với một số gia đình trong thời điểm dịch bệnh 
                    COVID-19 đang có những diễn biến phức tạp. Đồng thời, qua đây kịp thời động viên, tuyên truyền người dân luôn nêu cao tinh thần cảnh giác trong công tác phòng, chống tội phạm và phòng, chống dịch COVID-19, góp phần giữ cho cuộc sống bình yên. 
                </p>
                <div>
                   <figure>
                    <img src="img/tintuc-1.2.jpg" alt="">
                    <figcaption>Trao quà cho các gia đình có hoàn cảnh khó khăn tại xã Tân Phước</figcaption>
                   </figure>
                </div>
                <p>
                    "Đơn vị đã xây dựng kế hoạch vận động nhà tài trợ cùng thực hiện chuyến công tác này để chào mừng thành công cuộc bầu cử đại biểu Quốc hội khóa XV và Hội đồng nhân dân các cấp nhiệm kỳ 2021-2026",
                     Trung tá Nguyễn Văn Dự cho biết.
                </p>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>

   <!--MODEL 2-->
<div class="modal fade box-modal" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <strong class="modal-title" id="myModalLabel">Chi tiết bài viết</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="box-title">
                <h4 class="title">Nghệ sĩ sân khấu chung sức chống dịch tại Bắc Giang, Bắc Ninh</h4>
            </div>
            <div class="time">15:45 29/05/2021</div>
            <hr>
            <p>
            <strong>
                Ngày 29/5, NSND Trịnh Thị Thúy Mùi, NSND Thúy Hường, NSƯT Xuân Bắc … đã đại diện Hội Nghệ sĩ Sân khấu Việt Nam  trao tặng toàn bộ số tiền và hiện vật do các nghệ sĩ, tác giả, khán giả ủng hộ nhân dân, đội ngũ y bác sĩ chiến sĩ trên tuyến đầu chống dịch tại Bắc Giang, Bắc Ninh.
            </strong>
            </p>
            <div>
                <figure>
                    <img src="img/tintuc-2.1.jpg" alt="">
                    <figcaption>NSƯT Xuân Bắc cùng các thành viên trong đoàn của Hội Nghệ sĩ Sân khấu Việt Nam vận chuyển hàng hỗ trợ vùng Kinh Bắc.</figcaption>
                </figure>
            </div>

            <div>
                <p>
                    Trước đó, hưởng ứng lời kêu gọi “Toàn dân tham gia ủng hộ phòng, chống dịch COVID-19”, phát huy truyền thống tương thân tương ái của dân tộc Việt Nam, Hội Nghệ sĩ Sân khấu Việt Nam đã phát động ủng hộ nhân dân và lực lượng tuyến đầu chống dịch tại vùng Kinh Bắc. '
                </p>
                <p>
                    Sau 5 ngày phát động, Ban tổ chức đã quyên góp được 351.700.000 đồng và một số nhu yếu phẩm, vật tư chống dịch.
                </p>
                <p>
                    NSND Trịnh Thị Thúy Mùi, Chủ tịch Hội Nghệ sĩ Sân khấu Việt Nam các thành viên trong Ban tổ chức hết sức xúc động trước tấm lòng, tình cảm  của các văn nghệ sĩ và khán giả. 
                </p>
                <div>
                    <figure>
                    <img src="img/tintuc-2.2.jpg"  alt="">
                    <figcaption>Đại diện của Hội Nghệ sĩ Sân khấu Việt Nam trao tặng tiền, vật dụng ủng hộ huyện Việt Yên, Bắc Giang</figcaption>
                    </figure>
                </div>
                <div>
                    <figure>
                    <img src="img/tintuc-2.jpg" alt="">
                    <figcaption>Đoàn trao tặng tiền và hiện vật cho tỉnh Bắc Ninh</figcaption>
                    </figure>
                </div>
                <p>
                    Thông qua Uỷ ban Mặt trận Tổ quốc Việt Nam tỉnh Bắc Ninh, Liên đoàn lao động tỉnh Bắc Ninh, Hội Nghệ sĩ Sân khấu Việt Nam đã trao tặng công nhân, nhân viên y tế tại Bắc Ninh 150 triệu đồng, 100 thùng phở ăn liền, 5.000 khẩu trang xuất khẩu, 800 khẩu trang dành cho nhân viên y tế cùng nhiều ô đại che nắng ngoài trời, nước chanh muối, chai sát khuẩn.
                </p>
                <p>
                    Thông qua Uỷ ban Mặt trận Tổ quốc huyện Việt Yên, tỉnh Bắc Giang, Hội đã trao tặng công nhân, nhân dân huyện Việt Yên 200 triệu đồng, 7.000 khẩu trang xuất khẩu,  230 thùng phở, mỳ ăn liền, 200 hộp thịt cùng nhiều ô che nắng cỡ lỡn, nước chanh muối, chai sát khuẩn.
                </p>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>

   <!--MODEL 3-->
<div class="modal fade box-modal" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <strong class="modal-title" id="myModalLabel">Chi tiết bài viết</strong>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="box-title">
                <h4 class="title">Kim Oanh Group tặng 2 nhà tình thương cho hộ nghèo Vĩnh Long</h4>
            </div>
            <div class="time">11:00 28/05/2021</div>
            <hr>
            <p>
            <strong>
                Trong khuôn khổ chương trình hoạt động thiện nguyện tại ĐBSCL, ngày 28/5 Quỹ Từ thiện Kim Oanh (Tập đoàn Địa ốc Kim Oanh) bàn giao 2 căn nhà tình thương cho 2 hộ nghèo xã Bình Ninh, huyện Tam Bình; trị giá hỗ trợ xây nhà 50 triệu đồng/căn.
            </strong>
            </p>
            <div>
                <figure>
                    <img src="img/tintuc-3.jpg" alt="">
                    <figcaption>Ông Nguyễn Thuận - Chủ tịch danh dự Quỹ Từ thiện Kim Oanh trao nhà tình thương cho bà Tống Thị Tư</figcaption>
                </figure>
            </div>

            <div>
                <p>
                    6 năm trước căn nhà của gia đình bà Tống Thị Tư (67 tuổi) ở ấp An Thạnh bị mưa gió giật sập. Bà Tư đã hết tuổi lao động, người chồng mắc bệnh hiểm nghèo nhiều năm không biết xoay sở đâu ra tiền để dựng lại nhà nên đành xin ở nhờ nhà người thân. Bà Tư cho biết ở tuổi này chỉ mong được sống những ngày cuối đời trong căn nhà của chính mình.
                </p>
                <p>
                    Đồng cảnh ngộ, bà Nguyễn Thị Vàng (72 tuổi) ấp Mỹ An sống trong căn nhà gỗ xuống cấp trầm trọng. Hàng ngày vất vả chạy chợ kiếm tiền về nuôi đứa cháu mồ côi ăn học nên để cất được cái nhà khang trang hơn là điều mơ ước quá lớn.
                </p>
                <p>
                    Nhận được căn nhà khang trang, 2 gia đình bà Tống Thị Tư và bà Nguyễn Thị Vàng không giấu nỗi sự xúc động vì từ nay không còn lo tìm chỗ “che nắng che mưa”.
                </p>
                <div>
                    <figure>
                    <img src="img/tintuc-3.1.jpg"  alt="">
                    <figcaption>Bà Đặng Thị Kim Oanh - đại diện Tập Đoàn Kim Oanh trao quà trong một hoạt động từ thiện</figcaption>
                    </figure>
                </div>
                <p>
                    Tại lễ bàn giao 2 căn nhà, ông Nguyễn Thuận - Chủ tịch danh dự Quỹ Từ thiện Kim Oanh đã chúc mừng 2 hộ nghèo có chỗ ở tốt hơn, Tập đoàn Địa ốc Kim Oanh đã trao tặng thêm một số vật chất và gia dụng cần thiết giúp bà con vượt qua khó khăn.
                </p>
                <p>
                    Cùng ngày, Quỹ Từ thiện Kim Oanh đã đến thăm, trao tặng 10 triệu đồng cho mái ấm Thiện Tâm, huyện Bình Minh, tỉnh Vĩnh Long. Cơ sở nhân đạo này đang chăm lo miễn phí cho 50 bệnh nhân khó khăn, mắc bệnh hiểm nghèo. 
                </p>
                <div style="background-color: #eef4f8; padding: 20px 18px; font-style: italic;">
                    <p>
                        Quỹ Từ thiện Kim Oanh ra mắt hoạt động ngày 15/5/2016 dưới sự bảo trợ của Kim Oanh Group (gồm bốn đơn vị thành viên: Công ty cổ phần Địa ốc Kim Oanh, Công ty cổ phần Đầu tư và Phát triển Thuận Lợi, Công ty cổ phần Đầu tư và Phát triển Phú Thuận Lợi và Công ty TNHH Xây dựng An Phước Bình Dương) cùng một số nhà hảo tâm đã từng bước mở rộng địa bàn.
                    </p>
                    <p>
                        Sau 5 năm, Quỹ đã thực hiện xây dựng 546 căn nhà tình nghĩa, tình thương; 12 công trình giáo dục; 26 công trình công cộng; trao 6.941 suất học bổng; 3.421 phần quà cho những hoàn cảnh kém may mắn; 5.045 phần quà cứu trợ đồng bào vùng lũ; hỗ trợ 209 lượt tư liệu sản xuất giúp người khó khăn vươn lên thoát nghèo bền vững với tổng kinh thực hiện 149,3 tỷ đồng
                    </p>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
   


    
</body>
</html>



<