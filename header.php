<?php
   //nhúng vào các trang bán hàng
   if(isset($message)){//hiển thị thông báo sau khi thao tác với biến message được gán giá trị
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>';//đóng thẻ này
      }
   }
?>
<style>
   .changepw-btn {
      border-radius: 4px;
      font-size: 20px;
      background: blue;
      color: #fff;
      padding: 7px 12px;
   }
   .changepw-btn:hover {
      opacity: 0.7;
   }
</style>
<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="https://www.facebook.com/ngochuymarketing" class="fab fa-facebook-f" target="_blank"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <p><a href="login.php">Đăng nhập mới</a> | <a href="register.php">Đăng ký</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div style="padding: 0" class="flex">
         <a href="home.php" class="logo"><img width="170px" height="130px" src="./images/logo_gt.png"></a>

         <nav class="navbar">
            <a href="home.php">Trang chủ</a>
            <a href="about.php">Thông tin</a>
            <a href="shop.php">Cửa hàng</a>
            <a href="contact.php">Liên hệ</a>
            <a href="orders.php">Đơn hàng</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart);
               $total= 0;
               while($fetch_total=mysqli_fetch_assoc($select_cart)){
                  $total+=$fetch_total['quantity'] * $fetch_total['price'];
               }
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> <span>(<?php echo number_format($total,0,',','.' ); ?> VND)</span> </a>
         </div>

         <div style="z-index: 1000;" class="user-box">
            <p>Tên : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <a href="change_password.php" class="changepw-btn">Đổi mật khẩu</a>
            <a style="margin-top: 13px;" href="logout.php" class="delete-btn">Đăng xuất</a>
         </div>
      </div>
   </div>

</header>