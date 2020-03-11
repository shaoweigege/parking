<?php
    $fileName = str_replace("www.", "", $_SERVER['SERVER_NAME']);

    if(!is_file($fileName)){
        echo("");
    } else {
      $fp = fopen($fileName, "r+");
      if (!$fp) {
          echo('Temporarily unavailable');
          var_dump($fileName);
      } else {
          $str = fread($fp, filesize($fileName));
          if ($str === FALSE) {
            echo("");
          } else {
            $url = parse_url(trim($str));
            echo($url);
          }
      }
      fclose($fp);
    }
?>
