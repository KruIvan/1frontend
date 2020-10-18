<?php

include './Human.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_POST['name'])) {
    $user = new Human($_POST['name'], new DateTime(), 'Ukraine');

    file_put_contents('user.txt', serialize($user));
    header('Location: http://localhost:3000/');
  }

} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
  echo '404, дібіл!!!!';
  echo '<a href="/">На головну</a>';
}
