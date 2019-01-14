<?php
echo "Here are our files";
$path = "maps";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "$path" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='$maps/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 