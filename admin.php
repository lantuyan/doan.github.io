<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Admin
    </title>
    <!-- JQUERY -->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <!---->
    <link rel="shortcut icon" href="/img/logo-mb.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">
    <!--ICON TITLE-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    
    <?php include "include/sidebar-admin.php"; ?>

    <!-- MAIN CONTENT -->
    <div class="main">
        
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                quản lý
            </div>
        </div>
        <div class="main-content">
            <div class="row content-1">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Tổng lượt ủng hộ
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    6578
                                </div>
                                <i class='bx bx-credit-card-front'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                TỈ lệ chuyển đổi
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    30.5%
                                </div>
                                <i class='bx bx-chat'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Tổng tiền ủng hộ
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    1.234.500.000đ
                                </div>
                                <i class='bx bx-line-chart'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                Lượt truy cập hằng ngày
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    690
                                </div>
                                <i class='bx bx-user'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
            </div>

            <div class="row content-2">
                <div class="col-3 col-md-6 col-sm-12">
                    <!-- TOP PRODUCT -->
                    <div class="box f-height">
                        <div class="box-header">
                            Sản phẩm ủng hộ quỹ
                        </div>
                        <div class="box-body">
                            <ul class="product-list">
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./img/product1.jpg" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">
                                                <a href=""></a>Tăm tre</div>
                                            <div class="text-second">Dụng cụ vệ sinh</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="product-sales">$0,99</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./img/product2.jpg" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">Giày adidas</div>
                                            <div class="text-second">Cloths</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="product-sales">$51,49</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./img/product3.jpg" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">Trái cây theo mùa</div>
                                            <div class="text-second">Fruits</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="product-sales">$5,99</div>
                                    </div>
                                </li>
                                <li class="product-list-item">
                                    <div class="item-info">
                                        <img src="./img/product4.jpg" alt="product image">
                                        <div class="item-name">
                                            <div class="product-name">Gạo quảng nam</div>
                                            <div class="text-second">Food</div>
                                        </div>
                                    </div>
                                    <div class="item-sale-info">
                                        <div class="text-second">Sales</div>
                                        <div class="product-sales">$5,930</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- % PRODUCT -->
                </div>
                <div class="col-4 col-md-6 col-sm-12">
                    <!-- CATEGORY CHART -->
                    <div class="box f-height">
                        <div class="box-header">
                            Tỉ lệ ủng hộ
                        </div>
                        <div class="box-body">
                            <div id="category-chart"></div>
                        </div>
                    </div>
                    <!-- END CATEGORY CHART -->
                </div>
                <div class="col-5 col-md-12 col-sm-12">
                    <!-- CUSTOMERS CHART -->
                    <div class="box f-height">
                        <div class="box-header">
                            Lượt ủng hộ hàng tháng
                        </div>
                        <div class="box-body">
                            <div id="customer-chart"></div>
                        </div>
                    </div>
                    <!-- END CUSTOMERS CHART -->
                </div>
                <div class="col-12">
                    <!-- ORDERS TABLE -->
                    <div class="box">
                        <div class="box-header">
                            Ủng hộ gần dây
                        </div>
                        <div class="box-body overflow-scroll">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Họ và tên</th>
                                        <th>Ngày</th>
                                        <th>Trạng thái</th>
                                        <th>Trạng thái thanh toán</th>
                                        <th>Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./img/user-image.png" alt="user image">
                                                <span>Nguyễn Quế Lân</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-ready">
                                                Sẵn sàng
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-pending">
                                                <div class="dot"></div>
                                                <span>Đang chờ</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./img/user-image-2.png" alt="user image">
                                                <span>Phạm Gia Huy</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Đã chuyển
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Đã thanh toán</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./img/user-image-3.png" alt="user image">
                                                <span>evelyn</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Đã chuyển
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Đã thanh toán</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./img/user-image-2.png" alt="user image">
                                                <span>John doe</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Đã chuyển
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Đã thanh toán</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                    <tr>
                                        <td>#2345</td>
                                        <td>
                                            <div class="order-owner">
                                                <img src="./img/user-image-3.png" alt="user image">
                                                <span>evelyn</span>
                                            </div>
                                        </td>
                                        <td>2021-05-09</td>
                                        <td>
                                            <span class="order-status order-shipped">
                                                Đã chuyển
                                            </span>
                                        </td>
                                        <td>
                                            <div class="payment-status payment-paid">
                                                <div class="dot"></div>
                                                <span>Đã thanh toán</span>
                                            </div>
                                        </td>
                                        <td>$123.45</td>
                                    </tr>
                                </tbody>
                            </table>
                                
                        </div>
                    </div>
                    <!-- END ORDERS TABLE -->
                </div>
            </div>
        </div>
        
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- APP JS -->
    <script src="./js/app.js"></script>


    <!--MODAL DỰ ÁN-->
    <div class="modal fade"  id="add-duan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable " role="document">
          <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" id="myModalLabel">Thêm dự án</strong>
              <button type="button" class="close" id="off" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form >
                    <div class="form-group">
                        <label>Loại Chương Trình</label>
                        <select class="form-control" name="exampleFormControlSelect1"
                            id="exampleFormControlSelect1">
                            <option  value="1">...</option>
                            <option  value="2">Covid-19</option>
                            <option   value="3">Bão lũ</option>
                            <option  value="4">Khiếm khuyết</option>
                            <option  value="4">Khó Khăn</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="form_name validationDefault01">Tên Chương Trình</label>
                        <input id="form_name validationDefault01" type="text" name="name" class="form-control"  >
                        <!-- <div class="help-block with-errors"></div> -->
                    </div>
                    <div class="form-group">
                        <label for="form_message">Nội Dung</label>
                        <textarea id="form_message" name="message" class="form-control" rows="4" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Số Tiền Kêu Gọi</label>
                        <input type="text" class="form-control" name="currency-field" id="currency-field"  value=""
                            data-type="currency" >
                    </div>
                    <div>
                        <label>Upload File</label> <br>
                        <input type="file"  id="files" name="files" multiple>
                    </div>
                    
                    <div class=" container js-file-list ">

                    </div>
                </form>
                    
            </div>
            <div class="modal-footer">
              <button class="btn btn-success" id="btnsubmit">Đăng tải</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--MODAL SUCCESS-->
    <div id="Success" class="modal fade" role="dialog" data-backdrop="false">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                     <p> <i class="bi bi-check-circle-fill"></i> Đăng tải dự án thành công.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning confirmclosed">Thoát</button>
                    <button type="button" class="btn btn-success continue">Tiếp Tục</button>
                </div>
            </div>
        </div>
    </div>
    <!--upload img-->

    <script>
