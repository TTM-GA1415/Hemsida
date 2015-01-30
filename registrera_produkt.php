<?php

echo "<form method='POST' enctype='multipart/form-data'>";
echo "<input type='file' name='myUpload'>";
echo "<input type='submit' name='file_submit' value='upload'>";
echo "</form>";

function file_upload($field, $path = "d:\xampp\htdocs\hemsida\bilder") {

    if (is_uploaded_file($_FILES[$field]['tmp_name'])) {

        $file_types = array("image/gif", "image/jpeg", "image/png");
        if (in_array($_FILES[$field]['type'], $file_types)) {

            if (file_exists($path . $_FILES[$field]['name'])) {
                $i = 1;
                while (file_exists($path . "(" . $i . ")" . $_FILES[$field]['name'])) {
                    $i++;
                }
                $_FILES[$field]['name'] = "(" . $i . ")" . $_FILES[$field]['name'];
            }
            
            move_uploaded_file($_FILES[$field]['tmp_name'], $path . $_FILES[$field]['name']);
        }
        
    }
    else{
        $_FILES[$field]['error'] = 5;
    }
}
