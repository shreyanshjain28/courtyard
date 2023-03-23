<?php 

session_start();

if(isset($_SESSION['login'])) {

}
else {
  header('Location: ./index.php');
  exit;
}

?>


<h1>
  Welcome to the Home Page
</h1>

<main>
  <h2>
    You are <?= $username ?>
  </h2>
  <h2>
    Your email is <?= $email ?>
  </h2>
</main>



