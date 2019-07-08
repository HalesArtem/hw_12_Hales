<?php

	require_once('Viewer.php');
	require_once('HtmlViewer.php');
	require_once('Product.php');

	$viewer = new HtmlViewer;

	$viewer->addItem(new Product(1, 'Macbook', 'Notebook', 1500));
	$viewer->addItem(new Product(2, 'Thinkpad', 'Notebook', 800));

?>
<!DOCTYPE html>
<html>
<head>
	<title>Products List</title>
</head>
<body>
	<?=$viewer->show()?>
</body>
</html>