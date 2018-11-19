<?php
	include("includes/config.php");
	include("includes/classes/Review.php");
	include("includes/classes/Constants.php"); 
	include("includes/header.php");

	if(isset($_SESSION['userId'])) {
		$userId=$_SESSION['userId'];		
	}
	if(isset($_POST['reviewButton'])){
		echo 'Thanks for the review !';
	}
	if (isset($_GET['id'])){
		$_SESSION['productId']= $_GET['id'];
	}
	$review = new Review($userId,$_SESSION['productId'],$con);
	include("includes/handlers/review-handler.php");
?>
	<div id="reviewContainer">
		<form id="reviewForm" action="review.php" method="Post">
			<p>
				<?php echo $review->getError(Constants::$alreadyReviewed); ?>
				<label for="username">Username </label>
				<input id="username" name="username" type="text"  required>
			</p>
			<p>
				<label for="rating">Rating </label>
				<input id="rating" name="rating" type="text"  required>
			</p>
			<p>
				<?php echo $review->getError(Constants::$reviewLength); ?>
				<label for="reviewText">Review </label>
				<input id="reviewText" name="reviewText" type="text"  required>
			</p>
			<button type="submit" name="reviewButton">SUBMIT</button>
		</form>
	</div>

<?php
 include("includes/footer.php"); 
 ?> 