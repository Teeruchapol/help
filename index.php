<?php
  session_start();

  if (!isset($_SESSION['username'])){
    $_SESSION['msg'] = "กรุณาเข้าสู่ระบบ";
    header( 'location: login.php' );
  }


  if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("Location: login.php");

  }


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
  <div class="error">
  <?php if (isset($_SESSION['success'])) : ?>
    <h3>
      <?php
      echo $_SESSION['success'];
      unset($_SESSION['success']);
      ?>
    </h3>
    <?php endif ?>
    </div>

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
    <div class="header__image__container">
      <div class="header__content">
        <h1>ยินดีต้อนรับ</h1>
        <p>กรุณาเลือกห้องเรียนที่ประสงค์จะจทำการจอง</p>
      </div>

  </header>
  <!-- header end -->

  <!-- room card -->
  <section class="section__container popular__container">
    <h2 class="section__header">ห้องเรียน | ประชุม</h2>
    <div class="room__grid">
      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class="room__card__header">
            <h4>ห้อง</h4>
          </div>
          <p>.......</p>
        </div>
      </div>
      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class="room__card__header">
            <h4>ห้อง</h4>

          </div>
          <p>......</p>
        </div>
      </div>
      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class="room__card__header">
            <h4>ห้อง</h4>

          </div>
          <p>.....</p>
        </div>
      </div>
      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class="room__card__header">
            <h4>ห้อง</h4>

          </div>
          <p>.....</p>
        </div>
      </div>
      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class="room__card__header">
            <h4>ห้อง</h4>

          </div>
          <p>....</p>
        </div>
      </div>
      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class="room__card__header">
            <h1>ห้อง</h1>

          </div>
          <p>....</p>
        </div>
      </div>

      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class="room__card__header">
            <h4>ห้อง</h4>
          </div>
          <p>.......</p>
        </div>
      </div>

      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class="room__card__header">
            <h4>ห้อง</h4>
          </div>
          <p>.......</p>
        </div>
      </div>

      <div class="room__card">
        <a href=""><img src="aw_eng_secondary_icon-03.png" alt="room" /></a>
        <div class="room__content">
          <div class=roomr__card__header">
            <h4>ห้อง</h4>
          </div>
          <p>.......</p>
        </div>
      </div>

    </div>
  </section>
  <!-- room card end -->
  <!-- connect -->
  <!-- end conncet -->
    

</body>

</html>