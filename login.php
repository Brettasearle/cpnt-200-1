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
 
  <!-- already have a password login form-->
  <main>
    <fieldset>
      <legend>Already have an account ? Sign in here</legend>
      <form class="form">
        
        
        <div> 
          <label for="email">Email:*</label>
          <input type="email" name="email" id="email" placeholder="Email address" required>
        </div>
   
        <div> 
          <label for="password">Password:*</label>
          <input type="password" name="password" id="password" placeholder="Password" required>
        </div>

      
        <button type="submit">Login</button>
      </form>
    </fieldset>
    
  </main>

  

  
  <?php
  include './includes/footer.php';?>
</body>

</html>