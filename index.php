<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>EduTech | For better future</title>
</head>
<body>

    <!-- mobile -->
    <section class="md:hidden">

        <div class="flex justify-center items-center mt-10">
            <img src="./images/logo.png" alt="logo" class="w-[200px]">
        </div>
            <form class="flex justify-center flex-col mt-[70px]" method='post'>

                <div class="pb-[30px] px-[40px]">
                    <input type="text" name="username" placeholder="Login Id" class="border-b w-[90%]  text-xl pb-2 focus:outline-none focus:border-indigo-500">
                </div>
    
                <div class="pb-[30px] px-[40px]">
                    <input type="password" name="password" placeholder="Password" class="border-b w-[90%] text-xl pb-2 focus:outline-none focus:border-indigo-500">
                </div>

                <div class="flex justify-evenly items-center">
                     <a href="##" class="text-blue-600">Forgot Password?</a>
                     <button class="px-[18px] py-[7px] bg-blue-700 rounded text-white font-normal tracking-wide">LOGIN
                         <i class="ri-login-box-line text-xl"></i> </button>
                </div>
                
                <div class="mx-10 my-[45px]">
                    <button class="bg-blue-700 rounded flex items-center">
                        <div>
                            <img src="./images/google.webp" alt="" class="h-[40px] my-1">
                        </div>
                        <div class="text-white font-semibold p-2 py-[8px]">sign in with google</div>
                    </button>
                </div>
            </form>
    </section>

    <!-- Desktop -->
     <section class="max-md:hidden flex block">

        <div class="h-screen w-[60%]" style="background-image: url('./images/bg.jpg'); background-position: center center;        background-repeat: no-repeat; background-size: cover;">
        </div>   
        <div class="w-[40%] h-screen">
            <img src="./images/logo.png" alt="Logo" class="w-[250px] mx-auto mt-10">

            <form class="mt-[50px]" method="post">
                <div class="mx-12">
                    <input type="text" name="username" placeholder="Login Id" class="flex flex-col pb-1 border-b w-[80%] focus:outline-none focus:border-indigo-500">
                </div>
                <div class="py-5 mx-12">
                    <input type="password" name="password" placeholder="Password" class="flex flex-col pb-1 border-b w-[80%] focus:outline-none focus:border-indigo-500">
                </div>

                <div class="flex justify-evenly w-[90%] items-center pt-5">
                    <a href="##" class="text-blue-600">Forget Password?</a>
                    <button class="px-[18px] py-[7px] bg-blue-600 rounded font-normal text-white tracking-wide">LOGIN
                        <i class="ri-login-box-line text-xl"></i>
                    </button>
                </div>

                <div class="my-[45px]"></div>
                    <button class="bg-blue-700 rounded flex items-center mx-[50px]">
                        <div>
                            <img src="./images/google.webp" alt="" class="h-[40px] my-1">
                        </div>
                        <div class="text-white font-semibold p-2 py-[8px] ">sign in with google</div>
                    </button>
                </div>

            </form>

        </div>
     </section>
     
</body>
</html>

<?php

    session_start(); // Start the session at the beginning
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['loggedin'] = false;
    
        // Get the username and password from POST and sanitize input
        $username = $_POST['username'];
        $password = $_POST['password'];
    
       if(empty($username && $password)){
           echo "<script>alert('Please enter your userid or password')</script>";
       }
       else{
                   // Create a new MySQLi connection
        $conn = new mysqli("localhost", "root", "admin", "edutech", 3306);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM student WHERE Adm_no = ? AND Password = ?");
        $stmt->bind_param("ss", $username, $password); // Bind parameters
        $stmt->execute();
        $result = $stmt->get_result();
    
        // Check if a user exists with the provided credentials
        if ($result->num_rows == 1) { 
            $_SESSION['loggedin'] = true;
            header('location: student/student_index.php');
            exit(); // Always use exit after header redirection
        } else {
          echo "<script>alert('Wrong Username or Password');</script>";
        }
    
        // Close the statement and connection
        $stmt->close();
        $conn->close();
       }
    }
?>