<?php
    $urlData = parse_url($_SERVER['SERVER_NAME']);
    $fileName = __DIR__.'/redirect/'.$urlData['host'];
    var_dump($urlData['host']);
    var_dump($filename);

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
            var_dump($url);
          }
      }
      fclose($fp);
    }
?>
