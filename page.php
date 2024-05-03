<?php
    session_start();
    include('server.php');

    $sql = "SELECT * FROM time_db";
    $result = $conn->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style1.css">
  <link rel="stlesgeet" href="time.js">
  <script src="https://cdn.tailwindcss.com"></script>
  
  <style>
    /* ใส่สไตล์ตามต้องการ */
    
    .time-table {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
    }

    .time-table table {
      border-collapse: collapse;
    }

    .time-table th,
    .time-table td {
      padding: 10px;
      text-align: center;
      border: 1px solid #ddd;
    }

    .time-table td input[type="checkbox"] {
      display: block;
      margin: auto;
    }

    
  </style>
</head>

<body>
  <!-- navabar -->
  <nav>
    <div class="nav__logo">ระบบจองห้องเรียน | IE</div>
    <ul class="nav__links">
      <li class="link"><a href="index.php">Home</a></li>
      <li class="link"><a href="status_room.php">Statu Rooms</a></li>
      <li class="link"><a href="test.php">History</a></li>
      <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
    </ul>
  </nav>
  <!-- navabar end -->
  <header class="section__container header__container">
    <div class="header__image__container"></div>
  </header>
  <!-- infomation -->

  < <!-- infomation -->
  
    <div class="infomation">
  <section class=" flex items-center justify-center ">

    <form action="#" class=" flex flex-col  ">
      <br>
   
      <!-- input name -->
      <div class="flex gap-3">
     
        
      <div class="relative max-w-sm">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
     <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
      </svg>
  </div>
  <input  type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
      </div>
      <br>
      <div >

                        <label class=" mt-8 text-[#901B2D] p-2">เลือกเวลา :</label>
                        <select id="datestart" name="datestart" >
                        <?php foreach($result as $row) { ?>
                      <option value="<?=$row['ID'];?>">-<?=$row['Time'];?></option>
                    <?php } ?>
                       
                    </select>

                    <label class=" mt-8 text-[#901B2D] p-2">ถึง :</label>
                        <select id="dateend" name="dateend">
                        <?php foreach($result as $row) { ?>
                      <option value="<?=$row['ID'];?>">-<?=$row['Time'];?></option>
                    <?php } ?>
                       
                    </select>
                          

      </div>

      <br>
      <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">รายละเอียด :</label>
      <textarea id="message" rows="4" name="detail" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="รายละเอียด...."></textarea>
      <br>  
      <!-- button -->
      <button type="submit" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">ส่งการจอง</button>
      <br>  
      <!-- butoon END -->
      
  </form>
  </section>
  </div>
  </div>
</body>

</html>