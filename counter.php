<?php
    $fileName = "count/" + $_SERVER['SERVER_NAME'];

    if(!is_file($fileName)){
        $contents = '0';                         // Initial value
        file_put_contents($file, $contents);     // Save our content to the file.
    }

    $fp = fopen($fileName, "r+");

    while(!flock($fp, LOCK_EX)) {  // acquire an exclusive lock
        // waiting to lock the file
    }

    $counter = intval(fread($fp, filesize($fileName)));
    $counter++;

    ftruncate($fp, 0);      // truncate file
    fwrite($fp, $counter);  // set your data
    fflush($fp);            // flush output before releasing the lock
    flock($fp, LOCK_UN);    // release the lock

    fclose($fp);
?>