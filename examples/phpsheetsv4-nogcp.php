<?php 
    ini_set("allow_url_fopen", 1);
    
    function getSheets($sheetsurl){
        $file_to_read = fopen($sheetsurl, 'r');
        while (!feof($file_to_read) ) $lines[] = fgetcsv($file_to_read);
        fclose($file_to_read);
        clearstatcache();
        return array_slice($lines,1) ;
    }
?>