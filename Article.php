<?php

class Article implements Viewable
{
	public $title;
	public $author;
	public $content;
	public $date;

	public function __construct($title, $author, $content, $date)
	{
		$this->title = $title;
		$this->author = $author;
		$this->content = $content;
		$this->date = $date;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getInfo()
	{
		return $this->author . ': ' . $this->content . ' / ' . $this->date;
	}
}