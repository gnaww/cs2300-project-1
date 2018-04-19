<header>
  <span id="title">The Wang Pets</span>
  <nav id="navbar">
    <ul>
      <?php
        foreach($pages as $page => $page_name) {
          if ($page == $current_page) {
            echo("<li><a href='" . $page . ".php' class='current_page'>" . $page_name .
                 "</a></li>");
          }
          else {
            echo("<li><a href='" . $page . ".php'>" . $page_name . "</a></li>");
          }
        }
      ?>
    </ul>
  </nav>
</header>
