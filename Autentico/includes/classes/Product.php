<?php

class Product{
	private $con;
	private $id;
	private $name;
	private $sellerId;
	private $productType;
	private $description;
	private $imagePath;
	private $price;
	public function __construct($con,$id){
		$this->con=$con;
		$this->id=$id;
		$productQuery=mysqli_query($this->con,"SELECT * FROM products WHERE id='$this->id'");
		$product=mysqli_fetch_array($productQuery);
		$this->name=$product['name'];
		$this->sellerId=$product['sellerId'];
		$this->productType=$product['productType'];
		$this->description=$product['description'];
		$this->imagePath=$product['imagePath'];
		$this->price=$product['price'];
	}
	public function getName(){
		return $this->name;
	}
	public function getSellerId(){
		return $this->sellerId;
	}
	public function getSeller(){
		$seller=mysqli_query($this->con,"SELECT * FROM sellers WHERE sellerId='$this->sellerId'");
		$row=mysqli_fetch_array($seller);
		return $row['name'];
	}
	public function getProductType(){
		$prodType=mysqli_query($this->con,"SELECT * FROM productType WHERE id='$this->productType'");
		$row=mysqli_fetch_array($prodType);
		return $row['productType'];
	}
	public function getDescription(){
		return $this->description;
	}
	public function getImagePath(){
		return $this->imagePath;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getReviews(){
		$reviews=mysqli_query($this->con,"SELECT id FROM reviews WHERE productId='$this->id'");
		$array=array();
		while($row=mysqli_fetch_array($reviews)){
			array_push($array, $row['id']);
		}
		return $array;
	}
}



?>