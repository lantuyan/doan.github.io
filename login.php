<?php
session_start();
?>
    <?php
            //  $conn =mysqli_connect("localhost:3306","root","117006lan","bwd") or die("Không thể kết nối đến database");
            //  mysqli_query($conn,"SET NAMES 'UTF8'");
            include "connection.php";
            if (isset($_POST["btn_submit_login"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                // Chống tấn công- làm sạch các thông tin - xóa tag html, ký tự đặt biệt 
                $username = strip_tags($username);
                $username = addslashes($username);
                $password = strip_tags($password);
                $password = addslashes($password);
                if ($username == "" || $password =="") {
                    echo "<script type='text/javascript'>alert('Tài khoản hoặc mật khẩu không được để trống');</script>";
                }
                else {
                    $sql = "select * from users where username ='$username' and password= '$password' and service = '1'";
                    $query = mysqli_query($conn,$sql);
                    $num_rows = mysqli_num_rows($query);
                    if($num_rows > 0){
                        $_SESSION ['username'] =$username;
                        header('Location: /admin.php');
                    }  
                    else{
                        $sql = "select * from users where username ='$username' and password= '$password' and service is null ";
                        $query = mysqli_query($conn,$sql);
                        $num_rows = mysqli_num_rows($query);
                        if($num_rows == 0){
                            echo "<script type='text/javascript'>alert('Tên đăng nhập hoặc mật khẩu không đúng');</script>";
                        }  
                        else{
                            $_SESSION ['username'] =$username;
                            header('Location: /user.php');
                           
                        }
                    }
                  
                }
            }
            if (isset($_POST["btn_submit_regis"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $name = $_POST["name"];
                $email = $_POST["email"];
                if ($username == "" || $password =="" || $name == "" || $email =="" ) {
                    echo "<script type='text/javascript'>alert(' không được để trống');</script>";
                }
                else {
                    // Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
                    $kt=mysqli_query($conn, $sql);
                    if(mysqli_num_rows($kt)  > 0){
                        echo "<script type='text/javascript'>alert(' Tài khoản đã tồn tại');</script>";
					}
                    else{
                        $sql = "insert INTO users (username,password, name,email) VALUES('$username', '$password', '$name','$email')";
                        $query = mysqli_query($conn,$sql);
                        echo "<script type='text/javascript'>alert(' Đăng kí thành công');</script>";
                    }
                   
                }
            }
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
        <!-- FORM login  -->
        <style>
        </style>
        <link rel="stylesheet" href="css/loginform.css">
         <div class="container-login animate-zoom" id="container-login" >
           <div class="forms-container">
             <div class="signin-signup">
               
               <form action="login.php" class="sign-in-form" method="POST">
                 <h2 class="title">Đăng nhập</h2>
              
                 <div class="input-field">
                   <i class="fas fa-user"></i>
                   <input type="text" placeholder="Nhập tài khoản" name="username" id="taikhoan"/>
                 </div>
                 <div class="input-field">
                   <i class="fas fa-lock"></i>
                   <input type="password" placeholder="Nhập mật khẩu" name="password" id="matkhau"/>
                 </div>
                 <input name="btn_submit_login" type="submit" value="Đăng nhập" class="btn solid">
                 <p class="social-text">Đăng nhập với các nền tảng khác</p>
                 <div class="social-media">
                   <a href="#" class="social-icon">
                     <i class="fab fa-facebook-f"></i>
                   </a>
                   <a href="#" class="social-icon">
                     <i class="fab fa-twitter"></i>
                   </a>
                   <a href="#" class="social-icon">
                     <i class="fab fa-google"></i>
                   </a>
                   <a href="#" class="social-icon">
                     <i class="fab fa-linkedin-in"></i>
                   </a>
                 </div>
               </form>
               <form action="login.php" class="sign-up-form" method="POST">
                 <h2 class="title">Đăng kí</h2>
                 <div class="input-field">
                   <i class="fas fa-user"></i>
                   <input type="text" placeholder="Tên đăng nhập" name="username" />
                 </div>
                 <div class="input-field">
                   <i class="fas fa-address-card"></i>
                   <input type="text" placeholder="Họ và tên" name="name" />
                 </div>
                 <div class="input-field">
                   <i class="fas fa-envelope"></i>
                   <input type="email" placeholder="Email" name="email" />
                 </div>
                 
                 <div class="input-field">
                   <i class="fas fa-lock"></i>
                   <input type="password" placeholder="Mật khẩu" name="password" />
                 </div>
                 <input name="btn_submit_regis" type="submit" value="Đăng kí" class="btn solid">
                 
                 <p class="social-text">Đăng kí với các nền tảng khác</p>
                 <div class="social-media">
                   <a href="#" class="social-icon">
                     <i class="fab fa-facebook-f"></i>
                   </a>
                   <a href="#" class="social-icon">
                     <i class="fab fa-twitter"></i>
                   </a>
                   <a href="#" class="social-icon">
                     <i class="fab fa-google"></i>
                   </a>
                   <a href="#" class="social-icon">
                     <i class="fab fa-linkedin-in"></i>
                   </a>
                 </div>
               </form>
             </div>
           </div>
           <div class="panels-container">
             <div class="panel left-panel">
               <div class="content">
                 <h3>Bạn là người mới?</h3>
                 <p>
                   Bấm vào đăng kí ngay để có thể khởi tạo các thông tin và danh mục ủng hộ!
                 </p>
                 <button class="btn transparent" id="sign-up-btn">
                   Đăng kí
                 </button>
                 <button type="button"  id="button-login1" class="btn btn-primary " onclick="come_index()">Quay lại</button>
               </div>
               <img src="img/log.svg" class="image" alt="" />
             </div>
             <div class="panel right-panel">
               <div class="content">
                 <h3>Bạn đã đăng kí?</h3>
                 <p>
                   Đăng nhập và cùng website đồng hành đưa đến những niềm vui dựa trên sự giúp đỡ của bạn!
                 </p>
                 <button class="btn transparent" id="sign-in-btn">
                   Đăng nhập
                 </button>
                 <button type="button"  id="button-login1" class="btn btn-primary " onclick="come_index()" >Quay lại</button>
               </div>
               <img src="img/register.svg" class="image" alt="" />
             </div>
           </div>
        </div>
     
         <script>
             const sign_in_btn = document.querySelector("#sign-in-btn");
            const sign_up_btn = document.querySelector("#sign-up-btn");
            const container = document.querySelector(".container-login");
            sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
            });
            sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
            });
            function on_login() {
            document.getElementById("container-login").classList.remove("container-off");
            document.getElementById("container-login").classList.add("container-on");
            }
            function off_login() {
            document.getElementById("container-login").classList.remove("container-on");
            document.getElementById("container-login").classList.add("container-off");
            }
         </script>
        <script>
         function dangnhap() {
             var tk =document.getElementById("taikhoan").value;
             var mk =document.getElementById("matkhau").value;
             console.log(tk);
             if(tk=="admin" && mk =="admin"){
                 console.log(tk);
                 alert("Đăng nhập thành công - tài khoản người quản trị");
                 window.location.href="admin.html";
             }
             else if(tk=="user" && mk =="user"){
                 console.log(tk);
                 alert("Đăng nhập thành công - tài khoản người dùng");
                 window.location.href="user.html";
              }
             else{
                 alert("Sai tài khoản hoặc mật khẩu vui lòng thử lại!");
             }
         }
         function come_index(){
            location.replace("/index.php");
         }
     </script>
  
    </div>



 



    
</body>
</html>



<