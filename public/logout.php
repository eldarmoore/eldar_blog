<?php

require '../includes/functions.php';

//session_save_path('../sessions/');
secured_session_start('eldarblog');
session_destroy();
header('location: index.php?page=signin');
