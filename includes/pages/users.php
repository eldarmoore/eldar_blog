<?php

// - SECURITY - Permission check to access the page.
if (empty($_SESSION['user_id']) || $_SESSION['user_permission'] < 6) {

  header('location: ../public/index.php?page=signin');
}
// END

$all_users = [];
$usr_number = '';

$status_color = '';
$permission_color = '';

$sql = "SELECT * FROM users";
$result = mysqli_query($dbc, $sql);

if($result && mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {

    $all_users[] = $row;

  }

}

// Edit User
if (isset($_POST['edit_user'])){

  header('location: ../public/index.php?page=user_page&user=' . $_POST['edit_rec_id'] );

  // $id = $_POST['edit_rec_id'];
  // $sql = "SELECT FROM users WHERE id = $id";
  // $result = mysqli_query($dbc, $sql);
  // header('location: ../public/index.php?page=users');
  // $_SESSION['pos_message'] = 'User has been removed.';
  // die();
}

// $status_color;
// $permission_color;

// Flash Message
flash_message();

?>
<table>
  <tr>
    <th width="10px"></th>
    <th>Name:</th>
    <th>Email:</th>
    <th width="100px">Date:</th>
    <th width="10px" class="text-center">Permission:</th>
    <th width="80px">Status:</th >
    <th width="80px">Edit:</th >
  </tr>
  <?php if($all_users): ?>
    <?php foreach ($all_users as $row): ?>
      <?php $status = user_status($row['status']); ?>
      <?php $status_color = user_status_color($status); ?>
      <?php $permission = user_permission($row['permission']); ?>

      <tr>
        <td><?= ++$usr_number; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <?php

        // $datetime is something like: 2014-01-31 13:05:59
        $datetimeFromMysql = $row['date'];
        $time = strtotime($datetimeFromMysql);
        $myFormatForView = date('d M Y', $time);
        // $myFormatForView is something like: 01/31/14 1:05 PM

        ?>
        <td><?= $myFormatForView; ?></td>
        <td style="text-align: center;" class="<?= $permission_color; ?>"><?= $permission; ?></td>
        <td style="text-align: center;" class="<?= $status_color; ?>"><?= $status; ?></td>
        <td>

          <form class="" action="" method="POST" id="edit-user">
            <input type="hidden" name="edit_rec_id" value=" <?= $row['id']; ?> "/>
            <input type="submit" name="edit_user" value="Edit">
          </form>

        </td>
      </tr>
      <?php endforeach; ?>
      <?php endif; ?>

</table>
