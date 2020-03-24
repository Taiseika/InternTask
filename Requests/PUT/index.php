<?php
$max_image_width = 9999;
$max_image_height = 9999;
$max_image_size = $max_image_height * $max_image_width;
$valid_types = array("gif", "jpg", "png", "jpeg");

if (isset($_FILES["userfile"])) {
    if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
        $filename = basename($_FILES['userfile']['name']);
        $ext = substr($_FILES['userfile']['name'], 1 + strrpos($_FILES['userfile']['name'], "."));
        // strpos --  Возвращает позицию первого вхождения подстроки

        // получим массив свойств файла
        $size = GetImageSize($_FILES['userfile']['tmp_name']);

        //проверим размер фото
        if (filesize($_FILES['userfile']['tmp_name']) > $max_image_size) {
            echo "Error: File size > " . $max_image_size;
        } elseif (!in_array($ext, $valid_types)) {
            echo 'Error: Invalid file type.';
        } elseif (($size) && ($size[0] < $max_image_width) && ($size[1] < $max_image_height)) {
            $uploaddir = 'uploads/';
            $uploadfile = $uploaddir . $filename;
            move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
            echo "<img src='$uploadfile' alt='$filename' title='$filename' />";
        } else {
            echo 'Error: invalid image properties.';
        }

    } else {
        echo "Error: empty file.";
    }
} else {
    echo '
<form enctype="multipart/form-data" method="post">
Send this file: <input name="userfile" type="file">
<input type="submit" value="Send File">
</form>';
}
?>
