<?php

abstract class Viewer
{
	protected $items = [];

	public function addItem(Viewable $item)
	{
		$this->items[] = $item;
	}

	abstract public function show();
}