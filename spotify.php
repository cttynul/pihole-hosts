<?php
  $hosts_file = file_get_contents("https://raw.githubusercontent.com/x0uid/SpotifyAdBlock/master/SpotifyBlocklist.txt");
  $pattern = '/ *0\.0\.0\.0 */';
  $replacement = "";
  echo preg_replace($pattern, $replacement, $hosts_file);
?>
