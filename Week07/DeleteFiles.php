<?php

    //unlink()
        $fp = fopen("new.txt", "a");
        fwrite($fp, "Hello new text file");
        fclose($fp);
        // Deleting new.txt completely
        unlink("new.txt");

?>