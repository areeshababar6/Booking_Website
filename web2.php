<?php include "header.php";?>
<div class="main-content">
    <h1 class="head"> Sign Up</h1>

    <?php 
		if(isset($_SESSION['flag1'])){

			if($_SESSION['flag1']==0)
			{

				echo "Form not submitted Successfully";
			}
			else if ($_SESSION['flag1']==1){
				echo "<h3 class='success'>Form submitted Successfully</h3>";

			}
		}
		?>
    <form action="crud.php" method="POST" class="signup">
        <div class="form-group">
            <input class="form-control" type="username" name="username" placeholder="Username...." required />
        </div>
        <div class="form-group">
            <input class="form-control" type="uname" name="uname" placeholder="Enter your name...." required />
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Enter your Email...." required />
        </div>
        <div class="form-group">
            <select class="form-control" type="gender" name="gender" placeholder="Select your gender...." required />
            <option value="select">Select your Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="nonbinary">Non-binary</option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" for="quantity" type="number" id="quantity" name="people" min="1" max="100"
                placeholder="How many people....">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="pwd" placeholder="Enter your password...." required />
        </div>
        <div class="form-group">
            <input class="form-control" type="confirm_password" name="a_pwd" placeholder="Re-type your password...."
                required />
        </div>
        <div>
            <h4 class="chkbox">
                <input type="CheckBox" name=" Mark"> I agree to these Terms & Conditions.
            </h4>
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
</div>

<?php include "footer.php";?>