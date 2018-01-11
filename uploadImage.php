<?php
echo <<<_END
<html><head><title>PHP form for image upload</title></head>
    <body><form method = 'post' action = 'uploadImage.php' enctype = 'multipart/form-data'>
Choose your file: <input type = 'file' name = 'filename' size = '10'/>
<input type = 'submit' value = 'Upload'/>
</form>
_END;

if ($_FILES)
{
    $name = $F_ILES['filename']['name'];
    move_uploaded_file($_FILES['filename'][$tmp_name], $name);
    echo "Success on '$name' <br /> <omg src = '$name' />";
}

echo "</body></html>";