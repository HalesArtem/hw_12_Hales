<?php
	require_once('Viewable.php');
	require_once('Viewer.php');
	require_once('HtmlViewer.php');
	require_once('Article.php');

	$viewer = new HtmlViewer;

	$viewer->addItem(new Article('Test', 'John Doe', 'Some text here', '23 June'));

?>

<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>
	<?=$viewer->show()?>
</body>
</html>