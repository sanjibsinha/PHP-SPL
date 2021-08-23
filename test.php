<?php
            
            $files = new FilesystemIterator(__DIR__ .'/all-files/images', 
            FilesystemIterator::UNIX_PATHS);
            foreach ($files as $value) {
                # code...
               // if ($value->geExtension() == 'jpg') {
                    # code...
                    echo $value->getFilename() . ' is of ' 
                . $value->getSize() . ' bytes. The real path is: '
                . $value->getRealPath() . '</br>';
               // }
                
            }
            
            ?>
</hr>
</hr>
<?php
            
            $file = new FilesystemIterator(__DIR__.'/all-files/images');
            foreach ($file as $value) {
                # code...
                if ($value->isFile()) {
                    echo $value->getExtension() . "</br>";
                }              
                
            }
            
            ?>            

</hr>
</hr>

<?php
$iterator = new FilesystemIterator(dirname(__FILE__), FilesystemIterator::KEY_AS_PATHNAME);
echo "Key as Pathname:</br>";
foreach ($iterator as $key => $fileinfo) {
    echo $key . "</br>";
}

$iterator->setFlags(FilesystemIterator::KEY_AS_FILENAME);
echo "\nKey as Filename:\n";
foreach ($iterator as $key => $fileinfo) {
    echo $key . "</br>";
}
?>
