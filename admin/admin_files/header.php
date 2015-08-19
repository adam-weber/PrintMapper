<?php
  $current_dir = $_SERVER['REQUEST_URI'];
?>

<!doctype html>
<meta charset=utf-8>
<head>
  <title>Print Mapper</title>
  <link id="favicon" rel="icon" type="image/x-icon" href="../admin_files/images/favicon_active.ico" />
  <link rel="stylesheet" href="../admin_files/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400,300' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;" />
</head>
<header id="header">
  <h3>Print <span>Mapper</span</h3>
  <nav>
    <a class="<?php if($current_dir == "/admin/map/"){echo "active";}?>" href="../map">Map</a>
    <a class="<?php if($current_dir == "/admin/files/"){echo "active";}?>" href="../files">Settings</a>
  </nav>
</header>