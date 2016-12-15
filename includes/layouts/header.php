<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo get_title($page); ?></title>
        <link rel="stylesheet" href="css/css_reset.css" media="all" type="text/css">
        <link rel="stylesheet" href="css/styles.css" media="all" type="text/css">
	</head>

    <body>
        <div class="page-wrapper">
        	<header>
            <div>
              <h3>Welcome
              <?php

                if (empty($_SESSION['user_id'])){
                  echo '<i style="color: #E34F6F;">' . 'Guest' . '</i>';
                } else {
                  echo '<i style="color: #E34F6F;">' . $_SESSION['user_name'] . '</i>';
                }

              ?>
              to Eldar Blog</h3>
            </div>

        		<div class="user-block">
              <?php if (empty($_SESSION['user_id'])): ?>
     			      <a href="index.php?page=signin">Sign In</a>
     			      <a href="index.php?page=signup">Sign Up</a>
              <?php else: ?>
              	<a href="logout.php">Logout</a>
              <?php endif; ?>
        		</div>

        		<ul>
        			<li><a href="index.php?page=blog">BLOG</a></li>
							<?php if(isset($_SESSION['user_id']) && ($_SESSION['user_status'] = 1) && ($_SESSION['user_permission'] > 5)): ?>
									|
								<li><a href="index.php?page=users">USERS</a></li><!-- Admin -->
							<?php endif; ?>
        		</ul>

        	</header>
          <div class="content">
