<?php

// SECURITY - Token ////////////////////////////////////////////////////////////

function csrf_token() {

  $token = sha1('!!' . rand() . md5('$$'));
  $_SESSION['csrf_token'] = $token;

  return $token;

}

// SECURITY - Session //////////////////////////////////////////////////////////
function secured_session_start($session_name = false) {

    if ($session_name) {

        session_name(sha1($session_name));

    }

    session_start();
    $_SESSION['HTTP_USER_AGENT'] = $_SERVER['HTTP_USER_AGENT'];
    $_SESSION['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];

}

function validate_user() {

  $valid = false;

  if ( !empty($_SESSION['user_id'])) {

    if ( $_SERVER['HTTP_USER_AGENT'] == $_SESSION['HTTP_USER_AGENT']) {

      if ( $_SERVER['REMOTE_ADDR'] == $_SESSION['REMOTE_ADDR']) {

        $valid = true;

      }

    }

  }

  return $valid;

}

// User Permission
function user_permission($permission){

  switch ($permission) {
    case 0:
      return 'Guest';
      break;
    case 1:
      return "Member";
      break;
    case 2:
      return "Blogger";
      break;
    case 3:
      return "Editor";
      break;
    case 4:
      return "Whiper";
      break;
    case 5:
      return "Moderator";
      break;
    case 6:
      return "Admin";
      break;
  }

}

// User Status
function user_status($status) {
  switch ($status) {
    case 0:
      return 'Disabled';
      break;
    case 1:
      return 'Active';
      break;
  }
}

function user_status_color($status) {
  switch ($status) {
    case 'Disabled':
      return 'color-neg';
      break;
    case 'Active':
      return 'color-pos';
      break;
  }
}

function get_title($page){

  switch ($page) {
    case "blog":
      return 'Eldar Blog';
      break;
    case "add_blog":
      return 'Eldar Blog - Add Blog';
      break;
    case "users":
      return 'Eldar Blog - Users';
      break;
    case "signin":
      return 'Eldar Blog - Signin';
      break;
    case "signup":
      return 'Eldar Blog - Signup';
      break;
    case "user_page":
      return 'Eldar Blog - User Page';
      break;
    case "blog_view":
      return 'Eldar Blog - Blog View';
      break;
    default:
      return 'Eldar Blog';
  }

}

function flash_message(){

  if(isset($_SESSION['pos_message'])){
    echo '<div class="pos-message">' . $_SESSION['pos_message'] . '</div>';
  } elseif(isset($_SESSION['neg_message'])) {
    echo '<div class="neg-message">' . $_SESSION['neg_message'] . '</div>';
  }
  $_SESSION['pos_message'] = null;
  $_SESSION['neg_message'] = null;
}

function get_comment_count($count_comments,$blog_id) {

  foreach ($count_comments as $value) {

    if ($value['id'] == $row['id']) {
      return $value['comments_count'];
    }
  }
}

function confirm_query($result_set){
  if (!$result_set) {
    die("Database query failed.");
  }
}

function get_all_blogs(){
  global $dbc;

  $sql = "SELECT blog.*,users.name FROM blog JOIN users ON users.id = blog.user_id ORDER BY blog.blog_date DESC";
  $result = mysqli_query($dbc, $sql);
  return $result;
  confirm_query($result);
}

function count_all_comments(){
  global $dbc;

  $sql = "SELECT blog.id, COUNT(comments.blog_id) comments_count FROM blog LEFT JOIN comments ON comments.blog_id = blog.id GROUP BY blog.id";
  $result = mysqli_query($dbc, $sql);
  return $result;
  confirm_query($result);
}

function get_blog($blog_id){
  global $dbc;

  $sql = "SELECT blog.*,users.name FROM blog JOIN users ON users.id = blog.user_id WHERE blog.id = $blog_id LIMIT 1";
  $result = mysqli_query($dbc, $sql);
  return $result;
  confirm_query($result);
}

function get_blog_comments($blog_id){
  global $dbc;

  $sql = "SELECT comments.*,users.name FROM comments JOIN users ON users.id = comments.user_id WHERE comments.blog_id = $blog_id ORDER BY comments.comment_date DESC";
  $result = mysqli_query($dbc, $sql);
  return $result;
  confirm_query($result);
}
?>
