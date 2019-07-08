<?php



$product = Product::findOne(1);

// $product->delete();

$product->setTitle('Some new title');
$product->save();

//

$product = new Product(0, 'Some product', 'Notebook', 1200);
$product->save();

