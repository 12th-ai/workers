<?php include 'sess.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="../../tailwind.js"></script>
   <!-- <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon"> -->
   <script src="../../jquery-3.6.0.min.js"></script>
   <script src="../app.js" defer></script>
   <link rel="stylesheet" href="style.css">
   <title>Jobs</title>
</head>
<body>
   <?php include 'nav.php' ?>
   <main>
      <?php include 'header.php'?>
      <div>
         <div class="flex gap-x-4">
            <button class="text-[15px] border px-4 py-2 rounded-sm bg-themeClr border-themeClr activeBtn tabButton" data-tab="all">All Available Jobs (20)</button>
            <button class="tabButton text-[15px] border px-4 py-2 rounded-sm" data-tab="my">My - Applied Jobs</button>
            <button class="tabButton text-[15px] border px-4 py-2 rounded-sm" data-tab="rejected">My - Rejected Jobs</button>
         </div>
         <div class="grid grid-cols-[repeat(3,100%)] gap-x-10 overflow-x-hidden">
            <div id="all" class="eachTab">
               <div class="mt-[30px]">
                  <h1 class="text-[17px]">All Available Jobs (10)</h1>
                  <hr class="my-3">
               </div>
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
               </div>
            </div>
            <div id="my" class="eachTab">
               <div class="mt-[30px]">
                  <h1 class="text-[17px]">My - Applied Jobs (10)</h1>
                  <hr class="my-3">
               </div>
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
               </div>
            </div>
            <div id="rejected" class="eachTab">
               <div class="mt-[30px]">
                  <h1 class="text-[17px]">My - Rejected Jobs (10)</h1>
                  <hr class="my-3">
               </div>
               
               <div class="grid gap-y-[20px]">
                  <div class="border py-3 text-[15px] px-5 rounded-md">
                     <a href="" class="font-medium mb-[10px] flex text-[17px] text-defClr">Job Title To Be Put Here</a>
                     <p>Location: Nyarugenge</p>
                     <p>Salary: 20000 FRW</p>
                     <div class="mt-[20px] flex gap-x-[20px] items-center">
                     <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-red-900 font-semibold bg-red-400 ">Delete</a>
                        <a href="" class="">More Details</a>
                     </div>
                  </div> 
                  <div class="border py-3 text-[15px] px-5 rounded-md">
                     <a href="" class="font-medium mb-[10px] flex text-[17px] text-defClr">Job Title To Be Put Here</a>
                     <p>Location: Nyarugenge</p>
                     <p>Salary: 20000 FRW</p>
                     <div class="mt-[20px] flex gap-x-[20px] items-center">
                     <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-red-900 font-semibold bg-red-400 ">Delete</a>
                        <a href="" class="">More Details</a>
                     </div>
                  </div> 
                  <div class="border py-3 text-[15px] px-5 rounded-md">
                     <a href="" class="font-medium mb-[10px] flex text-[17px] text-defClr">Job Title To Be Put Here</a>
                     <p>Location: Nyarugenge</p>
                     <p>Salary: 20000 FRW</p>
                     <div class="mt-[20px] flex gap-x-[20px] items-center">
                     <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-red-900 font-semibold bg-red-400 ">Delete</a>
                        <a href="" class="">More Details</a>
                     </div>
                  </div>    
               </div>
            </div>
         </div>
      </div>
   </main>
   
</body>
</html>