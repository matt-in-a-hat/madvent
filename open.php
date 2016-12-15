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
  '<p>I love that we want to travel the world together.</p><a href="https://www.facebook.com/photo.php?fbid=1459148847444563&set=a.554924301200360.150033.100000483843161&type=3&theater"><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/13428011_1459148847444563_2827824956562572338_n.jpg?oh=569ff755893560b68ddd75cb4ab49558&oe=58C7870F" /><br>(see original)</a>',
  '<p>I love how you get along with my weird family.</p><a href="https://www.facebook.com/photo.php?fbid=10205272671847099&set=a.10205114948384111.1073741900.1556160189&type=3&theater"><img src="https://scontent-arn2-1.xx.fbcdn.net/t31.0-8/10926339_10205272671847099_3339682693110442607_o.jpg" /><br>(see original)</a>',
  'I love your cuddles, and that you don\'t get sick of mine.',
  '<p>I love that we both love floofy things.</p><img src="http://static.boredpanda.com/blog/wp-content/uploads/2016/03/hairy-fluffy-cat-sky-the-ragdoll-latest.jpg" />',
  'I love we share many opinions, and are empathetic with opinions we don\'t.',
  '<p>I love the things we get up to.</p><iframe width="560" height="315" src="https://www.youtube.com/embed/vdk9zW4k07M" frameborder="0" allowfullscreen></iframe><p>PS happy birthday <3</p>',
  'I love your sense of humour.',
  'I love your cute hands, and I love to hold them.',
  'I love your eyes and how they smile at me.',
  'I love that we work well socially.',
  '<p>I love that we enjoy many similar things.</p><img width="640" src="https://i.ytimg.com/vi/X7HmltUWXgs/maxresdefault.jpg" />',
  'I love that we can <a href="https://www.facebook.com/matthewlang/videos/10153564663851081/">laugh at ourselves.</a>',
  '<p>I love that I\'ve liked you for 3 years.</p><img src="https://media1.giphy.com/media/koffL0oiVv9iE/200_s.gif" /><p>PS Happy 2.91667 years</p>',
  'I love that we can\'t decide which day to celebrate.',
  'I love that we share similar dislikes towards children.',
  '<p>I love that there hasn\'t been too many puns recently :P</p><img src="https://scontent.fosl1-1.fna.fbcdn.net/v/t1.0-0/p526x296/12592599_1107944779270377_1020160247845530088_n.png?oh=cd5ea9d3ab5823cf58a9636bf21c8c8d&oe=58E81686" height="398" />',
  '<p>I love that we love what Jake loves.</p><img src="https://media0.giphy.com/media/55B9OMISWipKE/200.gif#11" />',
  '<p>I love how creative we can be.</p><img src="https://scontent.fosl1-1.fna.fbcdn.net/v/t1.0-9/1526427_10153118327416081_1174637260758112106_n.jpg?oh=8abcf6a28e78a47637c708e40277bf5a&oe=58AF0A9A" width="480" /><p style="font-size: 10px;">And how crude ;)</p>',
  '<p>Most of all, I love you!</p><p>Merry Christmas Maddy.</p>',
);

// IDEAS
//
// Ukulele
// Poems
// Cat pic (share love of fluffy things?)
// Reflect on a memory (with pic?)

if (isset($_GET['door'])) {
  $now = new DateTime('now', new DateTimeZone('Europe/Oslo'));
  $doorDate = new DateTime('2016-12-' . $_GET['door'] . ' 00:00:00', new DateTimeZone('Europe/Oslo'));
  if ($doorDate < $now && isset($messages[$_GET['door']])) {
    respond($messages[$_GET['door']]);
  }
}

respond('Invalid request', 400);
