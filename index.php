<?php
$current_page = "index";
include("includes/init.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Home</title>
</head>

<body>
<div id="wrapper">
  <?php include("includes/header.php") ?>
  <div id="content">
    <div class="homepage">
      <h1>CATS + DOGS = HAPPINESS</h1>
    </div>
    <div class="homepage_image">
      <!-- Image Credits all go to Nicole Wang -->
      <?php
        foreach ($homepage_images as $name => $image_file) {
          echo "<a href=\"" . strtolower($name) . ".php\"><img alt=\"" . $name .
               "\" src=\"images/" . $image_file . "\"/></a>";
        } ?>
    </div>
  </div>
  <?php include("includes/footer.php") ?>
</div>
</body>
</html>
