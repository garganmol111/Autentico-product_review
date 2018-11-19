<?php

class Review{
	private $con;
	private $userId;
	private $productId;
	private $review;
	private $errorArray;
	public function __construct($userId,$productId,$con){
		$this->con=$con;
		$this->errorArray=array();
		$this->userId=$userId;
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
		$checkReview=mysqli_query($this->con,"SELECT COUNT(*) FROM reviews WHERE userId='$this->userId' AND productId='$this->productId' ");
		if ($checkReview!=0){
			array_push($this->errorArray,Constants::$alreadyReviewed);
			return;
		}
	}
	private function insertReview($re){
		$query = "INSERT INTO reviews VALUES (?,?,?)";
        $stmt = $this->con->prepare($query);
        $stmt->bind_param('sss',$this->userId,$this->productId, $re);
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