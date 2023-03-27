<?php
unlink("yourpage.html");
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
?>

<?php
//echo '1';
file_put_contents('yourpage.html', ob_get_contents());
?>
<?php
$path_to_file = 'yourpage.html';
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("/shared_item/https%3A%2F%2Fapp.box.com%2Fs%2Fj7i88s6jb4yyk4wmiti4tol8ejoikdhl/view/", "<img src=https://m.box.com/file/", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>


<?php
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
    echo $link->nodeValue;
    echo "<a target='_blank' href=https://m.box.com";
    echo $node-> getAttribute('href'), ">";

    echo $node-> getAttribute('href'), "</a>", '<br>';
}
?>



<?php echo '<script type="text/javascript"> window.open("yourpage.html"); </script>'; ?>






