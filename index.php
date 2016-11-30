<!DOCTYPE html>
<html> <!-- <html lang="en" xmlns="http://www.w3.org/1999/xhtml"> -->
  <head>
    <title>Madvent Calendar</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" type="text/css" media="screen" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="doors.js" type="text/javascript"></script>

  </head>
  <body>
    <div id="container">
      <div id="content">
        <h1>Madvent Calendar</h1>
        <h3>Each door made with love</h3>
        <ul class="door-list">
          <?php
          for ($door=1; $door < 25; $door++) {
            $sprite = rand(1, 8);
            ?>
            <li data-door="<?= $door ?>" class="door-<?= $sprite ?>">
              <span class="number"><?= $door ?></span>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </body>
</html>
