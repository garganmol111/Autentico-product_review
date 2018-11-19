<?php

class Review{
	private $con;
	private $username;
	private $productId;
	private $review;
	private $errorArray;
	public function __construct($username,$productId,$con){
		$this->con=$con;
		$this->errorArray=array();
		$this->username=$username;
		$this->productId=$productId;
	}
	public function getError($error){
		if(!in_array($error,$this->errorArray)){
			$error="";
		}
		return "<span class='errorMessage'>$error</span>";
	}

	private function validateReviewLength($re){
		if (strlen($re)<10){
			array_push($this->errorArray,Constants::$reviewLength);
			return;
		}
	}
	private function validateUniqueReview($re){
		$query = "SELECT id FROM users WHERE username=?";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('s',$this->username);
        $stmt->execute();
        $stmt->bind_result($cun);
        $stmt->fetch();
		$checkReview=mysqli_query($this->con,"SELECT COUNT(*) FROM reviews WHERE userId='$cun' AND productId='$this->productId' ");
		if ($checkReview!=0){
			array_push($this->errorArray,Constants::$alreadyReviewed);
			return;
		}
	}
	private function insertReview($re){
		$query = "INSERT INTO reviews VALUES (?,?,'$re')";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('ss',$this->username,$this->productId);
        $stmt->execute();
        $stmt->bind_result($result);
        $stmt->fetch();
		return $result;
	}
	public function review($re){
		$this->validateReviewLength($re);
		$this->validateUniqueReview($re);
		if(empty(($this->errorArray))==true){
			return $this->insertReview($re);
		}
		else {
			return false;
		}
	}

}
?>