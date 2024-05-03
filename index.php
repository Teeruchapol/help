<?php
  session_start();
  include('server.php');

  if (!isset($_SESSION['username'])){
    $_SESSION['msg'] = "กรุณาเข้าสู่ระบบ";
    header( 'location: login.php' );
  }


  if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("Location: login.php");

  }
  $sql = "SELECT * FROM rooms";
  $result = $conn->query($sql);
  $sql = "SELECT * FROM img";
  $img = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <title>ระบบจองห้อง| IE</title>
</head>


<body>
  <!-- notification -->



  <!-- logo -->
  <nav>
    <div class="nav__logo">ระบบจองห้องเรียน | IE</div>
    <ul class="nav__links">
      <li class="link"><a href="index.html">Home</a></li>
      <li class="link"><a href="#">Statu Rooms</a></li>
      <li class="link"><a href="#">History</a></li>
      <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>

    </ul>
  </nav>
  <!-- logo end -->

  <!-- header -->
  <header class="section__container header__container">
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="success">
      <h3>
        <?php
      echo $_SESSION['success'];
      unset($_SESSION['success']);
      ?>
      </h3>
    </div>
    <?php endif ?>
    <div class="header__image__container">
      <div class="header__content">
        <h1>ยินดีต้อนรับ</h1>
        <p>กรุณาเลือกห้องเรียนที่ประสงค์จะทำการจอง</p>
      </div>

  </header>
  <!-- header end -->

  <!-- room card -->
  <section class="section__container popular__container">
      
    <h2 class="section__header">ห้องเรียน | ประชุม</h2>
    
    <div class="room__grid">
      
    <?php while($row = $result->fetch_assoc()): ?>
  <?php $row1 = $img->fetch_assoc(); ?>
  <div class="room__card">  
    <a href="page.php"><img src="<?php echo $row1['img_dir']; ?>" /></a>
    <div class="room__content">
      <div class="room__card__header">
        <a href="page.php""><h4><?php echo $row['nameroom']; ?></h4></a>
      </div>
      <p><?php echo $row['cap']; ?></p>
    </div>
  </div>
<?php endwhile ?>

    </div>
  
  </section>
  <!-- room card end -->
  <!-- connect -->
  <!-- end conncet -->


</body>

</html>