<?php
  $current_dir = $_SERVER['REQUEST_URI'];
?>

<!doctype html>
<meta charset=utf-8>
<head>
  <title>Print Mapper</title>
  <link id="favicon" rel="icon" type="image/x-icon" href="../admin_files/images/favicon_active.ico" />
  <link rel="stylesheet" href="../../admin/admin_files/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400,300' rel='stylesheet' type='text/css'>
</head>
<header id="header">
  <h3>Print <span>Mapper</span</h3>
  <nav>
    <a class="<?php if($current_dir == "/admin/map"){echo "active";}?>" href="../admin/map">Map</a>
    <a class="<?php if($current_dir == "/admin/files"){echo "active";}?>" href="../admin/files">Settings</a>
  </nav>
</header>