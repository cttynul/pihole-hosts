<?php
  $hosts_file = file_get_contents("https://adaway.org/hosts.txt");
  $pattern = '/ *0\.0\.0\.0 */';
  $replacement = "";
  echo preg_replace($pattern, $replacement, $hosts_file);
?>
