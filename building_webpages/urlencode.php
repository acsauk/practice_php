<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>First Page</title>
  </head>
  <body>

  <?php
    $page = "William Shakespeare";
    $quote = "To be or not to be";
    $link1 = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote);

    $link2 = "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote);


    echo $link1 . "<br />";
    echo $link2 . "<br />";
  ?>

  </body>
</html>
