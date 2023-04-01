
<br>
<?php
$filename = 'yourpage.html';
if (file_exists($filename)) {
    echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
}
?> <a target="_blank" href="delete.php">REFRESH</a>
<br><br>





<?php
//require 'simple_html_dom.php';
//unlink("yourpage.html");
ob_start();
$dom = new DOMDocument;
@$dom->loadHTML($html);
$links = $dom->getElementsByTagName('a');
$url = 'https://m.box.com/shared_item/https%3A%2F%2Fapp.box.com%2Fs%2Fj7i88s6jb4yyk4wmiti4tol8ejoikdhl?page=9';
$html = file_get_contents($url);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$nodes = $xpath->query('//a[@class="files-item-anchor"]');
foreach ($nodes as $node){
    //echo $link->nodeValue;
    //echo "<a class href=https://m.box.com";
    echo $node-> getAttribute('href');
    //echo $node-> getAttribute('href'), ">";
    //echo $node-> getAttribute('href'), "</a>", '<br>';
    echo "/download?shared_link=https%3A%2F%2Fapp.box.com%2Fs%2Fj7i88s6jb4yyk4wmiti4tol8ejoikdhl";
    echo ">",'</img>',"\n";
}

//echo '1';
file_put_contents('yourpage.html', ob_get_contents());

$path_to_file = 'yourpage.html';
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("/shared_item/https%3A%2F%2Fapp.box.com%2Fs%2Fj7i88s6jb4yyk4wmiti4tol8ejoikdhl/view/", "<img src=https://m.box.com/file/", $file_contents);
file_put_contents($path_to_file, $file_contents);

$dom = new DOMDocument;
@$dom->loadHTML($html);
$links = $dom->getElementsByTagName('a');
$html = file_get_contents($url);
$dom = new DOMDocument();
@$dom->loadHTML($html);
$xpath = new DOMXPath($dom);
$nodes = $xpath->query('//a[@class="files-item-anchor"]');

foreach ($nodes as $node){
    echo $link->nodeValue;
    echo "<a target='_blank' href=https://m.box.com";
    echo $node-> getAttribute('href'), ">";

    echo $node-> getAttribute('href'), "</a>", '<br>';
}
?><br>



<?php 
//echo '<script type="text/javascript"> window.open("yourpage.html"); </script>'; 
echo "<a href=http://alceawisteria.byethost7.com/PHP/0demo/2023-03-25-BoxNet/yourpage.html>LINK</a>";
?>

<!--<object type="text/html" data="yourpage.html" style="width:100%; height:100%"></object>-->
<!--<iframe src="yourpage.html" name="boxnetgallery" style=" display:block; position: absolute; height: 100%; width: 100%" frameborder="0" ></iframe>--><br><br>

<a href="javascript:myeditFunction()">Images</a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>function myeditFunction() {
$("#editor").load("yourpage.html");
}</script>
<div class="formClass"><div id="editor"></div></div>



