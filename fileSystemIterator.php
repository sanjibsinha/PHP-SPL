<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap core CSS -->
<link href="style.css" rel="stylesheet">

  </head>
  <body>
      <div class="body">
          <h1>
            <?php echo "Hello PHP SPL Class"; ?>
          </h1> 
          <h2>
              Using DirectoryIterator
          </h2>       
      </div>
      <div class="container">
        <code>
          <?php
          $file = new DirectoryIterator('all-files/images');
          foreach($file as $filePath){
              echo $filePath . "</br>";
          }
          ?>
        </code>
      </div>
      <h2>
              Using FileSystemIterator
      </h2> 
      <div class="container">
        <code>
          <?php
          /// relative path can also be used as key and value
          $file = new FilesystemIterator('all-files/images');
          foreach($file as $filePath){
              echo $filePath . "</br>";
          }
          ?>
        </code>
      </div>
      <h2>
              Using FileSystemIterator file path Key and Value
      </h2> 
      <div class="container">
        <code>
          <?php
          /// relative path can also be used as key and value
          $file = new FilesystemIterator('all-files/images');
          foreach($file as $key=>$filePath){
              echo $key . " >> " . $filePath . "</br>";
          }
          ?>
        </code>

      </div>
      <h2>
              Using FileSystemIterator set flags KEY_AS_FILENAME
      </h2> 
      <div class="container">
        <code>
          <?php
          /// relative path can also be used as key and value
          $file = new FilesystemIterator('all-files/images');
          $file->setFlags(FilesystemIterator::KEY_AS_FILENAME);
          foreach($file as $key=>$filePath){
              echo $key . " >> " . $filePath . "</br>";
          }
          ?>
        </code>

        <h2>
              Using FileSystemIterator and avoiding cloning
      </h2> 
      <div class="container">
        <code>
          <?php
          /// relative path can also be used as key and value
          $file = new FilesystemIterator('all-files/images');
          $file->setFlags(FilesystemIterator::KEY_AS_FILENAME);
          foreach($file as $key=>$filePath){
              //echo $key . " >> " . $filePath . "</br>";
              $files[] = $filePath;
          }
            echo $files[0]->getFilename() . "</br>" . $files[0]->getFileInfo();

          ?>
        </code>


      </div>




      <p class="footer">
          <a href="index.php">HOME</a>
          </p>
    
      
  </body>
</html>



