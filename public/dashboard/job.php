<?php include 'sess.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Job</title>
   <script src="../../tailwind.js"></script>
   <script src="../../jquery-3.6.0.min.js"></script>
   <script src="../app.js"></script>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include 'nav.php'?>
   <main>
      <?php include 'header.php'?>
      <div>
         <h1 class="text-[20px] font-medium">Job Title Goes Here (10 Applications)</h1>
         <p class="my-[10px]">Location: Nyarugenge</p>
         <p class="my-[10px]">Proposed Salary: 20, 000 FRW</p>
         <p class="my-[10px]">Applications: 12</p>
         <p class="my-[10px]">For Gender: Female</p>
         <div class="grid grid-cols-[auto_auto] gap-x-3">
            <p>More Details:</p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit deserunt et minus quas cum, tempora unde non similique itaque, aliquid reprehenderit eos omnis quod officia debitis blanditiis. Officia, saepe fuga.
         </div>
         <div class="mt-[20px] flex gap-x-[20px] items-center">
            <a href="" class="py-2 px-5 text-[14px] bg-defClr rounded-md text-white">Apply</a>
            <a href="">Call Me</a>
         </div>
         <div class="mt-[40px]">
            <h1 class="text-[20px] text-defClr font-semibold mb-[15px]">Applications</h1>
            <ul class="grid gap-y-4">
               <li class="list-inside list-disc">
                  <span>User 128932</span> Applied On <span>23/Nov/2022 13:54:44</span>
               </li>
               <li class="list-inside list-disc">
                  <span>User 128932</span> Applied On <span>23/Nov/2022 13:54:44</span>
               </li>
            </ul>
         </div>
      </div>
   </main>
</body>
</html>