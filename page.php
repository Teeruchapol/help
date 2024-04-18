<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      button {
        padding: 20px 50px;
        font-size: 1.5rem;
        cursor: pointer;
        border: 0px;
        background: transparent;
        position: relative;
        margin: 20px;
        transition: all 0.25s ease;
      }
        .btn-1{
          color:#ffff;
          overflow: hidden;
          border-radius: 30px;
          box-shadow: 0px -0px 0px 0px rgba(192, 2, 11, 0.5),
          0px 0px 0px 0px rgba(212, 39, 255, 0.5);
        }
        .btn-1:hover{
          transform: translate(0,-6px);
          box-shadow: 10px -10px 25px 0px rgba(243, 55, 55, 0.5),-10px 10px 25px 0px rgba(255, 39, 244, 0.5);
        }
        .btn-1:hover::after{
          transform: rotate(150deg);
        }
        .btn-1::after{
          content: "";
          width: 400px;
          height: 400px;
          position: absolute;
          top: -50px;
          left: -100px;
          background-color: #901B2D;
          background-image:linear-gradient(225deg, #901B2D 0%, #901B2D 50%, #901B2D 100%);
          z-index:-1;
          transition: all 0.25s ease;
        }
      
    </style>
</head>
<body>
    <!-- navabar -->
    
    <nav>
        <div class="nav__logo">ระบบจองห้องเรียน | IE</div>
          <ul class="nav__links">
            <li class="link"><a href="index.html">Home</a></li>
            <li class="link"><a href="#">Statu Rooms</a></li>
            <li class="link"><a href="#">History</a></li>
            <li class="link"><a href="#">Logout</a></li>
          </ul>
      </nav>
      <!-- navabar end -->
      <header class="section__container header__container">
      <div class="header__image__container"></div>
    </header>



      <!-- infomation -->
    <div class="infomation">
  <section class="bg-white flex items-center justify-center">
    <form action="#" class=" flex flex-col gap-">
      <h1>ข้อมูลห้อง : รองรับ 50 คน</h1>
      <br>
      <!-- input name -->
      <div class="flex gap-3">
        <h1>วันที่จอง</h1>
        <input type="date"id="date-picker">
        <h1>วันที่สิ้นสุด</h1>
        <input type="date" id="date-picker">
        
      </div>
      <br>
      <h1>รายละเอียด :</h1>
      <textarea class="shadow" id="title" name="title" rows="7" cols="20" style="width: 403px; height: 190px;"></textarea>
      
      <!-- button -->
      <br>
      <button class="btn-1">submit</button>
      <br>
      <!-- butoon END -->
  </form>
  </section>
  </div>
    
    
</body>
</html>