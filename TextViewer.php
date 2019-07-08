<?php

class TextViewer extends Viewer
{
	public function show()
	{
		$text = '';

		foreach ($this->items as $item) {
			$text .= $item->getTitle() . "\n";
			$text .= $item->getInfo() . "\n";
		}

		return $text;
	}
}