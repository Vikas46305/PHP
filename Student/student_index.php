<?php
  session_start();
  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../");
    exit();
  }
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./script.js"></script>
    <title>Student</title>
</head>
<body>

    <div class="flex">
    <!-- Menu Part -->
        <aside class="w-[3.9%] h-screen bg-gray-800 items-center max-sm:w-[16%]">

            <ul class="flex flex-col text-white font-semibold gap-2 mt-8">

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                  <img src="../images/college.png" alt="College" class="w-8 h-8 mx-2">
                  <a href="##" class="truncate">College Info</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                  <img src="../images/courses.png" alt="Courses" class="w-8 h-8 mx-2">  
                  <a href="##" class="truncate">Courses</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                  <img src="../images/Admit.png" alt="Admit" class="w-8 h-8 mx-2 mt[-10]">
                  <a href="##" class="truncate">Admit Card</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                    <img src="../images/fee.png" alt="Fee" class="w-8 h-8 mx-2">
                    <a href="##" class="truncate">Fee</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                  <img src="../images/Assign.png" alt="Courses" class="w-8 h-8 mx-2">  
                  <a href="##" class="truncate">Assignment</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                    <img src="../images/Attendance.png" alt="Attendance"class="w-8 h-8 mx-2">
                    <a href="##" class="truncate">Attendance</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                  <img src="../images/performance.png" alt="Courses" class="w-8 h-8 mx-2">  
                  <a href="##" class="truncate">Performance</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                  <img src="../images/Time.png" alt="Courses" class="w-8 h-8 mx-2">  
                  <a href="##" class="truncate">Time Table</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                    <img src="../images/survey.png" alt="Feedback" class="w-8 h-8 mx-2">
                    <a href="##" class="truncate">Feedback</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                  <img src="../images/report.png" alt="Courses" class="w-8 h-8 mx-2">  
                  <a href="##" class="truncate">My Report Card</a>
                </div>

                <div class="flex mx-2 hover:bg-indigo-600 py-2">
                    <img src="../images/complaint.png" alt="Complaint"class="w-8 h-8 mx-2">
                    <a href="##" class="truncate">Grienvance Complaint</a>
                </div>

            </ul>
        </aside> 

    <!-- Main Part -->
           <div>
          <!-- Header -->
               <header class="py-3 px-3 shadow flex flex-cols justify-between items-center">
                  <button class="px-[8px] py-[3px] border border-black rounded hover:bg-indigo-800 hover:text-white">
                    <i class="ri-menu-line"></i>
                  </button>
                  <img src="../images/logo.png" alt="logo" class="h-[40px] max-md:hidden">

            <!-- Image Menu -->
                  <div class="flex items-center gap-2">
                    <p  class="max-md:hidden"> Name Here </p>
                    <button class="mr-[50px] relative max-md:mr-[10px]"><img src="../images/google.webp" alt="" class="w-10 h-10 rounded-full" id="Toggle_btn"></button>  
                  </div>

                  <div class="absolute bg-red-400 p-[1px] right-2 top-[63px] ease-in hidden" id="Show_Hide">
                      <div class="bg-gray-700 p-2 text-white">
                          <h2>Name: Vikas Sharma</h2>
                          <h2>Admission no: 21221322</h2>
                          Roll no: 2266008145
                          <hr>
                      </div>
                      <div class="bg-white p-1 font-semibold text-center">
                        <a href="./logout.php">Logout <i class="ri-logout-circle-r-line"></i></a>
                      </div>
                  </div>
               </header> 
               
           <!-- Main Options --> 
               <div class="flex flex-wrap justify-start px-[80px] gap-[60px] mt-5 text-center max-md:px-1 max-md:gap-[13px]">
                  <a href="##" class="font-semibold">
                    <img src="../images/college.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">College Info
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/courses.png" alt="Courses"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Courses
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/Admit.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Admit Card
                  <a>
  
                  <a href="##" class="font-semibold">
                    <img src="../images/Assign.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Assignment
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/Attendance.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Attendance
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/fee.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Fee
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/performance.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Performance
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/Time.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Time Table
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/survey.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Feedback
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/complaint.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Complaint
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/report.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Report Card
                  <a>

                  <a href="##" class="font-semibold">
                    <img src="../images/placement.png" alt="Admit Card"
                    class="w-[110px] h-[110px] rounded-full shadow hover:shadow-lg max-md:w-[50px] max-md:h-[50px] max-md:mx-auto">Placement
                  <a>

               </div>
           </div>

        <!-- JQUERY --> 
           <script>

              $(document).ready(function(){
                $("#Toggle_btn").click(function(){
                $("#Show_Hide").toggle();
                });
              });

           </script>
    </div>

</body>
</html>