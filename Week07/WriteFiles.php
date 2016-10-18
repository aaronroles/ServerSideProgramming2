<?php
    // Writing files 
        //fwrite() -
            readfile("sample.txt");

            $fp = fopen("sample.txt", "a"); //a is for writing only from beginning of file
            
            fwrite($fp, 'Hello world');

            fclose($fp);

            readfile("sample.txt");

        //fputs() -
            $file = fopen("new.txt", "w");  // w is for writing only from beginning of file; if no file try create it 
                                            // so here I am creating a new file called new.txt 
            echo fputs($file, "Hello World. testing!");
            fclose($file);

        //file_put_contents() - fopen, fwrite, fclose in one go 
            echo file_put_contents("new.txt", "Hello new text file");

?>