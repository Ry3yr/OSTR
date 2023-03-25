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
    echo "<a target='_blank' href=";
    echo "https://m.box.com";
    echo $node-> getAttribute('href');
    echo ">";
    echo $node-> getAttribute('href');
    echo "</a>", '<br>';
}
?>
