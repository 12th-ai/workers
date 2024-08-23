<?php include 'sess.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Employees</title>
   <script src="../../tailwind.js"></script>
   <script src="../../jquery-3.6.0.min.js"></script>
   <script src="../app.js"></script>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include 'nav.php'?>
   <main>
      <?php include 'header.php'?>
      <div id="myItems" class="eachTab">
         <div class="mt-[30px]">
            <h1 class="text-[17px]">Available Employees For Hiring</h1>
            <hr class="my-3">
         </div>
         <div class="grid grid-cols-2 gap-x-7 gap-y-5">
            <?php 
               $qry = mysqli_query($con, "SELECT * FROM users WHERE `type` = 1");
               while($qryF = mysqli_fetch_array($qry)){
                  $img = $qryF['image'];
                  $name = $qryF['names'];
                  $age = $qryF['age'];
                  $phn = $qryF['phone'];
                  $id = $qryF['id'];
            ?>
            <div class="flex gap-x-5">
               <div class="w-[300px] h-[200px] border rounded-md overflow-hidden">
                  <img src="../assets/profiles/<?php echo $img?>" alt="" class="w-full h-full object-cover">
               </div>
               <div class="py-3">
                  <a href="" class="mb-[15px] flex text-[15.5px] hover:text-defClr transition-all">Names: <?php echo $name?></a>
                  <p class="mb-[10px]">Age: <?php echo $age?></p>
                  <div class="flex gap-x-3 items-center">
                     <a href="tel:<?php echo $phn ?>" class="px-3 py-1 bg-defClr rounded-sm text-white text-[15px]">Call</a>
                     <a href="./profile?q=<?php echo $id?>" class="px-3 py-1 bg-defClr rounded-sm text-white text-[15px]">More Info</a>
                  </div>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </main>
</body>
</html>