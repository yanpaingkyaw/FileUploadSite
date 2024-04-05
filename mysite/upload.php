<?php
    $target_dir = "/opt/lampp/htdocs/mysite/uploads/";
    $target_archive_dir = "/opt/lampp/htdocs/mysite/uploads/archive/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $c_datetime = date("d-m-Y") . "-" . time();

    echo $target_file;
    echo "<br/>";
    echo $_FILES["fileToUpload"]["tmp_name"];
    echo "<br/>";




    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] >   2000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        //upload
        $archive_filename = "AtomStore" . date("Y-m-d-h:m:s") . ".apk";
        $upload_filename = "AtomStore.apk";
        $archivefile = $target_archive_dir . $archive_filename;

        
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        //move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $archivefile);
        echo "This is Successfully uploaded <br/>";

        //copy upload
        $source_copy = $target_file;
        $des_copy = $target_archive_dir . $archive_filename;
        copy($source_copy, $des_copy);
        


        //Rname the file in Upload file
        $renamefile = $target_dir . $upload_filename;
        rename($target_file, $renamefile);
        echo "File is Successfully Archive";
        
        header("Location: /mysite/index.php");
    }
?>