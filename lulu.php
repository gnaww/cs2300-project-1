<?php
$current_page = "lulu";
include("includes/init.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Lulu</title>
</head>

<body>
  <div id="wrapper">
    <?php include("includes/header.php") ?>
    <div class="pet_title">
      <h1>LULU</h1>
    </div>
    <div id="content">
      <!-- Image Credits all go to Nicole Wang -->
      <div class="grid_container">
        <div class="origin">
          <?php print_desc($lulu_origin, "origin"); ?>
        </div>
        <div class="origin_image">
          <img alt="Lulu looking good." src="images/lulu_origin.jpg"/>
        </div>
        <div class="skills_image">
          <img alt="Lulu and the sunset." src="images/lulu_skills.jpg"/>
        </div>
        <div class="skills">
          <?php print_skills($lulu_skills); ?>
        </div>
        <div class="personality">
          <?php print_desc($lulu_personality, "personality"); ?>
        </div>
        <div class="personality_image">
          <img alt="Lulu with a snow beard." src="images/lulu_personality.jpg"/>
        </div>
      </div>
    </div>
    <?php include("includes/footer.php") ?>
  </div>
</body>
</html>
