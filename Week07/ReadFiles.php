<?php
    // Open file - if it doesn't exist create it 
        // To open a file with PHP you use fopen() 
        $open = fopen("sample.txt", "r"); // r is for reading only from beginning of file

        // check if file exists
        if(file_exists("samuel.txt")){
            // do something
        }

    // Reading a file 
        // file_get_contents() returns the file in a string.
        $fullFile = file_get_contents("sample.txt");
        echo $fullFile."<br/>";

        // readFile() opens file, echoes content and closes it.
        readfile("sample.txt");
        echo "<br/>";

        // read a file line-by-line 
        $fp = fopen("samuel.txt", "r");
        while(!feof($fp)){
            $row = fgets($fp, 150); // Getting one line at a time with 100 bytes per line 
            echo $row."<br/>";
        }
        echo "<br/>";

        //reset file pointer to start of file
        rewind($fp);

        // read arbitrary length
        echo fread($fp, 100);
        echo "<br/>";

        //file size 
        echo filesize("samuel.txt");
        echo "<br/>";

        //fseek(FILENAME, NUMBEROFBYTES) sets file pointer to specified position

        //ftell(FILENAME) reports how far the pointer has gone in bytes

        //flock(FILENAME, OPERATION) to lock a file

    // Close a file
        // Use fclose()
        fclose($fp);
?>