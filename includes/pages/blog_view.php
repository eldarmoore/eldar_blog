<?php

if(!isset($_GET['id'])){
  header('location: ../public/index.php?page=signin');
} else {
  $blog_id = $_GET['id'];
}
$all_comments = [];
$blog_row = '';
$id = null;

$result_blog = get_blog($blog_id);

if($result_blog && mysqli_num_rows($result_blog) > 0) {
  $blog_row = mysqli_fetch_assoc($result_blog);
}

$result_comments = get_blog_comments($blog_id);

if($result_comments && mysqli_num_rows($result_comments) > 0) {
  while ($row = mysqli_fetch_assoc($result_comments)) {
    $all_comments[] = $row;
  }
}

// echo "<pre>";
// print_r($all_comments);
// echo "</pre>";

// Flash Message
flash_message();

if (isset($_POST['post_comment'])){

  $user_comment = filter_input(INPUT_POST, 'user_comment', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
  $user_comment = trim($user_comment);

  if (! $user_comment) {
    $_SESSION['neg_message'] = ' * You must write a comment.';
  } else {

    $user_comment = mysqli_real_escape_string($dbc, $user_comment);
    $user_id = $_SESSION['user_id'];
    $sql = "INSERT INTO comments VALUES(null, '$blog_id', '$user_id', NOW(), '$user_comment')"; // user_id without brackets due to configured as integer in db
    $result = mysqli_query($dbc, $sql);

    if ($result && mysqli_affected_rows($dbc) > 0) {

      $_SESSION['pos_message'] = 'Your comment is successfully posted.';
      header('location: ../public/index.php?page=blog_view&id=' . urlencode($blog_id));
      die();
    }

  }

}
// Comments Section - END

// Delete Comment Section
if (isset($_POST['delete_comment'])){

  $comment_id = $_POST['comment_id'];
  $sql = "DELETE FROM comments WHERE id = $comment_id";
  $result = mysqli_query($dbc, $sql);
  header('location: ../public/index.php?page=blog_view&id=' . $blog_id);
  $_SESSION['pos_message'] = 'Your comment has been deleted.';
  die();
}
?>

    <div class="blog-container">
      <div class="blog-headline">Date: <?= $blog_row['blog_date']; ?></div>
      <div class="blog-content">
        <h1><?= (htmlentities($blog_row['title'], ENT_NOQUOTES)); ?></h1>
        <p><?= nl2br(htmlentities($blog_row['article'], ENT_NOQUOTES)); ?></p>
        </div>
          <div class="blog-author">By <?= htmlentities($blog_row['name']); ?></div>
    </div>

    <?php if(isset($_SESSION['user_id']) && $_SESSION['user_permission'] > 0): ?>
    <div class="blog-comment-container">
      <div class="blog-comment-img-container"><img src="" alt="" class="profile-img-small" /></div>
      <form class="leave-comment" action="" method="post">
        <label for=""><h5>Leave Comment:</h5></label><br>
        <textarea name="user_comment" rows="5" cols="40"></textarea><br>
        <input type="submit" class="pos-button margin-top w-100 float-right" name="post_comment" value="Post">
      </form>
    </div>
    <?php endif; ?>

    <?php if($all_comments): ?>
        <?php foreach ($all_comments as $row): ?>
        <div class="blog-comment-container">
          <div class="blog-comment-data-container">

            <?php
            // $datetime is something like: 2014-01-31 13:05:59
            $datetimeFromMysql = $row['comment_date'];
            $time = strtotime($datetimeFromMysql);
            $myFormatForView = date('H:i:s d M Y', $time);
            // $myFormatForView is something like: 01/31/14 1:05 PM
             ?>

            <div class="blog-comment-head-container">by <span class="user_comment_color"><?= $row['name']; ?></span> <?= $myFormatForView; ?></div>
            <div class="blog-comment-text-container"><?= nl2br(htmlentities($row['comment'], ENT_NOQUOTES)); ?></div>
            <!-- Delete Blog Section -->
            <?php if(isset($_SESSION['user_id']) && ($_SESSION['user_id'] == $row['user_id'])): ?>
              <form class="" action="" method="post">
                <input type="hidden" name="comment_id" value=" <?= $row['id']; ?> "/>
                <input type="submit" name="delete_comment" value="Delete" class="neg-button float-right margin-top"/>
              </form>
            <?php endif; ?>
            <!-- Delete Blog Section - END -->
          </div>



        </div>
    <?php endforeach; ?>
  <?php endif; ?>
