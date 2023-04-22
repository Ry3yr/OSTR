<php?
ob_start();
?>

<a target="_blank" href="BoxCOMArt.php">refresh</a><br>
 <a target="_blank" href="lastimages.php">reLOAD</a><br>
<?php
define("TEXT_FILE", "yourpage.html");
define("LINES_COUNT", 3);
function read_file($file, $lines) {
    //global $fsize;
    $handle = fopen($file, "r");
    $linecounter = $lines;
    $pos = -2;
    $beginning = false;
    $text = array();
    while ($linecounter > 0) {
        $t = " ";
        while ($t != "\n") {
            if(fseek($handle, $pos, SEEK_END) == -1) {
                $beginning = true; 
                break; 
            }
            $t = fgetc($handle);
            $pos --;
        }
        $linecounter --;
        if ($beginning) {
            rewind($handle);
        }
        $text[$lines-$linecounter-1] = fgets($handle);
        if ($beginning) break;
    }
    fclose ($handle);
    return array_reverse($text);
}
$fsize = round(filesize(TEXT_FILE)/1024/1024,2);
//echo "<strong>".TEXT_FILE."</strong>\n\n";
//echo "File size is {$fsize} megabytes\n\n";
//echo "Last ".LINES_COUNT." lines of the file:\n\n";
$lines = read_file(TEXT_FILE, LINES_COUNT);
foreach ($lines as $line) {
    echo $line;
}
file_put_contents('lastimage.html', ob_get_contents());
?>
