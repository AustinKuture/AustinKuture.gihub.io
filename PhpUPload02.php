
<?php

if ($_FILES["file"]["error"] > 0){

    echo "<br>".$_FILES["file"]["error"]."<br>";
}else{

    echo "<br>文件名 : ".$_FILES["file"]["name"];
    echo "<br>尺寸 : ".$_FILES["file"]["size"];
    echo "<br>类型 : ".$_FILES["file"]["type"];
}

?>