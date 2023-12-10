<?php include "header.php";?>
<div class="main-content">
    <h2 class="center">Login form</h2>
    <?php
   if(isset($_POST['login'])){
    include "connection.php";
    $username= mysqli_real_escape_string($conn, $_POST['username']);
    $password=($_POST['password']);
    $sql = "SELECT id, username FROM signup WHERE username='{$username}' AND password= '{$password}'";

    $result = mysqli_query($conn, $sql) or die ("Query Failed.");
     if(mysqli_num_rows($result)> 0){
     while($row = mysqli_fetch_assoc($result)){
     
      session_start();
      $_SESSION["username"] =$row['username'];
      $_SESSION["id"] =$row['id'];
       header("Location:r-seat.php");
       }
       }else{
      echo '<div class="success">Username and Password are not matched</div>';
       
      
     }

     

   }
?>
    <div class="center">
        <div class="main-content">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <!-- <div class="form-group">
                <h3>Username</h3>
                <input type="text" name="username" placeholder="Enter your name" />
                <h3>Password</h3>
                <input type="Password" name="password" placeholder="Enter your password" />


                <div class="submit">
                    <input type="Submit" name="login" value="Login" />
                </div>
            </div> -->
                <form action="crud.php" method="POST" class="login">
                    <div class="form-group">
                        <input class="form-control" type="username" name="username" placeholder="Username...."
                            required />
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pwd" placeholder="Enter your password...."
                            required />
                    </div>
                    <div class="form-group">
                        <input class="form-control submit-btn" type="submit" name="submit" value="Sign up">
                    </div>
                    <div>
                        <h4 class="existpage">
                            Already a member?<p id="highlight"> Login Here.</p>
                        </h4>
                    </div>
                </form>
            </form>


        </div>
    </div>


    <?php include "footer.php";?>