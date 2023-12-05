<?php
   include 'config.php';

   session_start();

   $user_id = $_SESSION['user_id']; //tạo session người dùng thường

   if(!isset($user_id)){// session không tồn tại => quay lại trang đăng nhập
      header('location:login.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thông tin</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <style>
      .head {
         background: url(./images/head-img.png) no-repeat;
         background-size: cover;
         background-position: center;
      }
   </style>
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading head">
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img style="border-radius: 4px;" height="350px" src="images/info_img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Tại sao lại có PhoneStore.</h3>
         <p>Chúng tôi đem lại những sản phẩm mới, chất lượng nhất để phục vụ khách hàng, đặt chữ tín lên đầu.</p>
         <p>Cập nhật tin tức mỗi giây, mỗi phút, mỗi giờ, mỗi ngày.</p>
         <a href="contact.php" class="btn">Liên hệ</a>
      </div>

   </div>

</section>


<section class="authors">

   <h1 class="title">Thành viên của PhoneStore</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/huynhnhu.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f" target="_blank"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Phạm Quốc Dương </h3>
      </div>
   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>