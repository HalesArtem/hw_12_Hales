<?php

require_once('Product.php');
require_once('Viewer.php');
require_once('TextViewer.php');

$textViewer = new TextViewer;


$textViewer->addItem(new Product(1, 'Macbook', 'Notebook', 1500));
$textViewer->addItem(new Product(2, 'Thinkpad', 'Notebook', 800));

echo $textViewer->show();