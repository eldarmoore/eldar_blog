<?php

$all_blogs = [];
$count_comments = [];

$id = null;

$result_blog = get_all_blogs();

if($result_blog && mysqli_num_rows($result_blog) > 0) {

  while ($row = mysqli_fetch_assoc($result_blog)) {
    $all_blogs[] = $row;
  }
}

$result_count = count_all_comments();

if($result_count && mysqli_num_rows($result_count) > 0) {

  while ($row = mysqli_fetch_assoc($result_count)) {
    $count_comments[] = $row;
  }
}

// echo "<pre>";
// print_r($count_comments2);
// echo "</pre>";

if (isset($_POST['delete'])){

  $id = $_POST['blog_id'];
  $sql = "DELETE FROM blog WHERE id = $id";
  $result = mysqli_query($dbc, $sql);
  $sql = "DELETE FROM comments WHERE blog_id = $id";
  $result = mysqli_query($dbc, $sql);
  header('location: ../public/index.php?page=blog');
  $_SESSION['pos_message'] = 'Your blog has been deleted.';
  die();
}

if (isset($_POST['add_blog'])){
  header('location: ../public/index.php?page=add_blog');
}

// Flash Message
flash_message();

?>
<?php if(isset($_SESSION['user_id']) && $_SESSION['user_permission'] > 0): ?>
<form class="margin-top" action="" method="post">
  <input type="submit" name="add_blog" value="+ Add New Blog" class="input-button border">
</form>
<?php endif; ?>

<?php if($all_blogs): ?>
    <?php foreach ($all_blogs as $row): ?>
    <div class="blog-container">

      <?php

      foreach ($count_comments as $value) {

        if ($value['id'] == $row['id']) {
          $comments_count = $value['comments_count'];
        }

      }

       ?>

      <div class="blog-headline">Date: <?= $row['blog_date']; ?></div>
      <div class="blog-content">
        <?php $_POST['blog_id'] = $row['id']; ?>
        <a href="../public/index.php?page=blog_view&id=<?= urlencode($row['id']);?>"><h1><?= (htmlentities($row['title'], ENT_NOQUOTES)); ?></h1></a>
        <p><?= nl2br(htmlentities($row['article'], ENT_NOQUOTES)); ?></p>
        </div>
          <div class="blog-author">By <?= htmlentities($row['name']); ?></div>
          <a href="../public/index.php?page=blog_view&id=<?= urlencode($row['id']);?>">
          <div class="blog-comments"><i><?= $comments_count; ?> Comments</i></div></a>
          <!-- Delete Blog Section -->
          <?php if(isset($_SESSION['user_id']) && ($_SESSION['user_id'] == $row['user_id'])): ?>
            <form class="" action="" method="post">
              <input type="hidden" name="blog_id" value=" <?= $row['id']; ?> "/>
              <input type="submit" name="delete" value="Delete" class="neg-button float-right"/>
            </form>
          <?php endif; ?>
          <!-- Delete Blog Section - END -->
    </div>

    <?php endforeach; ?>
<?php endif; ?>
