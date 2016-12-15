<?php

require '../includes/functions.php';
require_once '../includes/db_connection.php';

//session_save_path('../sessions/');
//ini_set('session.gc_probability', 1);
secured_session_start('eldarblog');
session_regenerate_id();

// For Page navigation and dynamic title
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'blog';
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>

<?php include '../includes/layouts/header.php'; ?>

<?php

switch ($page) {
  case "blog":
    include '../includes/pages/blog.php';
    break;
  case "add_blog":
    include '../includes/pages/add_blog.php';
    break;
  case "users":
    include '../includes/pages/users.php';
    break;
  case "signin":
    include '../includes/pages/signin.php';
    break;
  case "signup":
    include '../includes/pages/signup.php';
    break;
  case "user_page":
    include '../includes/pages/user_page.php';
    break;
  case "blog_view":
    include '../includes/pages/blog_view.php';
    break;
  default:
    include '../includes/pages/blog.php';
}
?>

<?php include '../includes/layouts/footer.php'; ?>
