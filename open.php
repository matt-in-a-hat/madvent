<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

function respond($message, $status=200) {
  http_response_code($status);
  echo $message;
  exit();
}

$messages = array(
  'A cat dies due to your curiosity.',
  'I love the way you love lame things I make... like this ;)',
  'You have such a pretty smile, I love it.',
  'I love that you like a challenge.',
  'I love your passion for food and cooking, and the yummies you create me.',
  'Flambo is red, Ice king is blue, Marcy is cute, but not cuter than you.',
);

// IDEAS
//
// Ukulele
// Poems
// Cat pic
// Reflect on a memory (with pic?)

if (isset($_GET['door'])) {
  $now = new DateTime('now', new DateTimeZone('Europe/Oslo'));
  $doorDate = new DateTime('2016-12-' . $_GET['door'] . ' 00:00:00', new DateTimeZone('Europe/Oslo'));
  if ($doorDate < $now && isset($messages[$_GET['door']])) {
    respond($messages[$_GET['door']]);
  }
}

respond('Invalid request', 400);
