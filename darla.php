<?php
$current_page = "darla";
include("includes/init.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Darla</title>
</head>

<body>
<div id="wrapper">
  <?php include("includes/header.php") ?>
  <div class="pet_title">
    <h1>DARLA</h1>
  </div>
  <div id="content">
    <!-- Image Credits all go to Nicole Wang -->
    <div class="grid_container">
      <div class="origin">
        <?php print_desc($darla_origin, "origin"); ?>
      </div>
      <div class="origin_image">
        <img alt="Darla looking good." src="images/darla_origin.jpg"/>
      </div>
      <div class="skills_image">
        <img alt="Darla sleeping." src="images/darla_skills.jpg"/>
      </div>
      <div class="skills">
        <?php print_skills($darla_skills); ?>
      </div>
      <div class="personality">
        <?php print_desc($darla_personality, "personality"); ?>
      </div>
      <div class="personality_image">
        <img alt="Darla licking her paw." src="images/darla_personality.jpg"/>
      </div>
    </div>
  </div>
  <?php include("includes/footer.php") ?>
</div>
</body>
</html>
