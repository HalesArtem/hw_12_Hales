<?php

class HtmlViewer extends Viewer
{
	public $canView;


	public function show()
	{
		// $canView = Viewable::CANNOT_VIEW;

		$html = '';

		foreach ($this->items as $item) {
			$html .= '<h2>' . $item->getTitle() . '</h2>';
			$html .= '<p>' . $item->getInfo() . '</p>';
		}

		return $html;
	}
}