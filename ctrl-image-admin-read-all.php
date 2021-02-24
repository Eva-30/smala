<?php

  // session start & portal
  //include("ctrl.session-start.php");
  //include("ctrl.session-portal.php");

  // still here = authenticated

  // get infos from the db
  include("pdo.php");
  include("mod-image-admin-read-all.php");

  // display
  //include("view/view.html.php");
  include("view-image-admin-read-all.php");
  exit;