$(document).ready(function(){
  $('#files').on('change', function() {
    var files = $(this)[0].files;

    for(var i = 0; i < files.length; i++) {
      var file = files[i];
      var fileReader = new FileReader();
      fileReader.onload = (function(fileParams) {
        return function(event) {
          var str = '<div class="col-4">' +
            '<span class="js-file-name"></span><br>' +
            '<span class="js-file-size"></span> (Byte)<br>' +
            '<img class="img-thumbnail js-file-image" style="width: 100%; height: 100%">' +
          '</div>';
          $('.js-file-list').append(str);

          var imageSrc = event.target.result;
          var fileName = fileParams.name;
          var fileSize = fileParams.size;

          $('.js-file-name').last().text(fileName);
          $('.js-file-size').last().text(fileSize);
          $('.js-file-image').last().attr('src', imageSrc);
        };
      })(file);  
      fileReader.readAsDataURL(file);
    }  
  });
});
    </script>
    <!---->

        <script>
        $(document).ready(function () {
	    $('#btnsubmit').click(function () {
	        $('#Success').modal('show');
	    });

	    $('.confirmclosed').click(function () {
	        $('#Success').modal('hide');
	        $('#add-duan').modal('hide');
	    });
        $('.continue').click(function(){
            $('#Success').modal('hide');
        });
	});
    </script>

 <!--Currency-->
    <script>
        $("input[data-type='currency']").on({
            keyup: function () {
                formatCurrency($(this));
            },
            blur: function () {
                formatCurrency($(this), "blur");
            }
        });


        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") { return; }

            // original length
            var original_len = input_val.length;

            // initial caret position 
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side;
                }

                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = left_side + "." + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = input_val;

                // final formatting
                if (blur === "blur") {
                    input_val;
                }
            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>


    

</body>

</html>