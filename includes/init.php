<?php
$pages = array("lulu" => "Lulu",
               "ace" => "Ace",
               "darla" => "Darla",
               "index" => "Home");

$homepage_images = array("Darla" => "darla_homepage.jpg",
                         "Ace" => "ace_homepage.jpg",
                         "Lulu" => "lulu_homepage.jpg");

$darla_origin = "Darla was adopted from a local animal shelter on a Saturday morning,
                 October 21, 2011. Our Dad was originally against adopting a cat,
                 but we looked at the cats up for adoption anyways and saw an orange
                 and white cat stick her paw out and try to play with us. We decided
                 that she was the one. Our Dad is now a secret cat lover.";
$darla_skills = array("Laying on the air vents when it's hot out and not moving for hours",
                      "Not knowing her stomach's limits and throwing up on the floor",
                      "Shedding ungodly amounts of white fur that gets everywhere");
$darla_personality = "Darla was born on June 21, 2011. She excels in being fat and
                      lazy and cute, all at the same time. Darla loves finding
                      the spots where the sun shines in through the windows and
                      basking in the sunlight. She loves being scratched behind
                      the ears and under her chin. Darla's favorite hobby is
                      sleeping.";

$ace_origin = "Ace was stolen from a friend's house (not really). Our friend posted
               on Facebook saying her cat had given birth to a litter of kittens
               and she couldn't keep them all. We went to her house and saw a bunch
               of Siamese kittens, but Ace stood out from the rest as the only
               black and white cat. We adopted him on June 21, 2015.";
$ace_skills = array("Meowing loudly for food in the dark at three in the morning",
                    "Being able to defy the laws of gravity while jumping for a toy mouse",
                    "Making purring sounds loud enough to sound like a car engine");
$ace_personality = "Ace was born on April 23, 2014. We originally had to block off
                    the living room because Darla kept hissing at Ace, but now
                    they are best cat friends. He is extremely shy and always
                    hides from strangers visiting the house, but he loves Nicole
                    the most. When Ace lets you pet him or scratch behind his ears,
                    he always purrs very loudly.";

$lulu_origin = "Lulu was adopted from an Amish family on September 10, 2016. Peeing
                on people when she gets too excited apparently runs in the family
                because Lulu's mother did the same thing when we first met her.
                Lulu initially had separation anxiety and frequently tore up papers
                at home but she has since gotten over it. Lulu's friendly nature has
                also converted our Dad into a dog lover.";
$lulu_skills = array("Peeing on the floor when someone comes home and she gets too excited",
                     "Spreading said pee running down her leg by furiously wagging her tail",
                     "Completely missing treats thrown two inches in front of her mouth");
$lulu_personality = "Lulu was born on May 13, 2016. Lulu is an overly affectionate
                     attention-hogger that constantly licks your hand if you offer
                     it to her. She always whines when we leave the house even
                     if it's only for a few hours, and you can always hear her
                     claws on the wooden floor as she scrambles towards you whenever
                     she hears the garage door open.";

// Prints out the Skills section on each pet's page
function print_skills($skills) {
  echo "<h2>Skills</h2>";
  echo "<ul>";
  foreach ($skills as $skill) {
    echo "<li>" . htmlspecialchars($skill) . "</li>";
  }
  echo "</ul>";
}

// Prints out the Origin Story and Personality description sections on each pet's page
function print_desc($text, $section) {
  if ($section == "origin") {
    echo "<h2>Origin Story</h2>";
  }
  elseif ($section == "personality") {
    echo "<h2>Personality</h2>";
  }
  echo "<p>" . htmlspecialchars($text) . "</p>";
}
