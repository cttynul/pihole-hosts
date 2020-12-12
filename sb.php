<?php
    if(isset($_GET['m'])){
      $url = "https://raw.githubusercontent.com/StevenBlack/hosts/master/alternates/" . $_GET['m'] . "/hosts";
    }
    else{
      $url = "https://raw.githubusercontent.com/StevenBlack/hosts/master/hosts";
    }
    
    function get_contents($url, $u = false, $c = null, $o = null) {
      $headers = get_headers($url);
      $status = substr($headers[0], 9, 3);
      if ($status == '200') {
          return file_get_contents($url, $u, $c, $o);
      }
      return false;
    }
      
    $hosts_file = get_contents($url);

    if ( $hosts_file === false ){
      echo "Can't connect to " . $url .  " :(";
    }
    else{
      $pattern = '/ *0\.0\.0\.0 */';
      $replacement = "";
      echo preg_replace($pattern, $replacement, $hosts_file);
    }
?>
