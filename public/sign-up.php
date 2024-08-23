<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up</title>
   <script src="../tailwind.js"></script>
   <link rel="stylesheet" href="style.css">
   <script src="../jquery-3.6.0.min.js"></script>
   <script src="./app.js"></script>
</head>
<body>
   <?php include './nav.php'?>
   <div class="py-[50px] min-h-[calc(100vh-100px)] border flex justify-center items-center flex-col">
      <div class="grid grid-cols-2 min-w-[500px]">
         <button class="text-[15px] py-2 border tabButton activeBtn" data-tab="employer">As Employee</button>
         <button class="text-[15px] py-2 border tabButton" data-tab="employee">As Employer</button>
      </div>
      <div class="border p-[30px] min-w-[800px] eachTab hidden" id="employer">
         <h1 class="text-[18px] uppercase font-semibold text-center mb-[25px] text-defClr">Sign Up As Employee</h1>
         <form method="POST" enctype="multipart/form-data" class="grid gap-y-4">
            <div class="grid grid-cols-[repeat(3,calc(100%/3.1))] justify-between">
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Full Names</label>
                  <input type="text" name="names" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Age</label>
                  <input type="text" name="age" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Education Level</label>
                  <select name="education" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
                     <option hidden disabled selected>Choose Education Level</option>
                     <option value="None">None</option>
                     <option value="Primary 3">Primary 3</option>
                     <option value="Primary 6">Primary 6</option>
                     <option value="O' Level">O' Level</option>
                     <option value="A' Level">A' Level</option>
                     <option value="University">University</option>
                  </select>
                  <!-- <input type="text" name="" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none"> -->
               </div>
            </div>
            <div class="grid grid-cols-[repeat(3,calc(100%/3.1))] justify-between">
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Phone Number</label>
                  <input type="text" name="phone" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Email (Optional)</label>
                  <input type="text" name="email" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Password</label>
                  <input type="password" name="pw" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
            </div>
            <div class="grid grid-cols-[repeat(3,calc(100%/3.1))] justify-between">
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Your Starting Capital</label>
                  <input type="text" name="start" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Your Image</label>
                  <input type="file" name="image" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Your ID Image</label>
                  <input type="file" name="idImage" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
            </div>
            <div class="flex flex-col gap-y-[8px] w-full">
               <label class="text-[15px]">More About You</label>
               <textarea name="more" id="" class="px-[15px] bg-transparent py-[6px] text-[14px] outline-none w-full border h-[100px]"></textarea>
            </div>
            <a href="./sign-up.php" class="underline text-[15px] text-defClr w-fit">Have Account?</a>
            <button name="employeeRegister" class="border py-2 text-[15px] rounded-[5px] bg-defClr text-white">Sign Up</button>
         </form>
      </div>
      <div class="border p-[30px] min-w-[800px] eachTab hidden" id="employee">
         <h1 class="text-[18px] uppercase font-semibold text-center mb-[25px] text-defClr">Sign Up As Employer</h1>
         <form action="" method="POST" enctype="multipart/form-data" class="grid gap-y-4">
            <div class="grid grid-cols-[repeat(3,calc(100%/3.1))] justify-between">
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Full Names</label>
                  <input type="text" name="names" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Phone Number</label>
                  <input type="text" name="phone" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Age<label>
                  <input type="text" name="age" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
            </div>
            <div class="grid grid-cols-[48.5%,48.5%] justify-between">
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Email (Optional)</label>
                  <input type="text" name="email" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Password</label>
                  <input type="password" name="pw" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
            </div>
            <div class="grid grid-cols-[48.5%,48.5%] justify-between">
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Your Image</label>
                  <input type="file" name="image" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Your ID Image</label>
                  <input type="file" name="idImage" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
            </div>
            <div class="flex flex-col gap-y-[8px] w-full">
               <label class="text-[15px]">More About You</label>
               <textarea name="more" id="" class="px-[15px] bg-transparent py-[6px] text-[14px] outline-none w-full border h-[100px]"></textarea>
            </div>
            <a href="./sign-up.php" class="underline text-[15px] text-defClr w-fit">Have Account?</a>
            <button name="employerRegister" class="border py-2 text-[15px] rounded-[5px] bg-defClr text-white">Sign Up</button>
         </form>
      </div>
   </div>
   <script>
      $('.tabButton').click(function(){
         $('.eachTab').hide();
         let toToggle = $(`#${$(this).attr('data-tab')}`)
         $('.activeBtn').removeClass('activeBtn bg-defClr border-defClr text-myW');
         $(this).addClass('activeBtn bg-defClr border-defClr text-myW');
         toToggle.fadeToggle();
      })
      
      $('.activeBtn').trigger('click')
   </script>
   <?php 
      if(isset($_POST['employeeRegister'])){
         $con = mysqli_connect('localhost', 'root', '', 'worker');

         $name = $_POST['names'];
         $age = $_POST['age'];
         $phn = $_POST['phone'];
         $eml = $_POST['email'];
         $pw = $_POST['pw'];

         $img = $_FILES['image']['name'];
         $tempimg = $_FILES['image']['tmp_name'];
         $folder = './assets/profiles/'.$img;
         $move = move_uploaded_file($tempimg,$folder);

         $idImg = $_FILES['idImage']['name'];
         $tempidImg = $_FILES['idImage']['tmp_name'];
         $folder = './assets/profiles/'.$idImg;
         $move = move_uploaded_file($tempidImg,$folder);

         $more = $_POST['more'];
         $qq = mysqli_query($con, "INSERT INTO users VALUES('', '$name', '$age', '$ed', '$phn', '$eml', '$pw', '$st','$img', '$idImg', '$more', 1)");
         if($qq){
            echo '<script>
                  alert("Sign Up Successful")
                  window.location.href="./login"; 
               </script>  
            ';
         }
      }
      if(isset($_POST['employerRegister'])){
         $con = mysqli_connect('localhost', 'root', '', 'worker');

         $name = $_POST['names'];
         $age = $_POST['age'];
         $phn = $_POST['phone'];
         $eml = $_POST['email'];
         $pw = $_POST['pw'];

         $img = $_FILES['image']['name'];
         $tempimg = $_FILES['image']['tmp_name'];
         $folder = './assets/profiles/'.$img;
         $move = move_uploaded_file($tempimg,$folder);

         $idImg = $_FILES['idImage']['name'];
         $tempidImg = $_FILES['idImage']['tmp_name'];
         $folder = './assets/profiles/'.$idImg;
         $move = move_uploaded_file($tempidImg,$folder);

         $more = $_POST['more'];
         $qq = mysqli_query($con, "INSERT INTO users VALUES('', '$name', '$age', '-', '$phn', '$eml', '$pw', '-','$img', '$idImg', '$more', 2)");
         if($qq){
            echo '<script>
                  alert("Sign Up Successful")
                  window.location.href="./login"; 
               </script>  
            ';
         }
      }
   ?>
</body>
</html>