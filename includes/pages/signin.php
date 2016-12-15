<?php

$error = '';

$focus_email = 'autofocus';
$focus_password = null;

if (isset($_POST['submit'])) {

  if ( !empty($_POST['csrf_token']) && !empty($_SESSION['csrf_token']) && $_POST['csrf_token'] == $_SESSION['csrf_token']) {

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password = trim($password);

    if (empty($email)) {

      $_SESSION['neg_message'] = ' * Please enter your email.';
      $focus_email = 'autofocus';
      $focus_password = null;

    } elseif (empty($password)) {
      $_SESSION['neg_message'] = ' * Please enter your password.';
      $focus_email = null;
      $focus_password = 'autofocus';
    } elseif ( ! $email ) {

      $_SESSION['neg_message'] = ' * Email or password combination is wrong, please try again.';
      $focus_email = 'autofocus';
      $focus_password = null;

    } elseif ( ! $password || strlen($password) < 6 ) {

      $_SESSION['neg_message'] = ' * Email or password combination is wrong, please try again.';
      $focus_email = 'autofocus';
      $focus_password = null;

    }  else {

      $email = mysqli_real_escape_string($dbc, $email); // SQL INJECTION PROTECTION
      $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

      $result = mysqli_query($dbc, $sql);

      if ($result && mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {

          if ($row['status'] > 0) {

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_status'] = $row['status'];
            $_SESSION['user_permission'] = $row['permission'];
            header('location: index.php?page=blog');
            $_SESSION['pos_message'] = 'Your have been successfully logged in.';
            die();

          } else {

            $_SESSION['neg_message'] = 'Your account is Disabled!';
          }

        } else {

          $_SESSION['neg_message'] = 'Wrong email/password combination!';
        }

      } else {

      $_SESSION['neg_message'] = 'Wrong email/password combination!';

      }
    }
  }

  $token = csrf_token();

} else {

  $token = csrf_token();

}

if (isset($_POST['email'])) {
  $post_email = $_POST['email'];
} else {
  $post_email = '';
}

?>

<?php

// Flash Message
flash_message();

?>

<div class="form-container form-width-sign">
    <form action="" method="post">
      <input type="hidden" name="csrf_token" value="<?= $token; ?>">
      <label for="email">Email:</label><br>
      <input type="text" class="input-form w-200" name="email" value="<?= $post_email; ?>" <?= $focus_email; ?>><br><br>
      <label for="password">Password:</label><br>
      <input type="password" class="input-form w-200" name="password" <?= $focus_password; ?>><br><br>
      <input type="submit" name="submit" class="pos-button w-220" value="Login">
    </form>
</div>
