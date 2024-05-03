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
    <title>Login</title>
</head>

<body>
    <section class="bg-gray-100 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
            <!-- form -->
            <div class="w-1/2 px-8">
                <h2 class="font-bold text-2xl text-[#901B2D]">ล็อคอิน</h2>
                <p class="text-sm mt-4 text-[#901B2D]"">ล็อคอิน.</p>

                    <form action=" login_db.php"class="  flex flex-col gap-4" method="post">
                    <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h3>
                            <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                        </h3>
                    </div>
                    <?php endif ?>

                    <input class="p-2 mt-8 rounded-x1 border " type="text" name="username" placeholder="ชื่อผู้ใช้">
                    <input class="p-2 rounded-x1 border" type="password" name="password" placeholder="รหัส">
                    <button type="submit" name="login_user"
                        class="bg-[#901B2D] rounded-xl text-white py-2">ล็อคอิน</button>
                    </form>

                    <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                        <hr class="border-gray-400">
                        <p class="text-center">หรือ</p>
                        <hr class="border-gray-400">
                    </div>
                    <div class="mt-3 text-xs flex justify-between items-center">
                        <p class="text-[#901B2D]">เมื่อคุณไม่มีบัญชี..</p>
                        <a class="py-2 px-5 bg-[#901B2D] text-white border rounded-xl" href="register.php">สมัคร</a>


                    </div>
            </div>
            <!-- img -->
            <div class="sm:block hidden w-1/2">
                <img class="rounded-2xl" src="aw_eng_logo-01.png" alt="">

            </div>
        </div>

    </section>
</body>

</html>