<?php
$current_page = "ace";
include("includes/init.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Ace</title>
</head>

<body>
  <div id="wrapper">
    <?php include("includes/header.php") ?>
    <div class="pet_title">
      <h1>ACE</h1>
    </div>
    <div id="content">
      <!-- Image Credits all go to Nicole Wang -->
      <div class="grid_container">
        <div class="origin">
          <?php print_desc($ace_origin, "origin"); ?>
        </div>
        <div class="origin_image">
          <img alt="Ace looking good." src="images/ace_origin.jpg"/>
        </div>
        <div class="skills_image">
          <img alt="Ace lounging." src="images/ace_skills.jpg"/>
        </div>
        <div class="skills">
          <?php print_skills($ace_skills); ?>
        </div>
        <div class="personality">
          <?php print_desc($ace_personality, "personality"); ?>
        </div>
        <div class="personality_image">
          <img alt="Ace staring off into the distance." src="images/ace_personality.jpg"/>
        </div>
      </div>
    </div>
    <?php include("includes/footer.php") ?>
  </div>
</body>
</html>
