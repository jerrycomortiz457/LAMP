<?php
    session_start();

    $target_dir = "../assets/csv/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["tmp_name"]);
    $uploadOk = 1;
    header("Location: index.php");
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //     if($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }
    // }
    
?>