<?php
include_once 'connection.php';

if (count($_POST) > 0) {
    mysqli_query($conn, "UPDATE signup SET username='" . $_POST['username'] . "', uname='" . $_POST['uname'] . "',
    email='" . $_POST['email'] . "', gender='" . $_POST['gender'] . "'
    number='" . $_POST['people'] . "',password='" . $_POST['pwd'] . "', WHERE id='" . $_POST['id'] . "'");
}
//$result = mysqli_query($conn,"SELECT * FROM signup where id='" . $_POST['id'] ."'");
//$row=mysqli_fetch_array($result);
?>
<?php include "header.php"; ?>
<h2 class="center">Update User</h2>
<form action="crud.php" method="POST" class="signup">
    <div class="form-group">
        <input type="hidden" name="id" class="input-field" value="<?php echo $_GET['id']; ?>" />
    </div>
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
</form>
<?php include "footer.php"; ?>