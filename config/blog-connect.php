<?php
global $text, $maxchar, $end;
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}


$xml=("https://www.somewhatcreative.net/feed");
global $item_title, $item_link, $item_description;

$xmlDoc = new DOMDocument();

$xmlDoc->load($xml);

$x=$xmlDoc->getElementsByTagName('item');

for ($i=0; $i<3; $i++)

{

$item_title[$i] = $x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
$item_link[$i] = $x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
$item_description[$i] = $x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

}

?>