<?php

// - SECURITY - Permission check to access the page.
if (empty($_SESSION['user_id']) || $_SESSION['user_permission'] < 6) {

  header('location: ../public/index.php?page=signin');
}
// END

$user_id = $_GET['user'];
$safe_user_id = mysqli_real_escape_string($dbc, $user_id);
$user_profile = [];

$sql = "SELECT * FROM users WHERE id = $safe_user_id LIMIT 1";
$result = mysqli_query($dbc, $sql);

if ($result && mysqli_num_rows($result) == 1) {

  $row = mysqli_fetch_assoc($result);

}

if (isset($_POST['update'])){

  $pwd = '';
  $user_date = $row['date'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $selected_permission = $_POST['selected_permission'];
  $selected_status = $_POST['selected_status'];

  if(!empty($password)){
    $password = mysqli_real_escape_string($dbc, $password);
    $password = password_hash($password, PASSWORD_BCRYPT);
    $pwd = "password = '$password',";
  } else {
    $pwd = null;
  }

  $name = mysqli_real_escape_string($dbc, $name);
  $email = mysqli_real_escape_string($dbc, $email);

  $sql = "UPDATE users SET name = '$name', email = '$email', $pwd permission = '$selected_permission', date = '$user_date',status = '$selected_status' WHERE id = $user_id";
  $result = mysqli_query($dbc, $sql);

  if($result && mysqli_affected_rows($dbc) == 1){
    $_SESSION['pos_message'] = 'User has been successfully updated.';
    header('location: ../public/index.php?page=users');
    die();
  } else {
    echo mysqli_error($dbc);
  }
}
?>
<div class="form-container form-width-sign">
  <form class="" action="" method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name" class="input-form w-200" value="<?= $row['name']; ?>"><br><br>
    <label for="email">Email:</label><br>
    <input type="text" name="email" class="input-form w-200" value="<?= $row['email']; ?>"><br><br>
    <label for="password">Password:</label><br>
    <input type="text" name="password" class="input-form w-200" value=""><br><br>
    <div class="select-div">
      <label for="">Permission</label><br>
      <?php
      $selected_permission = $row['permission'];
      $selected_status = $row['status'];
      ?>
      <select class="" name="selected_permission">
        <option value="0" <?php if($selected_permission == '0'){echo("selected");}?>>Guest</option>
        <option value="1" <?php if($selected_permission == '1'){echo("selected");}?>>Member</option>
        <option value="2" <?php if($selected_permission == '2'){echo("selected");}?>>Editor</option>
        <option value="5" <?php if($selected_permission == '5'){echo("selected");}?>>Moderator</option>
        <option value="6" <?php if($selected_permission == '6'){echo("selected");}?>>Admin</option>
      </select>
    </div>
    <div class="select-div" style="float: right;">
      <label for="status">Status:</label>
      <select class="" name="selected_status">
        <option value="0" <?php if($selected_status == '0'){echo("selected");}?>>Disabled</option>
        <option value="1" <?php if($selected_status == '1'){echo("selected");}?>>Active</option>
      </select>
    </div>
    <input type="submit" name="update" value="Update" class="pos-button w-222">
  </form>
</div>
