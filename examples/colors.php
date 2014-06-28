<?php
require_once('../ascii_table.php');
// Colors Example Data
$svg_colors = array(
   array(
        'color' => 'Red',
        'HEX' => '#FF0000',
        'Red' => '255',
        'Green' => '0',
        'Blue' => '0',
        'Hue' => '0',
        'Saturation' => '100',
        'Lightness' => '50',
        'Cyan' => '0',
        'Magenta' => '100',
        'Yellow' => '100',
        'Key' => '0',
    ),
    array(
        'color' => 'Orange',
        'HEX' => '#FFA500',
        'Red' => '255',
        'Green' => '165',
        'Blue' => '0',
        'Hue' => '39',
        'Saturation' => '100',
        'Lightness' => '50',
        'Cyan' => '0',
        'Magenta' => '100',
        'Yellow' => '35',
        'Key' => '0',
    ),
    array(
        'color' => 'Yellow',
        'HEX' => '#FFFF00',
        'Red' => '255',
        'Green' => '255',
        'Blue' => '0',
        'Hue' => '60',
        'Saturation' => '100',
        'Lightness' => '50',
        'Cyan' => '0',
        'Magenta' => '0',
        'Yellow' => '100',
        'Key' => '0',
    ),
    array(
        'color' => 'Green',
        'HEX' => '#008000',
        'Red' => '0',
        'Green' => '128',
        'Blue' => '0',
        'Hue' => '120',
        'Saturation' => '100',
        'Lightness' => '25',
        'Cyan' => '100',
        'Magenta' => '0',
        'Yellow' => '100',
        'Key' => '50',
    ),
    array(
        'color' => 'Blue',
        'HEX' => '#0000FF',
        'Red' => '0',
        'Green' => '0',
        'Blue' => '255',
        'Hue' => '240',
        'Saturation' => '100',
        'Lightness' => '50',
        'Cyan' => '100',
        'Magenta' => '100',
        'Yellow' => '0',
        'Key' => '0',
    ),
    array(
        'color' => 'Indigo',
        'HEX' => '#4B0082',
        'Red' => '75',
        'Green' => '0',
        'Blue' => '130',
        'Hue' => '275',
        'Saturation' => '100',
        'Lightness' => '25',
        'Cyan' => '42',
        'Magenta' => '100',
        'Yellow' => '0',
        'Key' => '49',
    ),
    array(
        'color' => 'Violet',
        'HEX' => '#EE82EE',
        'Red' => '238',
        'Green' => '130',
        'Blue' => '238',
        'Hue' => '300',
        'Saturation' => '76',
        'Lightness' => '72',
        'Cyan' => '0',
        'Magenta' => '45',
        'Yellow' => '0',
        'Key' => '7',
    ),
)
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHP ASCII-Table - Colors Example</title>
    </head>
    <body>
       <pre><?php new ascii_table($svg_colors,'Colors in Various Formats') ?></pre>
   </body>
</html>