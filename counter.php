<?php
    $fileName = __DIR__.'/count/'.$_SERVER['SERVER_NAME'];

    if(!is_file($fileName)){
        file_put_contents($fileName, '0');
    }

    $fp = fopen($fileName, "r+");
    if (!fp) {
        echo('Temporarily unavailable');
    } else {
        while(!flock($fp, LOCK_EX)) {  // acquire an exclusive lock
            // waiting to lock the file
        }

        $str = fread($fp, filesize($fileName));
        $counter = intval(trim($str));
        $counter++;

        echo($counter);

        ftruncate($fp, 0);      // truncate file
        fwrite($fp, $counter);  // set your data
        fflush($fp);            // flush output before releasing the lock
        flock($fp, LOCK_UN);    // release the lock

        fclose($fp);
    }
?>
