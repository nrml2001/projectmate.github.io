<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Edit Profile</title>
</head>
<body>
    <div class="nav">
        <div class="ProjectMate">
            <p><a href="home Facul.php"> ProjectMate</a></p>
        </div>

        <div class="right-links">
            <a href="#">>Admin Pannel</a>
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">  
            <?php 
            if(isset($_POST['submit'])){
             $username = $_POST['username'];
             $email = $_POST['email'];
             $department = $_POST['department'];

             $id = $_SESSION['id'];

             $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Department='$department' WHERE Id=$id ") or die("error occurred");

             if($edit_query){
                 echo "<div class='message'>
                 <p>Profile Updated!</p>
             </div> <br>";
           echo "<a href='home.php'><button class='btn'>Go Home</button>";
    
             }
            }else{

             $id = $_SESSION['id'];
             $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

             while($result = mysqli_fetch_assoc($query)){
                 $res_Uname = $result['Username'];
                 $res_Email = $result['Email'];
                 $res_Dep = $result['Department'];
             }

         ?>                
            <header>>Admin Pannel</header>
            <form action="" method="post">

                <div class="right-links">
                    <a href='editAdnm.php?Id=$res_id'>Project Info</a>
                    <a href='editAdnm.php?Id=$res_id'>Students Info</a>
                    <a href='editAdnm.php?Id=$res_id'>Permissions</a>
    
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="More Settings" required>
                </div>
                
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>