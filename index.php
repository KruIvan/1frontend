<?php

include './Human.php';

const SESSION_FILE = 'user.txt';

$user = null;

if (file_exists(SESSION_FILE)) {
  $user = unserialize(file_get_contents(SESSION_FILE));
}

if ($user !== null && $user instanceof Human) {
  $content = '<h3>You are logged in as ' . $user->name . '</h3>';
  $content .= '<img src="https://www.gravatar.com/avatar/' . md5($user->name) . '?s=200" />';
  $content .= '<a href="/logout.php">Logout</a>';

} else {
  $content = '<h3 id="grey-text">Please log in</h3>
  <form action="sign-up.php" method="post">
    <input type="text" name="name" value="">
    <br>
    <input type="submit" value="Sign up">
  </form>';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="wrapper">
      <?php echo $content; ?>
    </div>
  </body>
</html>
