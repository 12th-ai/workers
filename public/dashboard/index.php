<?php include 'sess.php'?>
<?php 
   if(isset($_GET['l'])){
      session_destroy();
      header('location:../login');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <script src="../../tailwind.js"></script>
   <!-- <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon"> -->
   <script src="../app.js"></script>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include 'nav.php' ?>
   <main class="">
      <?php include './header.php'?>
      <div>
         <h1 class="text-[17px] mb-[20px]">
            Recent Jobs
            <a href="" class="text-[16px] text-themeClr">[ View All ]</a>
         </h1>
         <div class="grid gap-y-[20px]">
            <div class="border py-3 text-[15px] px-5 rounded-md">
               <a href="" class="font-medium mb-[10px] flex text-[17px] text-defClr">Job Title To Be Put Here</a>
               <p>Location: Nyarugenge</p>
               <p>Salary: 20000 FRW</p>
               <div class="mt-[20px] flex gap-x-[20px] items-center">
                  <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-white">Apply</a>
                  <a href="" class="">More Details</a>
               </div>
            </div>
            <div class="border py-3 text-[15px] px-5 rounded-md">
               <a href="" class="font-medium mb-[10px] flex text-[17px] text-defClr">Job Title To Be Put Here</a>
               <p>Location: Nyarugenge</p>
               <p>Salary: 20000 FRW</p>
               <div class="mt-[20px] flex gap-x-[20px] items-center">
                  <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-white">Apply</a>
                  <a href="" class="">More Details</a>
               </div>
            </div>
            <div class="border py-3 text-[15px] px-5 rounded-md">
               <a href="" class="font-medium mb-[10px] flex text-[17px] text-defClr">Job Title To Be Put Here</a>
               <p>Location: Nyarugenge</p>
               <p>Salary: 20000 FRW</p>
               <div class="mt-[20px] flex gap-x-[20px] items-center">
                  <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-white">Apply</a>
                  <a href="" class="">More Details</a>
               </div>
            </div>
            <div class="border py-3 text-[15px] px-5 rounded-md">
               <a href="" class="font-medium mb-[10px] flex text-[17px] text-defClr">Job Title To Be Put Here</a>
               <p>Location: Nyarugenge</p>
               <p>Salary: 20000 FRW</p>
               <div class="mt-[20px] flex gap-x-[20px] items-center">
                  <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-white">Apply</a>
                  <a href="" class="">More Details</a>
               </div>
            </div>
            <div class="border py-3 text-[15px] px-5 rounded-md">
               <a href="" class="font-medium mb-[10px] flex text-[17px] text-defClr">Job Title To Be Put Here</a>
               <p>Location: Nyarugenge</p>
               <p>Salary: 20000 FRW</p>
               <div class="mt-[20px] flex gap-x-[20px] items-center">
                  <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-white">Apply</a>
                  <a href="" class="">More Details</a>
               </div>
            </div>
         </div>
      </div>
   </main>
</body>
</html>