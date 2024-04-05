<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="main">
        <div id="upload">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </div>
        <div id="upload-lis">
        <?php
                    // $dirPath contain path to directory whose files are to be listed 
                    $dirPath = getcwd() . "/uploads/";
                    //echo $dirPath;
                    //echo "<br/>";
                    $files = scandir($dirPath);  
                    echo "<h3>Uploaded File </h3>";
                    echo "<ol>";
                    foreach ($files as $file) {
                        $filePath = $dirPath . '/' . $file;
                       
                        if (is_file($filePath)) {
                           
                            echo "<li><a href='/mysite/uploads/archive/$file'>" . $file . "</a></li>";
                           
                        }
                       
                    }    
                    echo "</ol>";
            ?>
        </div>
        <div id="upload-archive-list">
            <?php
                    // $dirPath contain path to directory whose files are to be listed 
                    $dirPath = getcwd() . "/uploads/archive/";
                    //echo $dirPath;
                    //echo "<br/>";
                    $files = scandir($dirPath);  
                    echo "<h3>Uploaded Archive File List</h3>";
                    echo "<ol>";
                    foreach ($files as $file) {
                        $filePath = $dirPath . $file;
                       
                        if (is_file($filePath)) {
                           
                            echo "<li><a href='/mysite/uploads/archive/$file'>" . $file . "</a></li>";
                           
                        }
                       
                    }    
                    echo "</ol>";
            ?>
        </div>
     </div>
</body>
</html>