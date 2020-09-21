<?php

if ( isset( $_POST['submit'] ) ) {
    try {
        
        $image_file = $_FILES['filUpload']['name'];
        $image_type = $_FILES['filUpload']['type'];
        $image_size = $_FILES['filUpload']['size'];
        $temp = $_FILES['filUpload']['tmp_name'];
        $extension = pathinfo($_FILES["filUpload"]["name"], PATHINFO_EXTENSION);
        $image_name = $mem_id.'.'.$extension;

        echo $image_file.'<br>';
        echo $image_type.'<br>';

        $target_path = 'upload_images/'.$image_name;
        //$directory = 'upload_images/';

        if ( empty( $image_name ) ) {
            $errorMsg = 'Please Enter Name';
        } else if ( empty( $image_file ) ) {
            $errorMsg = 'Please Select image';
        } else if ( $image_type == 'image/jpg' || $image_type == 'image/jpeg'
        || $image_type == 'image/png' || $image_type == 'image/gif' ) {
            if ( !file_exists( $target_path ) ) {
                if ( $image_size < 500000 ) {
                    //unlink($directory.$res['image_name']);
                    move_uploaded_file( $temp, $target_path );
                } else {
                    $errorMsg = 'Your File To large Please Upload 5MB Size';
                }
            } else {
                $errorMsg = 'File Already Exists...Check Upload Folder';
            }

        } else {
            $errorMsg = 'Upload JPG , JPEG , PNG , GIF File Formate ... Check File Extension';
        }

    } catch ( PDOException $e ) {
        echo $e->getMessage();
    }

    echo '<br>';
}

// $target_dir = 'upload_images/';
// $target_file = $target_dir . basename( $_FILES['filUpload']['name'] );
// $uploadOk = 1;
// $imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );

// // Check if image file is a actual image or fake image
// if ( isset( $_POST['submit'] ) ) {
//     $check = getimagesize( $_FILES['filUpload']['tmp_name'] );
//     if ( $check !== false ) {
//         echo 'File is an image - ' . $check['mime'] . '.';
//         $uploadOk = 1;
//     } else {
//         echo 'File is not an image.';
//         $uploadOk = 0;
//     }
// }

// // Check if file already exists
// if ( file_exists( $target_file ) ) {
//     echo 'Sorry, file already exists.';
//     $uploadOk = 0;
// }

// // Check file size
// if ( $_FILES['filUpload']['size'] > 500000 ) {
//     echo 'Sorry, your file is too large.';
//     $uploadOk = 0;
// }

// // Allow certain file formats
// if ( $imageFileType != 'jpg'
// && $imageFileType != 'png'
// && $imageFileType != 'jpeg'
// && $imageFileType != 'gif' ) {
//     echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
//     $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ( $uploadOk == 0 ) {
//     echo 'Sorry, your file was not uploaded.';
//     // if everything is ok, try to upload file
// } else {
//     if ( move_uploaded_file( $_FILES['filUpload']['tmp_name'], $target_file ) ) {
//         echo 'The file '. basename( $_FILES['filUpload']['name'] ). ' has been uploaded.';
//     } else {
//         echo 'Sorry, there was an error uploading your file.';
//     }
// }
?>