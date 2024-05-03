
<?php
session_start(); 
include('server.php') 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>

<body>
    <section class="bg-gray-100 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
            <!-- form -->
            <div class="w-full py-16 px-12">
                <h2 class="font-bold text-2xl text-[#901B2D]">สมัคร</h2>
                <p class="text-sm mt-4 text-[#901B2D]"">สมัครบัญชีผู้ใช้ห้อง</p>
                <br>
                




                                    <!-- form -->
                
                <form action="register_db.php" method="post" class="flex flex-col gap-4">
                        <?php include('error.php') ; ?>
                        <?php if(isset($_SESSION['error'])) : ?>
                            <div class="error">
                              <h3>
                                <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>
                              </h3>
                            </div>
                            <?php endif ?>
                    <div>
                        <label class=" mt-8 text-[#901B2D] p-2">เลือกคำนำหน้า :</label>
                        <select id="prefix" name="prefix">
                        <option value="">กรุณาเลือก</option>
                        <option value="นาย">นาย</option>
                        <option value="นาง">นาง</option>
                        <option value="ไม่ระบุ">ไม่ระบุ</option>
                    </select>
                          </div>
                
                    <!-- gender END --> 
                    

                        <!-- input name -->
                        <div class="flex gap-3">
                            <input class="p-2 mt-8 border" type="text" name="first_name" placeholder="ชื่อ">
                            <input class="p-2 mt-8 border" type="text" name="last_name" placeholder="นามสกุล">
                        </div>
                        <!-- input name END -->

                        <!-- input BD -->
                        <input class="p-2 border" type="text" name="bd" placeholder="วันเดือนปีเกิด">
                        <!-- input BD END -->

                        <!-- input gender -->
                        <div>
                            <label class=" mt-8 text-[#901B2D] p-2">เพศ :</label>
                    <select id="gender" name="gender">
                        <option value="">กรุณาเลือก</option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                        </select>
                          </div>
                        <!-- input gender END -->

                        <!-- input infomation -->
                        <input class="p-2 border" type="tel" name="phone" placeholder="เบอร์โทรศัพท์">
                        <input class="p-2 border" type="email" name="email" placeholder="อีเมล์">
                        <input class="p-2 border" type="text" name="location" placeholder="ที่อยู่">
                        <input class="p-2 border" type="text" name="postcode" placeholder="รหัสไปรษณีย์">
                        <!-- input infomation END -->
                          
                          <!-- job -->
                          <div>
                            <label class=" mt-8 text-[#901B2D] p-2">อาชีพ :</label>
                    <select id="jobs" name="jobs">
                        <option value="">กรุณาเลือก</option>
                        <option value="นักศึกษา">นักศึกษา</option>
                        <option value="บุคลากร">บุคลากร</option>
                        <option value=">อาจารย์">อาจารย์</option>
                    </select>
                          </div>
                          <!-- job end -->

                          <!-- username and pw -->
                          <input class="p-2 border" type="text" name="username" placeholder="สร้างชื่อผู้ใช้">
                          <input class="p-2 border" type="password" name="password" placeholder="สร้างรหัสผ่าน">
                          <br>
                          <!-- username and pw END -->

                        <!-- button -->
                        <button type="submit" name="register_user" class="bg-[#901B2D] rounded-xl text-white py-2">สมัคร</button>
                        <!-- butoon END -->
                    </form>
                        

                        <!-- Or -->
                    <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                        <hr class="border-gray-400">
                        <p class="text-center">หรือ</p>
                        <hr class="border-gray-400">
                    </div>
                    <div class="mt-3 text-xs flex justify-between items-center">
                        <p class="text-[#901B2D]">เมื่อคุณมีบัญชีอยู่แล้ว..</p>
                        <a class="py-2 px-5 bg-[#901B2D] text-white border rounded-xl" href="index.php">ล็อคอิน</a>
                            
                    </div>
                    <!-- or END -->
            </div>
        </div>
    </section>
</body>

</html>