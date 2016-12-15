<?php

$focus_title = 'autofocus';
$focus_article = null;

if (empty($_SESSION['user_id'])){
  header('location: index.php?page=signin');
  $_SESSION['neg_message'] = 'You must log in first before posting!';
  die();
}

if (isset($_POST['submit'])) {

  $user_title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
  $user_title = trim($user_title);
  $article = filter_input(INPUT_POST, 'article', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
  $article = trim($article);

  if( ! $user_title ) {

    $_SESSION['neg_message'] = ' * Title field is required';
    $focus_topic = 'autofocus';
    $focus_article = null;

  } elseif ( ! $article ) {

    $_SESSION['neg_message'] = ' * Article field is required';
    $focus_topic = null;
    $focus_article = 'autofocus';

  } else {

    $user_title = mysqli_real_escape_string($dbc, $user_title);
    $article = mysqli_real_escape_string($dbc, $article);
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO blog VALUES(null, '$user_title', '$article', NOW(), $user_id)"; // user_id without brackets due to configured as integer in db
    $result = mysqli_query($dbc, $sql);

    if ($result && mysqli_affected_rows($dbc) > 0) {

      $_SESSION['pos_message'] = 'Your blog is successfully posted.';
      header('location: ../public/index.php?page=blog');
      die();
    }
  }
}

// Flash Message
flash_message();
?>

<h3>Add your blog</h3>
<div class="form-container form-width-add-block">
  <form class="" action="" method="post">
    <label for="title">Title:</label><br>
    <input type="text" class="add-blog-input w-422" name="title" value="" <?= $focus_title; ?>><br><br>
    <label for="article">Article:</label><br>
    <textarea name="article" class="add-blog-textarea w-422" rows="10" cols="50" <?= $focus_article; ?>></textarea><br><br>
    <input type="submit" class="pos-button" name="submit" value="Post blog">
  </form>
</div>
