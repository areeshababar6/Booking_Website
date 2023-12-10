<?php include "header.php";?>
<div class="main-content">
    <h1 class="head">Login</h1>
    <form action="login.php" method="POST" class="login">
        <div class="form-group">
            <input class="logclass" type="text" name="username" placeholder="Enter your email" />
        </div>
        <div class="form-group">
            <input class="logclass" type="password" name="pwd" placeholder="Enter Password" />
        </div>
        <div class="form-group">
            <h4 class="box">
                <input type="CheckBox" name="Mark" />Agree with
                <u>Terms & conditions.</u>
            </h4>
        </div>
        <div class="form-group">
            <input class="logclass center submit-icon" type="login" value="Login" />
            <p class="logform">© All rights reserved with Areesha</p>
        </div>
    </form>
</div>
<?php include "footer.php";?>