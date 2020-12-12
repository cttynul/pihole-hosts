<?php
  $hosts_file = file_get_contents("https://raw.githubusercontent.com/cttynul/NSABlocklist/master/HOSTS")
  $pattern = '/ *0\.0\.0\.0 */gm';
  $replacement = "";
  echo preg_replace($pattern, $replacement, $hosts_file);
?>
