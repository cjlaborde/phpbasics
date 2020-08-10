<?php

function directoryReader ($directory, array $excludeFiles = ['.', '..', '.DS_Store']) {
    $files = [];

    // do some checks
    if (!is_dir($directory)) {
        return null;
    }

    // return true;

    if (!($filesDirectory = opendir($directory))) {
        return null;
    }

    // loop through the files
    while (($file = readdir($filesDirectory)) !== false) {
        // var_dump($file);    
        if (in_array($file, $excludeFiles)) {
            continue;
          }
        // add to $images
        $files[] = $directory . '/' . $file;
    }
    closedir($filesDirectory);

    // return $images
    return $files;
}