<?php
session_start();
include("includes/database.php");

if(isset($_SESSION["email"])==false){
    //user has not logged in redirect to login page
    header("location:login.php");
    exit();
}
?>
<!doctype html>
<html>
    <?php include("includes/head.php"); ?>
    <body>
        <?php include("includes/navigation.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form if="account-update" action="account.php" method="post">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1">
                            <label for="password">Retype password</label>
                            <input type="password" class="form-control" id="password2" name="password2">
                        </div>
                        <div class="text-center">
                             <button type="submit" name="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>