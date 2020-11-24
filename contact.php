<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include './includes/head.php';?>
</head>
<!-- nav bar stuff -->
<header>
<?php
  include './includes/header.php';?>
</header>

<body>
  <h1>Meet the Team</h1>
  
  <main>
    <div class="content">
      <div class="figure"> 
        <figure class="card">
          <img src="assets/images/joseph.jpg" alt="man named joe">
          <figcaption>Joe james, Head of sales and distribution.</figcaption>
        </figure>
    
          <figure class="card">
          <img src="assets/images/meritt.jpg" alt="woman named meritt">
          <figcaption>Meritt mars, Head of marketing.</figcaption>
        </figure>
    
        <figure class="card">
          <img src="assets/images/tamara.jpg" alt="woman named tamara">
          <figcaption>Tamara teal, The founder and CEO</figcaption>
        </figure>

  </main>
  <!-- form spree form  -->
  <script src="https://formspree.io/js/formbutton-v1.min.js" defer></script>
  <script>
    window.formbutton=window.formbutton||function(){(formbutton.q=formbutton.q||[]).push(arguments)};
    formbutton("create", {action: "https://formspree.io/f/mknpokpy"})
  </script>

<?php
  include './includes/footer.php';?>
</body>
</html>