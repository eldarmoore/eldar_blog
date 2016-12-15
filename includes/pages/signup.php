<?php

$focus_name = 'autofocus';
$focus_email = null;
$focus_password = null;
$focus_password_confirm = null;

if (isset($_POST['submit'])) {

  if ( !empty($_POST['csrf_token']) && !empty($_SESSION['csrf_token']) && $_POST['csrf_token'] == $_SESSION['csrf_token']) {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $name = trim($name);

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password = trim($password);
    $verify_password = filter_input(INPUT_POST, 'verify_password', FILTER_SANITIZE_STRING);
    $verify_password = trim($verify_password);

    if(!$name){

      $_SESSION['neg_message'] = ' * Please enter your name';
      $focus_name = 'autofocus';
      $focus_email = null;
      $focus_password = null;

    } elseif (empty($email)){

      $_SESSION['neg_message'] = ' * Please enter your email';
      $focus_name = null;
      $focus_email = 'autofocus';
      $focus_password = null;

    } elseif (!$email) {

      $_SESSION['neg_message'] = ' * Please enter valid email';
      $focus_name = null;
      $focus_email = 'autofocus';
      $focus_password = null;

    } elseif (!$password) {

      $_SESSION['neg_message'] = ' * Please choose password';
      $focus_name = null;
      $focus_email = null;
      $focus_password = 'autofocus';

    } elseif (strlen($password) < 6) {

      $_SESSION['neg_message'] = ' * Password must be minimum 6 characters length.';
      $focus_name = null;
      $focus_email = null;
      $focus_password = 'autofocus';

    } elseif (empty($verify_password)){

      $_SESSION['neg_message'] = ' * Please confirm password';
      $focus_name = null;
      $focus_email = null;
      $focus_password = null;
      $focus_password_confirm = 'autofocus';

    } elseif ($password != $verify_password) {

      $_SESSION['neg_message'] = ' * Password miss match';
      $focus_name = null;
      $focus_email = null;
      $focus_password = 'autofocus';

    } else {

      $name = mysqli_real_escape_string($dbc, $name);
      $email = mysqli_real_escape_string($dbc, $email);
      $password = mysqli_real_escape_string($dbc, $password);
      $password = password_hash($password, PASSWORD_BCRYPT);
      $permission = 1;
      $status = 1;

      $sql = "INSERT INTO users VALUES(null, '$name', '$email', '$password', NOW(), '$permission', '$status')";
      $result = mysqli_query($dbc, $sql);

      if($result && mysqli_affected_rows($dbc) == 1){
        $_SESSION['pos_message'] = 'Your account has been successfully created.';
        header('location: ../public/index.php?page=signin');
        die();

      } else {

        $_SESSION['neg_message'] = 'Error in registering user.';
        // echo mysqli_error($dbc);
      }
    }
  } // End Post

  $token = csrf_token();

} else {

  $token = csrf_token();

}

if (isset($_POST['name'])) {
  $post_name = $_POST['name'];
} else {
  $post_name = null;
}

if (isset($_POST['email'])) {
  $post_email = $_POST['email'];
} else {
  $post_email = null;
}

if (isset($_POST['password'])) {
  $post_password = $_POST['password'];
} else {
  $post_password = null;
}

// Flash Message Warning
flash_message();

?>

<div class="form-container form-width-sign">
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="csrf_token" value="<?= $token; ?>">
    <label for="name">Name:</label><br>
    <input type="text" class="input-form w-200" name="name" value="<?= $post_name; ?>" <?= $focus_name; ?>><br><br>
    <label for="email">Email:</label><br>
    <input type="text" class="input-form w-200" name="email" value="<?= $post_email; ?>" <?= $focus_email; ?>><br><br>
    <label for="password">Password:</label><br>
    <input type="password" class="input-form w-200" name="password" value="<?= $post_password; ?>" <?= $focus_password; ?>><br><br>
    <label for="password">Confirm Password:</label><br>
    <input type="password" class="input-form w-200" name="verify_password" <?= $focus_password_confirm; ?>><br><br>
    <input type="submit" class="pos-button w-220" name="submit" value="Sign up">
  </form>
</div>
