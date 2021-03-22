<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css"  >

 </head>

<body>
  <header>
  <?php
  
   $username = $password = "";
   $usernameErr = $passwordErr = $Err = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);
      
      if (empty($username)) {
         $usernameErr = "Please enter your Username";
      } else if (empty($password)) {
         $passwordErr = "Please enter your Password";
      } else {
         if($password=="0911"&&$username=="vidya"){
            header("Location: ./videos/birthday.mp4"); 
            exit;
         } else {
            $Err="Error: Username and Password doesn't match. Please try again.";
         }
      }
   } 

   function test_input($data) {
   return htmlspecialchars(stripslashes(trim($data)));
   }

  ?>

     <div class="mainclass">
     <div class="leftform"><h1>Happy Birthday Dear Brother..!!!..</h1></div>
     <div class="rightform">
      <h2> Login Form </h2>
      <p><span class="error">* required field</span></p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <p><span class="error"><?php echo $Err;?></span> </p>
         <label>Username</label>
         <input type="text" name="username" placeholder="Username" value= "<?php echo $username;?>">
         <span class="error">* <?php echo $usernameErr;?></span>
         <label>Password</label>
         <input type="password" name="password" placeholder="********">
         <span class="error">* <?php echo $passwordErr;?></span>
         <!-- <label>Confirm password</label>
         <input type="password" name="Confirm password" placeholder="********">-->

         <input type="Submit" name="Submit" value="Submit" class="Submittext">
          
      </form>
         
         
<!-- 
         <div class="belowsec">
            <p> OR </p>
            <h3> Login with </h3>
            <button id="fb"><i class="fa fa-facebook"> Facebook </i></button> 
            <button id="gogl"> <i class="fa fa-google-plus"> Google+ </i></button>
         
         </div> -->
   
     </div>
   </div>

  </header>

</body>

</html>