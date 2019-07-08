<?php

class Product implements Viewable
{
	public $id;
	public $title;
	public $category;
	public $price;

	public function __construct($id = 0, $title = '', $category = '', $price = 0)
	{
		$this->id = $id;
		$this->title = $title;
		$this->category = $category;
		$this->price = $price;
	}

	public function getInfo()
	{
		return $this->title . ' / ' . $this->category . ' Price: $' . $this->price;
	}

	public function getTitle()
	{
		return $this->title;
	}

	///

	public static function findOne($id)
	{
		$db = new Database();
		$sql = 'select * from products where id=:id';
		$query = $db->connection->prepare($sql);
		$query->bindValue(':id', $id);
		$query->execute();
		$data = $query->fetchObject();

		return new self(
			$data->id, 
			$data->title, 
			$data->category,
			$data->price
		);
	}

	public function delete()
	{
		$db = new Database();
		$sql = 'delete from products where id=:id';
		$query = $db->connection->prepare($sql);
		$query->bindValue(':id', $this->id);
		$query->execute();
	}

	public function save()
	{
		$db = new Database();
		if ($this->id) {
			$sql = 'update products 
				set 
					title=:title, 
					category=:category, 
					price=:price 
				where 
					id=:id;';
		} else {
			$sql = 'insert into products 
				set 
					title=:title, 
					category=:category, 
					price=:price;';
		}

		$query = $db->connection->prepare($sql);
		$query->bindValue(':id', $this->id);
		$query->execute();
	}
}