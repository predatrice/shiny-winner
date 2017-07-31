<?php
include("database.php");
//query to create an account
$username = "jane88";
$email = "jane88@gmail.com";
$password = password_hash("password",PASSWORD_DEFAULT);
$account_query = "INSERT INTO accounts (username,email,password,status,created) VALUES('$username','$email','$password',1,NOW())";
//run the query
$result = $connection->query($account_query);
if(!$result){
  echo "account creation failed";
}
?>
<!doctype html>
<html>
  <? php
  $page_title = "Home Page";
  include("includes/head.php");
  ?>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h2>
            <i class="fa fa-battery-full" aria-hidden="true"></i>
          Column One
          </h2>
          <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
          </p>
        </div>
        <div class="col-md-6 col-sm-6">
          <h2>
            <i class="fa fa-battery-quarter" aria-hidden="true"></i>
            Column Two
          </h2>
          <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
          </p>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>This is a footer</h3>
          </div>
        </div>
      </div>
      
    </footer>
    
  </body>
</html>