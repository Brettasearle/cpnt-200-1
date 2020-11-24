<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include './includes/head.php';?>
</head>

<header>
<?php
  include './includes/header.php';?>
</header>


<body>
  <!-- Register for an acount with also the option to go back to the login page should the user already have an account. -->

  <!-- I also made it so that if the user clicks back and forth the sizes of the form on the login page and the register page are about the same size for visual consistancy-->

  <fieldset>
    <legend>Register for an account, <li><a href="login.php"><u>Already have an account ?</u></a></li></legend>
    <form class="form">
      
      <div> 
        <label for="username">Username:*</label>
        <input type="email" name="email" id="email" placeholder="Email address" required>
      </div>

      <div> 
        <label for="password">Password:*</label>
        <input type="password" name="password" id="password" placeholder="Password" required>
      </div>

      <div> 
        <label for="Confirm">Confirm:*</label>
        <input type="password" name="password" id="Confirm" placeholder="Confirm Password" required>
      </div>


     
      <div>
        <button type="submit">Submit</button>

      </div>

    </form>
  </fieldset>

  <?php
  include './includes/footer.php';?>
</body>
</html>

