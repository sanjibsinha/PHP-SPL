<?php
$dir = new DirectoryIterator('all-files/images');
foreach ($dir as $key => $file) {
    //var_dump($file);
    if ($file->isFile()) {
       //echo $key . ': ' . $file->getPathname() . '<br>';
        $files[] = clone $file;
    }
}
echo $files[1]->getFilename();
