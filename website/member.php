<?php

// include function files for this application
require_once('bookmark_fns.php');


//create short variable names
$username = $_POST['username'];
$passwd = $_POST['passwd'];

if ($username && $passwd) {
// they have just tried logging in
  try  {
    login($username, $passwd);
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $username;
  }
  catch(Exception $e)  {
    // unsuccessful login
   header('Location: ./forgot_form.php');
    exit;
  }
}

check_valid_user();
// get the bookmarks this user has saved
session_start();
$_SESSION['can_visit'] = true;
$_SESSION['valid_user'] = $_POST['username'];
header('Location: ./forum');
?>
